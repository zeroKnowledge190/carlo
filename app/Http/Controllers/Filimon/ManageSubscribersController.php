<?php

namespace App\Http\Controllers\Filimon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\FilimonServices\SubscribersService;
use App\User;
use Auth;
use Validator;
use Exception;

class ManageSubscribersController extends Controller
{
    protected $subscribersService;

    public function __construct(SubscribersService $subscribersService)
    {
        $this->subscribersService = $subscribersService;
    }

    public function index()
    {
        try {
            $viewSubscribers = $this->subscribersService->indexView();
            return $viewSubscribers;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function emailTo(Request $request)
    {
        try {
            $emailTo = $this->subscribersService->emailTo($request);
            return $emailTo;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function subscribersDtAjax(Request $request)
    {
        try {
            return $this->subscribersService->subscribersDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}