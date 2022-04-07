<?php

namespace App\Http\Controllers\Filimon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\FilimonServices\NavbarService;
use App\User;
use Auth;
use Validator;
use Exception;

class NavbarsController extends Controller
{
    protected $navbarService;

    public function __construct(NavbarService $navbarService)
    {
        $this->navbarService = $navbarService;
    }

    public function index()
    {
        try {
            $viewNavbars = $this->navbarService->indexView();
            return $viewNavbars;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function addNavlink(Request $request)
    {
        try {
            $addNavlink = $this->navbarService->addNavlink($request);
            return $addNavlink;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function editNavlink(Request $request)
    {
        try {
            $editNavlink = $this->navbarService->editNavlink($request);
            return $editNavlink;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function deleteNavlink(Request $request)
    {
        try {
            $editNavlink = $this->navbarService->deleteNavlink($request);
            return $editNavlink;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function navbarsDtAjax(Request $request)
    {
        try {
            return $this->navbarService->navbarsDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}