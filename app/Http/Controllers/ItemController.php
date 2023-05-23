<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Tax;
use App\Models\Category;
use Excel;
use App\Exports\ItemsExport;
use App\Imports\ItemImport;
use File;
use Response;
use PDF;



class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.item.manage',[
            'items'=>Item::orderBy('id', 'desc')->take(500)->get()]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.item.add',[
            'taxes'=>Tax::all(),
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Item::saveData($request);
        return redirect()->route('items.index')->with('success','Item Info Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.item.show',['item'=>Item::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.item.edit', ['item' => Item::find($id),'taxes'=>Tax::all(),
        'categories'=>Category::all(),]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Item::updateData($request,$id);
        return redirect()->route('items.index')->with('success',' Item Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->item=Item::find($id);

        $this->item->delete();
        return redirect()->route('items.index')->with('success','Item Delete successfully');
    }

    public function deleteMultiple(Request $request)
    {
        $ids = $request->ids;
        Item::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'success'=>"Item deleted successfully."]);
         
    }

    public function exportItem(){
       return Excel::download(new ItemsExport,'items.xlsx');
    }

    public function importItem(Request $request){
        return Excel::import(new ItemImport, $request->file('file'));
       
     }

     public function import(){
        return view('backend.item.import');
     }

     public function downloadPDF($id) {
        $item = Item::find($id);
        $pdf = PDF::loadView('backend.item.download', compact('item'));
        
        return $pdf->download('item.pdf');
        return redirect()->route('items.index')->with('success',' Item Downloaded successfully');

}
}
