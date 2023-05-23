<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Income;
use Excel;
use App\Exports\IncomeExport;
use App\Imports\IncomeImport;
use File;
use Response;
use PDF;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.income.manage',[
            'incomes'=>Income::orderBy('id', 'desc')->take(500)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.income.add',[
            'customers'=>Customer::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Income::saveData($request);
        return redirect()->route('incomes.index')->with('success','Income Info Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.income.show',['income'=>Income::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.income.edit', ['income' => Income::find($id), 'customers'=>Customer::all()]);

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
        Income::updateData($request,$id);
        return redirect()->route('incomes.index')->with('success',' Income Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->income=Income::find($id);

        if(file_exists($this->income->attachment)){
            unlink($this->income->attachment);
        }

        $this->income->delete();
        return redirect()->route('incomes.index')->with('success','Income Delete successfully');
    }

    public function deleteMultiple(Request $request)
    {
        $ids = $request->ids;
        Income::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'success'=>"Income deleted successfully."]);
         
    }

    public function exportIncome(){
        return Excel::download(new IncomeExport,'incomes.xlsx');
     }
 
     public function importIncome(Request $request){
         return Excel::import(new IncomeImport, $request->file('file'));
        
      }
 
      public function import(){
         return view('backend.income.import');
      }
 
      public function downloadPDF($id) {
         $income = Income::find($id);
         $pdf = PDF::loadView('backend.income.download', compact('income'));
         
         return $pdf->download('income.pdf');
         return redirect()->route('incomes.index')->with('success',' Income Downloaded successfully');
 
 }
}
