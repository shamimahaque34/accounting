<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Company;
use App\Models\CompanyIbs;
use App\Models\Customer;
use App\Models\Tax;
use Excel;
use App\Exports\InvoiceExport;
use App\Imports\InvoiceImport;
use File;
use Response;
use PDF;
use Mail;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.invoice.manage',[
        'invoices'=>Invoice::orderBy('id', 'desc')->take(500)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.invoice.add',[
            'companies'=>Company::all(),
            'companyIbses'=>CompanyIbs::all(),
            'customers'=>Customer::all(),
            'taxIds'=>Tax::all()
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
        $this->invoice = Invoice::saveData($request);
        return redirect()->route('invoices.index')->with('success','Invoice Info Create successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.invoice.show',['invoice'=>Invoice::find($id),]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.invoice.edit', ['invoice' => Invoice::find($id),'companies'=>Company::all(),'companyIbses'=>CompanyIbs::all(), 'customers'=>Customer::all(),'taxIds'=>Tax::all()]);

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
        Invoice::updateData($request,$id);
        return redirect()->route('invoices.index')->with('success',' Invoice Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->invoice=Invoice::find($id);

        $this->invoice->delete();
        return redirect()->route('invoices.index')->with('success','Invoice Delete successfully');
    }

    public function deleteMultiple(Request $request)
    {
        $ids = $request->ids;
        Invoice::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'success'=>"Invoice deleted successfully."]);
         
    }


    public function exportInvoice()
     {
        return Excel::download(new InvoiceExport,'invoices.xlsx');
     }
 
     public function importInvoice(Request $request)
     {
         return Excel::import(new InvoiceImport, $request->file('file'));
        
      }
 
      public function import()
      {
         return view('backend.invoice.import');
      }

     
 
      public function downloadPDF($id)
      {
        
         $invoice = Invoice::find($id);
         $pdf = PDF::loadView('backend.invoice.download', compact('invoice'));
        
         return $pdf->download('invoice.pdf');
         return redirect()->route('invoices.index')->with('success',' Invoice Downloaded successfully');
 
      }

      public function customerDetail()
      {
        $this->id = $_GET['id'];
        $this->customers = Customer::where('id', $this->id)->get();
        return response()->json($this->customers);
      }

      public function sendMail( Request $request ,$id)
      {

        // $this->id = $_GET['id'];
        // $this->customer = Customer::where('id', $this->id)->get();
        $invoice = Invoice::find($id);
      
       
           \Mail::to($request->sender_email)->send(new \App\Mail\InvoiceMail($invoice));
           return redirect()->route('invoices.index')->with('success',' Email send successfully');
 
      }
}
