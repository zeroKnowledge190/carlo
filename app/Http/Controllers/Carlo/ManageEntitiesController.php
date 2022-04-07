<?php

namespace App\Http\Controllers\Carlo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\CarloServices\ManageEntitiesService;
use App\User;
use Auth;
use Validator;
use Exception;
use Session;
use DB;

class ManageEntitiesController extends Controller
{
    protected $manageEntitiesService;

    public function __construct(ManageEntitiesService $manageEntitiesService)
    {
        $this->manageEntitiesService = $manageEntitiesService;
    }

    public function index(Request $request)
    {
        try {
            $viewEntities = $this->manageEntitiesService->indexView($request);
            return $viewEntities;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function addEntityForm(Request $request)
    {
        try {
            return $this->manageEntitiesService->addEntityForm($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveEntity(Request $request)
    {
        try {
            return $this->manageEntitiesService->saveEntity($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

	public function editEntityForm(Request $request, $entIdNo)
    {
        try {
            return $this->manageEntitiesService->editEntityForm($request, $entIdNo);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function saveEditEntity(Request $request, $entIdNo)
    {
        try {
            return $this->manageEntitiesService->saveEditEntity($request, $entIdNo);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function deleteEntityForm(Request $request, $entIdNo)
    {
        try {
            $deleteEntity= $this->manageEntitiesService->deleteEntityForm($request, $entIdNo);
            return $deleteEntity;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveDeleteEntity(Request $request, $entIdNo)
	{
	    try {
            $deleteEntities = $this->manageEntitiesService->saveDeleteEntity($request, $entIdNo);
            return $deleteEntities;
        } catch (Exception $e){
            return $e->getMessage();
        }
	}
    
    public function entitiesDtAjax(Request $request)
    {
        try {
            return $this->manageEntitiesService->entitiesDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}