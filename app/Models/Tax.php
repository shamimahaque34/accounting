<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rate',
        'type',
       
    ];

    protected static $tax;

    public static function saveData($request)
    {
       self::  $tax= new Tax();
       Tax::insertData($request);
    }

    public static function updateData($request,$id)
    {
      self:: $tax= Tax::find($id);
      Tax::insertData($request,self::$tax);
    }

    public static function insertData($request,  $tax= null)
    {   
        self::  $tax->name         = $request->name;
        self::  $tax->rate         = $request->rate;
        self::  $tax->type         = $request->type;
        self::  $tax->save();
    }
}
