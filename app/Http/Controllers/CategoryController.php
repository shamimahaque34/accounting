<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Excel;
use App\Exports\CategoryExport;
use App\Imports\CategoryImport;
use File;
use Response;
use PDF;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.category.manage',[
            'categories'=>Category::orderBy('id', 'desc')->take(500)->get()]);
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::saveData($request);
        return redirect()->route('categories.index')->with('success','Category Info Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.category.show',['category'=>Category::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.category.edit', ['category' => Category::find($id)]);
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
        Category::updateData($request,$id);
        return redirect()->route('categories.index')->with('success',' Category Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->category=Category::find($id);

        $this->category->delete();
        return redirect()->route('categories.index')->with('success','Category Delete successfully');
    }


    public function exportCategory(){
        return Excel::download(new CategoryExport,'categories.xlsx');
     }
 
     public function importCategory(Request $request){
         return Excel::import(new CategoryImport, $request->file('file'));
        
      }
 
      public function import(){
         return view('backend.category.import');
      }
 
      public function downloadPDF($id) {
         $category = Category::find($id);
         $pdf = PDF::loadView('backend.category.download', compact('category'));
         
         return $pdf->download('category.pdf');
         return redirect()->route('categories.index')->with('success',' Category Downloaded successfully');
 
 }
}
