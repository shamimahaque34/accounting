<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Currency;
use Excel;
use App\Exports\CustomerExport;
use App\Imports\CustomerImport;
use File;
use Response;
use PDF;



class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('backend.customer.manage',[
            'customers'=>Customer::orderBy('id', 'desc')->take(500)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.customer.add',[
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
        
        Customer::saveData($request);
        return redirect()->route('customers.index')->with('success','Customer Info Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.customer.show',['customer'=>Customer::find($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.customer.edit', ['customer' => Customer::find($id),'currencies'=>Currency::all()]);

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
        Customer::updateData($request,$id);
        return redirect()->route('customers.index')->with('success',' Customer Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->customer=Customer::find($id);


        $this->customer->delete();
        return redirect()->route('customers.index')->with('success','Customer Delete successfully');
    }


    public function exportCustomer(){
        return Excel::download(new CustomerExport,'customers.xlsx');
     }
 
     public function importCustomer(Request $request){
         return Excel::import(new CustomerImport, $request->file('file'));
        
      }
 
      public function import(){
         return view('backend.customer.import');
      }
 
      public function downloadPDF($id) {
         $customer = Customer::find($id);
         $pdf = PDF::loadView('backend.customer.download', compact('customer'));
         
         return $pdf->download('customer.pdf');
         return redirect()->route('customers.index')->with('success',' Customer Downloaded successfully');
 
 }
}
