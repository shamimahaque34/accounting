<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyIbs extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_name',
        'account_no',
        'bank_name',
        'bank_branch_name',
        'tin_no',
        'vat_bin_no',
        'contact_number_and_bkash_number',
       
        
    ];

    protected static $company_ibs;

    public static function saveData($request)
    {
       self::  $company_ibs= new CompanyIbs();
       CompanyIbs::insertData($request);
    }

    public static function updateData($request,$id)
    {
      self:: $company_ibs= CompanyIbs::find($id);
      CompanyIbs::insertData($request,self::$company_ibs);
    }

    public static function insertData($request,  $company_ibs = null)
    {   
        self::  $company_ibs->account_name                    = $request->account_name;
        self::  $company_ibs->account_no                      = $request->account_no;
        self::  $company_ibs->bank_name                       = $request->bank_name;
        self::  $company_ibs->bank_branch_name                = $request->bank_branch_name;
        self::  $company_ibs->tin_no                          = $request->tin_no;
        self::  $company_ibs->vat_bin_no                      = $request->vat_bin_no;
        self::  $company_ibs->contact_number_and_bkash_number = $request->contact_number_and_bkash_number;
        self::  $company_ibs->save();
    }
}
