<?php

namespace App\Http\Controllers\Carlo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\CarloServices\SurveysService;
use App\User;
use Auth;
use Validator;
use Exception;

class SurveysController extends Controller
{
    protected $surveysService;

    public function __construct(SurveysService $surveysService)
    {
        $this->surveysService = $surveysService;
    }

    public function index()
    {
        try {
            $viewSurveys = $this->surveysService->indexView();
            return $viewSurveys;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function surveyForm()
    {
        try {
            $sForm = $this->surveysService->surveyForm();
            return $sForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveSurveys(Request $request)
    {
        try {
            $createSurveys = $this->surveysService->saveSurveys($request);
            return $createSurveys;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveUploadSurveyFiles(Request $request)
    {
        try {
            $sFileForm = $this->surveysService->saveUploadSurveyFiles($request);
            return $sFileForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function viewSurveysForm(Request $request)
    {
        try {
            $viewSurveys = $this->surveysService->viewSurveysForm($request);
            return $viewSurveys;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function updateSurveys(Request $request)
    {
        try {
            $updateSurveys = $this->surveysService->updateSurveys($request);
            return $updateSurveys;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function deleteSurveys(Request $request)
    {
        try {
            $editSurveys = $this->surveysService->deleteSurveys($request);
            return $editSurveys;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function surveysDtAjax(Request $request)
    {
        try {
            return $this->surveysService->surveysDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}