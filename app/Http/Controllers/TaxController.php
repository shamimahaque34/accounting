<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tax;
use Excel;
use App\Exports\TaxExport;
use App\Imports\TaxImport;
use File;
use Response;
use PDF;


class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('backend.tax.manage',[
            'taxes'=>Tax::orderBy('id', 'desc')->take(500)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tax.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tax::saveData($request);
        return redirect()->route('taxes.index')->with('success','Tax Info Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.tax.show',['tax'=>Tax::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.tax.edit', ['tax' => Tax::find($id)]);

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
        Tax::updateData($request,$id);
        return redirect()->route('taxes.index')->with('success',' Tax Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->tax=Tax::find($id);

        $this->tax->delete();
        return redirect()->route('taxes.index')->with('success','Tax Delete successfully');
    }


    public function deleteMultiple(Request $request)
    {
        $ids = $request->ids;
        Tax::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'success'=>"Tax deleted successfully."]);
         
    }

    public function exportTax(){
        return Excel::download(new TaxExport,'taxes.xlsx');
     }
 
     public function importTax(Request $request){
         return Excel::import(new TaxImport, $request->file('file'));
        
      }
 
      public function import(){
         return view('backend.tax.import');
      }
 
      public function downloadPDF($id) {
         $tax = Tax::find($id);
         $pdf = PDF::loadView('backend.tax.download', compact('tax'));
         
         return $pdf->download('tax.pdf');
         return redirect()->route('taxes.index')->with('success','Tax Downloaded successfully');
 
 }
}
