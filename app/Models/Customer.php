<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'name',
        'email',
        'phone',
        'website',
        'reference',
        'tax_number',
        'currency_id',
        'address',
        'town',
        'postal_code',
        'state',
        'country',
       
    ];

    protected static $customer;

    public static function saveData($request)
    {
       self::  $customer= new Customer();
       Customer::insertData($request);
    }

    public static function updateData($request,$id)
    {
      self:: $customer= Customer::find($id);
      Customer::insertData($request,self::$customer);
    }

    public static function insertData($request,  $customer= null)
    {   
        self::  $customer->name          = $request->name;
        self::  $customer->email         = $request->email;
        self::  $customer->phone         = $request->phone;
        self::  $customer->website       = $request->website;
        self::  $customer->reference     = $request->reference;
        self::  $customer->tax_number    = $request->tax_number;
        self::  $customer->currency_id   = $request->currency_id;
        self::  $customer->address       = $request->address;
        self::  $customer->town          = $request->town;
        self::  $customer->postal_code   = $request->postal_code;
        self::  $customer->state         = $request->state;
        self::  $customer->country       = $request->country;
        self::  $customer->save();
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
