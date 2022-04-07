<?php

namespace App\Http\Controllers\Carlo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\CarloServices\ManageFilesService;
use App\User;
use Auth;
use Validator;
use Exception;
use Session;
use DB;

class ManageFilesController extends Controller
{
    protected $manageFilesService;

    public function __construct(ManageFilesService $manageFilesService)
    {
        $this->manageFilesService = $manageFilesService;
    }

    public function index(Request $request)
    {
        try {
            $viewFiles = $this->manageFilesService->indexView($request);
            return $viewFiles;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function saveDeleteFiles(Request $request, $fileIdNo)
	{
	     try {
            $deleteFiles = $this->manageFilesService->saveDeleteFiles($request, $fileIdNo);
            return $deleteFiles;
        } catch (Exception $e){
            return $e->getMessage();
        }
	}
	
	public function editFilesForm(Request $request, $fileIdNo)
    {
        try {
            return $this->manageFilesService->editFilesForm($request, $fileIdNo);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function saveEditFiles(Request $request, $fileIdNo)
    {
        try {
            return $this->manageFilesService->saveEditFiles($request, $fileIdNo);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function deleteAds(Request $request, $adsIdNo)
    {
        try {
            $deleteAdsForm = $this->manageFilesService->deleteAdsForm($request, $adsIdNo);
            return $deleteAdsForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function filesDtAjax(Request $request)
    {
        try {
            return $this->manageFilesService->filesDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}