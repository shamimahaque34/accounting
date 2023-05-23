<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'company_ibs_id',
        'sender_email',
        'tax_id',
        'invoice_type',
        'invoice_date',
        'invoice_number',
        'order_date',
        'memo_number',
        'heading',
        'position',
        'published_date',
        'inch',
        'rate',
        'customer_id',
        'customer_name',
        'customer_email',
        'customer_tax_number',
        'customer_phone',
        'customer_address',
        'color_charge',
        'color_charge_cal',
        'first_page_charge',
        'first_page_charge_cal',
        'back_page_charge',
        'commercial_charge',
       'commercial_charge_cal',
        'commision',
        'vat',
        'vat_cal',
        'tax_cal',
        'total_taka_cal',
        'payable_taka_cal',
        'total',
    ];

    protected static $invoice;

    public static function saveData($request)
    {
       self:: $invoice= new Invoice();
       invoice::insertData($request);
      
    }

    public static function updateData($request,$id)
    {
      self:: $invoice= Invoice::find($id);
      Invoice::insertData($request,self::$invoice);
    }

    public static function insertData($request,  $invoice= null)
    {   
        self::  $invoice->company_id            = $request->company_id;
        self::  $invoice->company_ibs_id        = $request->company_ibs_id;
        self::  $invoice->sender_email          = $request->sender_email;
        self::  $invoice->tax_id                = $request->tax_id;
        self::  $invoice->invoice_type          = $request->invoice_type;
        self::  $invoice->invoice_date          = $request->invoice_date;
        self::  $invoice->invoice_number        = $request->invoice_number;
        self::  $invoice->order_date            = $request->order_date;
        self::  $invoice->memo_number           = $request->memo_number;
        self::  $invoice->heading               = $request->heading;
        self::  $invoice->position              = $request->position;
        self::  $invoice->published_date        = $request->published_date;
        self::  $invoice->inch                  = $request->inch;
        self::  $invoice->rate                  = $request->rate;
        self::  $invoice->customer_id           = $request->customer_id;
        self::  $invoice->customer_name         = $request->customer_name;
        self::  $invoice->customer_email        = $request->customer_email;
        self::  $invoice->customer_tax_number   = $request->customer_tax_number;
        self::  $invoice->customer_phone        = $request->customer_phone;
        self::  $invoice->customer_address      = $request->customer_address;
        self::  $invoice->color_charge          = $request->color_charge;
        self::  $invoice->color_charge_cal      = ($request->color_charge*$request->total)/100;
        self::  $invoice->first_page_charge     = $request->first_page_charge;
        self::  $invoice->first_page_charge_cal = ($request->first_page_charge*$request->total)/100;
        self::  $invoice->back_page_charge      = $request->back_page_charge;
        self::  $invoice->commercial_charge     = $request->commercial_charge;
        self::  $invoice->commercial_charge_cal = ($request->commercial_charge*$request->total)/100;
        self::  $invoice->commision             = $request->commision;
        self::  $invoice->vat                   = $request->vat;
        self::  $invoice->vat_cal               = (($request->vat)* ($request->total)+($request->color_charge*$request->total)/100+($request->first_page_charge*$request->total)/100+($request->commercial_charge*$request->total)/100)/100;
        self::  $invoice->tax_cal               = ($request->tax_id*$request->total)/100;
        self::  $invoice->total                 = $request->total;
        self::  $invoice->total_taka_cal        = ($request->total)+($request->color_charge*$request->total)/100+($request->first_page_charge*$request->total)/100+($request->commercial_charge*$request->total)/100+($request->vat*$request->total)/100+($request->tax_id*$request->total)/100;
        self::  $invoice->payable_taka_cal      = $request->total;
        self::  $invoice->save();
        return self:: $invoice;

       
    }

    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }

    public function companyIbs()
    {
        return $this->belongsTo(CompanyIbs::class,'company_ibs_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function tax()
    {
        return $this->belongsTo(Tax::class);
    }
}
