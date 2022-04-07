<?php

namespace App\Http\Controllers\Filimon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\FilimonServices\RegisterUserService;
use App\User;
use Auth;
use Validator;
use Exception;

class RegisterUserController extends Controller
{
    protected $registerService;

    public function __construct(RegisterUserService $registerService)
    {
        $this->registerService = $registerService;
    }

    public function create(Request $request)
    {
        try {
            $addUser = $this->registerService->addUser($request);
            return $addUser;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function createUser(Request $request)
    {
        try {
            $addUsers = $this->registerService->createUser($request);
            return $addUsers;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
}