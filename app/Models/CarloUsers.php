<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Exception;
use DB;
use Auth;

class CarloUsers extends Model
{
    protected $table = "users";
    protected $guarded = ['id'];
    
    public static function addCarloUser($request)
    {
        DB::beginTransaction();
        try {
        $createUser = self::create([
            'hic_id_no' => mt_rand(100000, 999999),
            'full_name' => $request->cFullName,
            'user_gender' => $request->cGender,
            'date_of_birth' => $request->cDateOfBirth,
            'user_civil_status' => $request->cCivilStatus,
            'hic_contact_no' => $request->cContactNo,
            'landline_number' => $request->cLandLineNo,
            'hic_city' => $request->cCityProvince,
            'hic_village' => $request->cVillage, 
            'complete_address' => $request->cFullAddress,     
            'hic_user_status' => 'New',
            'user_account_type' => 'Citizen',       
            'email' => $request->hic_email,
            'password' => bcrypt($request->hic_password)
        ]);
            DB::commit();
            return $createUser; 
        } catch (Exception $e){
            DB::rollback();
            return $e->getMessage();
        } 
    }

}


