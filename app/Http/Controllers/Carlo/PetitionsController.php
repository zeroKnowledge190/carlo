<?php

namespace App\Http\Controllers\Carlo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\CarloServices\PetitionsService;
use App\User;
use Auth;
use Validator;
use Exception;

class PetitionsController extends Controller
{
    protected $petitionsService;

    public function __construct(PetitionsService $petitionsService)
    {
        $this->petitionsService = $petitionsService;
    }

    public function index()
    {
        try {
            $viewPetitions = $this->petitionsService->indexView();
            return $viewPetitions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function petitionsForm()
    {
        try {
            $qForm = $this->petitionsService->petitionsForm();
            return $qForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function savePetitions(Request $request)
    {
        try {
            $createPetitions = $this->petitionsService->savePetitions($request);
            return $createPetitions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveUploadPetitionFiles(Request $request)
    {
        try {
            $pFileForm = $this->petitionsService->saveUploadPetitionFiles($request);
            return $pFileForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function viewPetitionsForm(Request $request)
    {
        try {
            $viewPetitions = $this->petitionsService->viewPetitionsForm($request);
            return $viewPetitions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function updatePetitions(Request $request)
    {
        try {
            $updatePetitions = $this->petitionsService->updatePetitions($request);
            return $updatePetitions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function deletePetitions(Request $request)
    {
        try {
            $editPetitions = $this->petitionsService->deletePetitions($request);
            return $editPetitions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function petitionsDtAjax(Request $request)
    {
        try {
            return $this->petitionsService->petitionsDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}