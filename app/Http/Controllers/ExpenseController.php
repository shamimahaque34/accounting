<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Vendor;
use Excel;
use App\Exports\ExpenseExport;
use App\Imports\ExpenseImport;
use File;
use Response;
use PDF;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.expense.manage',[
            'expenses'=>Expense::orderBy('id', 'desc')->take(500)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.expense.add',[
            'vendors'=>Vendor::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Expense::saveData($request);
        return redirect()->route('expenses.index')->with('success','Expense Info Create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.expense.show',['expense'=>Expense::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.expense.edit', ['expense' => Expense::find($id), 'vendors'=>Vendor::all()]);

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
        Expense::updateData($request,$id);
        return redirect()->route('expenses.index')->with('success','Expense Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->expense=Expense::find($id);

        if(file_exists($this->expense->attachment)){
            unlink($this->expense->attachment);
        }

        $this->expense->delete();
        return redirect()->route('expenses.index')->with('success','Expense Delete successfully');
    }

    public function exportExpense(){
        return Excel::download(new ExpenseExport,'expenses.xlsx');
     }
 
     public function importVendor(Request $request){
         return Excel::import(new ExpenseImport, $request->file('file'));
        
      }
 
      public function import(){
         return view('backend.expense.import');
      }
 
      public function downloadPDF($id) {
         $expense = Expense::find($id);
         $pdf = PDF::loadView('backend.expense.download', compact('expense'));
         
         return $pdf->download('expense.pdf');
         return redirect()->route('expenses.index')->with('success',' Expense Downloaded successfully');
 
 }
}
