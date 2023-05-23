<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'father_name',
        'date_of_birth',
        'id_card_no',
        'id_card_image',
        'parent_id_card_no',
        'parent_id_card_image',
        'bank_account_no',
        'branch',
        'blood_group',
        'facebook_account',
        'permanent_address',
        'agent_address',
        'cv',
        'mobile',
        'district',
        'sub_district',
        'password',
    ];

    protected static $registration;

    public static function saveData($request)
    {
       self:: $registration = new Register();
       Register::insertData($request);
    }

    public static function insertData($request, $registration= null)
    {
        
        self::$registration->name                 = $request->name;
        self::$registration->father_name          = $request->father_name;
        self::$registration->date_of_birth        = $request->date_of_birth;
        self::$registration->id_card_no           = $request->id_card_no;
        self::$registration->id_card_image        = isset($registration) ? saveImage($request->file('id_card_image'),'./backend/assets/image/RegistrationImages/','id_card_image',self::$registration->id_card_image,) : saveImage($request->file('id_card_image'),'./backend/assets/image/RegistrationImages/','image','',);
        self::$registration->parent_id_card_no    = $request->parent_id_card_no;
        self::$registration->parent_id_card_image = isset($registration) ? saveImage($request->file('parent_id_card_image'),'./backend/assets/image/RegistrationImages/','parent_id_card_image',self::$registration->parent_id_card_image,) : saveImage($request->file('parent_id_card_image'),'./backend/assets/image/RegistrationImages/','image','',);
        self::$registration->bank_account_no      = $request->bank_account_no;
        self::$registration->branch               = $request->branch;
        self::$registration->blood_group          = $request->blood_group;
        self::$registration->facebook_account     = $request->facebook_account;
        self::$registration->agent_address        = $request->agent_address;
        self::$registration->cv                   = isset($registration) ? saveImage($request->file('cv'),'./backend/assets/image/RegistrationCv/','cv',self::$registration->cv,) : saveImage($request->file('cv'),'./backend/assets/image/RegistrationCv/','cv','',);
        self::$registration->password             = $request->password;
        self::$registration->permanent_address    = $request->permanent_address;
        self::$registration->mobile               = $request->mobile;
        self::$registration->image                = isset($registration) ? saveImage($request->file('image'),'./backend/assets/image/RegistrationImages/','image',self::$registration->image,) : saveImage($request->file('image'),'./backend/assets/image/RegistrationImages/','image','',);
        self::$registration->district             = $request->district;
        self::$registration->email                = $request->email;
        self::$registration->sub_district         = $request->sub_district;
        self::$registration->save();
    }
}
