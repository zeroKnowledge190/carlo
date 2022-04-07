<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use DB;
use Exception;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cFullName' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        DB::beginTransaction();
        try {
        $data['hic_id_no'] = mt_rand(100000, 999999);
        DB::commit();
        return User::create([
            'hic_id_no' => $data['hic_id_no'],
            'full_name' => $data['cFullName'], 
            'user_gender' => $data['cGender'],
            'date_of_birth' => $data['cDateOfBirth'],
            'user_civil_status' => $data['cCivilStatus'],
            'hic_city' => $data['cCityProvince'],
            'hic_village' => $data['cVillage'],
            'hic_contact_no' => $data['cContactNo'],
            'landline_number' => $data['cLandLineNo'],
            'user_account_type' => $data['cCitizen'],
            'email' => $data['hic_email'],
            'password' => bcrypt($data['hic_password'])
        ]);
        } catch(Exception $e){
            DB::rollback();
            return $e->getMessage();
        }
    }
}
