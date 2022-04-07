<?php

namespace App\Http\Controllers\Carlo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\CarloServices\RequisitionsService;
use App\User;
use Auth;
use Validator;
use Exception;

class RequisitionsController extends Controller
{
    protected $requisitionsService;

    public function __construct(RequisitionsService $requisitionsService)
    {
        $this->requisitionsService = $requisitionsService;
    }

    public function index()
    {
        try {
            $viewRequisitions = $this->requisitionsService->indexView();
            return $viewRequisitions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function requisitionsForm()
    {
        try {
            $rForm = $this->requisitionsService->requisitionsForm();
            return $rForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function viewRequisitionsForm(Request $request)
    {
        try {
            $viewRequisitionsForm = $this->requisitionsService->viewRequisitionsForm($request);
            return $viewRequisitionsForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveRequisitions(Request $request)
    {
        try {
            $createRequisitions = $this->requisitionsService->saveRequisitions($request);
            return $createRequisitions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveUploadRequisitionFiles(Request $request)
    {
        try {
            $rFileForm = $this->requisitionsService->saveUploadRequisitionFiles($request);
            return $rFileForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function updateRequisitions(Request $request)
    {
        try {
            $updateRequisitions = $this->requisitionsService->updateRequisitions($request);
            return $updateRequisitions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function deleteRequisitions(Request $request)
    {
        try {
            $editRequisitions = $this->requisitionsService->deleteRequisitions($request);
            return $editRequisitions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function requisitionsDtAjax(Request $request)
    {
        try {
            return $this->requisitionsService->requisitionsDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}