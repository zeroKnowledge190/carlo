<?php

namespace App\Http\Controllers\Carlo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\CarloServices\ApplicationsService;
use App\User;
use Auth;
use Validator;
use Exception;

class ApplicationsController extends Controller
{
    protected $applicationsService;

    public function __construct(ApplicationsService $applicationsService)
    {
        $this->applicationsService = $applicationsService;
    }

    public function index()
    {
        try {
            $viewApplications = $this->applicationsService->indexView();
            return $viewApplications;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function applicationsForm()
    {
        try {
            $aForm = $this->applicationsService->applicationsForm();
            return $aForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveApplications(Request $request)
    {
        try {
            $createApplications = $this->applicationsService->saveApplications($request);
            return $createApplications;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveUploadApplicationFiles(Request $request)
    {
        try {
            $rFileForm = $this->applicationsService->saveUploadApplicationFiles($request);
            return $rFileForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function viewApplicationsForm(Request $request)
    {
        try {
            $viewApplications = $this->applicationsService->viewApplicationsForm($request);
            return $viewApplications;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function updateApplications(Request $request)
    {
        try {
            $updateApplications = $this->applicationsService->updateApplications($request);
            return $updateApplications;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function deletePetitions(Request $request)
    {
        try {
            $editApplications = $this->applicationsService->deleteApplications($request);
            return $editApplications;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function applicationsDtAjax(Request $request)
    {
        try {
            return $this->applicationsService->applicationsDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}