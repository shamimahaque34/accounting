<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected static $expense;

    public static function saveData($request)
    {
       self::  $expense= new Expense();
       Expense::insertData($request);
    }

    public static function updateData($request,$id)
    {
      self:: $expense= Expense::find($id);
      Expense::insertData($request,self::$expense);
    }

    public static function insertData($request,  $expense= null)
    {   
        self::  $expense->date           = $request->date;
        self::  $expense->payment_method = $request->payment_method;
        self::  $expense->account        = $request->account;
        self::  $expense->amount         = $request->amount;
        self::  $expense->description    = $request->description ;
        self::  $expense->category       = $request->category;
        self::  $expense->vendor_id      = $request->vendor_id;
        self::  $expense->number         = $request->number;
        self::  $expense->reference      = $request->reference;
        self::  $expense->attachment     = $request->attachment;
        self::  $expense->save();
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
