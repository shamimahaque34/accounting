<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'rate',
        'precision',
        'symbol',
        'symbol_position',
        'decimal_mark',
        'thousands_separator',
        
    ];

    protected static $currency;

    public static function saveData($request)
    {
       self::  $currency= new Currency();
       Currency::insertData($request);
    }

    public static function updateData($request,$id)
    {
      self:: $currency= Currency::find($id);
      Currency::insertData($request,self::$currency);
    }

    public static function insertData($request,  $currency= null)
    {   
        self::  $currency->name                = $request->name;
        self::  $currency->code                = $request->code;
        self::  $currency->rate                = $request->rate;
        self::  $currency->precision           = $request->precision;
        self::  $currency->symbol              = $request->symbol;
        self::  $currency->symbol_position     = $request->symbol_position;
        self::  $currency->decimal_mark        = $request->decimal_mark;
        self::  $currency->thousands_separator = $request->thousands_separator;
        self::  $currency->save();
    }
}
