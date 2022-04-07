<?php

namespace App\Classes\Services\FilimonServices;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use App\Models\CarloUsers;
use DB;
use Auth;
use Exception;

class RegisterUserService
{

    public function addUser($request)
    {
        try {
            $addUser = FilUsers::addUser($request);
            return $addUser;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function createUser($request)
    {
        try {
            $addUsers = CarloUsers::addCarloUser($request);
            return $addUsers;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

}
