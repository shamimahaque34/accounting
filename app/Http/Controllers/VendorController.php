<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;
use App\Models\Vendor;
use Excel;
use App\Exports\VendorExport;
use App\Imports\VendorImport;
use File;
use Response;
use PDF;



class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('backend.vendor.manage',[
            'vendors'=>Vendor::orderBy('id', 'desc')->take(500)->get()]);
           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vendor.add',[
            'currencies'=>Currency::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vendor::saveData($request);
        return redirect()->route('vendors.index')->with('success','Vendor Info Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.vendor.show',['vendor'=>Vendor::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.vendor.edit', ['vendor' => Vendor::find($id),'currencies'=>Currency::all()]);

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
        Vendor::updateData($request,$id);
        return redirect()->route('vendors.index')->with('success',' Vendor Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->vendor=Vendor::find($id);

        if(file_exists($this->vendor->image)){
            unlink($this->vendor->image);
        }

        $this->vendor->delete();
        return redirect()->route('vendors.index')->with('success','Vendor Delete successfully');
    }


    public function exportVendor(){
        return Excel::download(new VendorExport,'vendors.xlsx');
     }
 
     public function importVendor(Request $request){
         return Excel::import(new VendorImport, $request->file('file'));
        
      }
 
      public function import(){
         return view('backend.vendor.import');
      }
 
      public function downloadPDF($id) {
         $vendor = Vendor::find($id);
         $pdf = PDF::loadView('backend.vendor.download', compact('vendor'));
         
         return $pdf->download('vendor.pdf');
         return redirect()->route('vendors.index')->with('success',' Vendor Downloaded successfully');
 
 }
}
