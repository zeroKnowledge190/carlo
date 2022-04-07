<?php

namespace App\Http\Controllers\Carlo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\CarloServices\OpinionsService;
use App\User;
use Auth;
use Validator;
use Exception;

class OpinionsController extends Controller
{
    protected $opinionsService;

    public function __construct(OpinionsService $opinionsService)
    {
        $this->opinionsService = $opinionsService;
    }

    public function index()
    {
        try {
            $viewOpinions = $this->opinionsService->indexView();
            return $viewOpinions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function opinionsForm()
    {
        try {
            $oForm = $this->opinionsService->opinionsForm();
            return $oForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveOpinions(Request $request)
    {
        try {
            $createOpinions = $this->opinionsService->saveOpinions($request);
            return $createOpinions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveUploadOpinionFiles(Request $request)
    {
        try {
            $oFileForm = $this->opinionsService->saveUploadOpinionFiles($request);
            return $oFileForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function viewOpinionsForm(Request $request)
    {
        try {
            $viewOpinionsForm = $this->opinionsService->viewOpinionsForm($request);
            return $viewOpinionsForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function updateOpinions(Request $request)
    {
        try {
            $updateOpinions = $this->opinionsService->updateOpinions($request);
            return $updateOpinions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function deleteOpinions(Request $request)
    {
        try {
            $editOpinions = $this->opinionsService->deleteOpinions($request);
            return $editOpinions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function opinionsDtAjax(Request $request)
    {
        try {
            return $this->opinionsService->opinionsDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}