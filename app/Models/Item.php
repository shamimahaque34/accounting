<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'sku',
        'description',
        'sale_price',
        'purchase_price',
        'quantity',
        'category_id',
        'tax_id',
       
    ];

    protected static $item;

    public static function saveData($request)
    {
       self::  $item= new Item();
       Item::insertData($request);
    }

    public static function updateData($request,$id)
    {
      self:: $item= Item::find($id);
      Item::insertData($request,self::$item);
    }

    public static function insertData($request,  $item= null)
    {   
        self::  $item->name           = $request->name;
        self::  $item->sku            = $request->sku;
        self::  $item->description    = $request->description;
        self::  $item->sale_price     = $request->sale_price;
        self::  $item->purchase_price = $request->purchase_price;
        self::  $item->quantity       = $request->quantity;
        self::  $item->category_id    = $request->category_id;
        self::  $item->tax_id         = $request->tax_id;
        self::  $item->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }
}
