<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;


class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            return view('backend.currency.manage',[
                'currencies'=>Currency::orderBy('id', 'desc')->take(500)->get()]);
               
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.currency.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Currency::saveData($request);
        return redirect()->route('currencies.index')->with('success','Currency Info Create successfully');
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
        return view('backend.currency.edit', ['currency' => Currency::find($id)]);
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
        Currency::updateData($request,$id);
        return redirect()->route('currencies.index')->with('success',' Currency Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->currency=Currency::find($id);

        $this->currency->delete();
        return redirect()->route('currencies.index')->with('success','Currency Delete successfully');
    }

    public function deleteMultiple(Request $request)
    {
        $ids = $request->ids;
        Currency::whereIn('id',explode(",",$ids))->delete();
        return response()->json(['status'=>true,'success'=>"Currency deleted successfully."]);
         
    }
}
