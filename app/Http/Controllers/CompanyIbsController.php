<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyIbs;


class CompanyIbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.company-ibs.manage',[
        'companyIbses'=>CompanyIbs::orderBy('id', 'desc')->take(500)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.company-ibs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CompanyIbs::saveData($request);
        return redirect()->route('company_ibses.index')->with('success','Company Ibs Info Create successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.company-ibs.edit', ['companyIbs' => CompanyIbs::find($id)]);

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
        CompanyIbs::updateData($request,$id);
        return redirect()->route('company_ibses.index')->with('success',' Company Ibs Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->companyIbs=CompanyIbs::find($id);

        $this->companyIbs->delete();
        return redirect()->route('company_ibses.index')->with('success','Company Ibs Delete successfully');
    }

    public function deleteMultiple(Request $request)
    {
        $ids = $request->ids;
        CompanyIbs::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'success'=>"Company Ibs deleted successfully."]);
         
    }
}
