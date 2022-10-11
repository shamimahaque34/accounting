<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'payment_method',
        'account',
        'amount',
        'description',
        'category',
        'customer',
        'number',
        'reference',
        'attachment',
       
    ];

    protected static $income;

    public static function saveData($request)
    {
       self::  $income= new Income();
       Income::insertData($request);
    }

    public static function updateData($request,$id)
    {
      self:: $income= Income::find($id);
      Income::insertData($request,self::$income);
    }

    public static function insertData($request,  $income= null)
    {   
        self::  $income->date           = $request->date;
        self::  $income->payment_method = $request->payment_method;
        self::  $income->account        = $request->account;
        self::  $income->amount         = $request->amount;
        self::  $income->description    = $request->description ;
        self::  $income->category       = $request->category;
        self::  $income->customer_id    = $request->customer_id;
        self::  $income->number         = $request->number;
        self::  $income->reference      = $request->reference;
        self::  $income->attachment     = $request->attachment;
        self::  $income->save();
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
