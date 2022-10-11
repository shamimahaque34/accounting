<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'logo',
        'phone',
        'tax_number',
        'currency_id',
        'language_id',
        'address',
        'town',
        'postal_code',
        'state',
        'country',
        
    ];

    protected static $company;

    public static function saveData($request)
    {
       self::  $company= new Company();
       Company::insertData($request);
    }

    public static function updateData($request,$id)
    {
      self:: $company= Company::find($id);
      Company::insertData($request,self::$company);
    }

    public static function insertData($request,  $company= null)
    {   
        self::  $company->name          = $request->name;
        self::  $company->email         = $request->email;
        self::  $company->logo          = isset($company) ? saveImage($request->file('logo'),'./backend/assets/image/CompanyLogos/','logo',self::$company->logo,) : saveImage($request->file('logo'),'./backend/assets/image/CompanyLogos/','logo','',);
        self::  $company->phone         = $request->phone;
        self::  $company->tax_number    = $request->tax_number;
        self::  $company->currency_id   = $request->currency_id;
        self::  $company->language_id   = $request->language_id;
        self::  $company->address       = $request->address;
        self::  $company->town          = $request->town;
        self::  $company->postal_code   = $request->postal_code;
        self::  $company->state         = $request->state;
        self::  $company->country       = $request->country;
        self::  $company->save();
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

}
