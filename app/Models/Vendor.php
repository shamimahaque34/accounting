<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
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

    protected static $vendor;

    public static function saveData($request)
    {
       self::  $vendor= new Vendor();
       Vendor::insertData($request);
    }

    public static function updateData($request,$id)
    {
      self:: $vendor= Vendor::find($id);
      Vendor::insertData($request,self::$vendor);
    }

    public static function insertData($request,  $vendor= null)
    {   
        self::  $vendor->name          = $request->name;
        self::  $vendor->email         = $request->email;
        self::  $vendor->phone         = $request->phone;
        self::  $vendor->image         = isset($vendor) ? saveImage($request->file('image'),'./backend/assets/image/VendorImages/','image',self::$vendor->image,) : saveImage($request->file('image'),'./backend/assets/image/VendorImages/','image','',);
        self::  $vendor->website       = $request->website;
        self::  $vendor->reference      = $request->reference;
        self::  $vendor->tax_number    = $request->tax_number;
        self::  $vendor->currency_id   = $request->currency_id;
        self::  $vendor->address       = $request->address;
        self::  $vendor->town          = $request->town;
        self::  $vendor->postal_code   = $request->postal_code;
        self::  $vendor->state         = $request->state;
        self::  $vendor->country       = $request->country;
        self::  $vendor->save();
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
