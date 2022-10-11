<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'name',
        'type',
        'color',
        
    ];

    protected static $category;

    public static function saveData($request)
    {
       self::  $category= new Category();
       Category::insertData($request);
    }

    public static function updateData($request,$id)
    {
      self:: $category= Category::find($id);
      Category::insertData($request,self::$category);
    }

    public static function insertData($request,  $category= null)
    {   
        self::  $category->name     = $request->name;
        self::  $category->type     = $request->type;
        self::  $category->color    = $request->color;
        self::  $category->save();
    }
}
