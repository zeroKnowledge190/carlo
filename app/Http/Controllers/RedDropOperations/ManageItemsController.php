<?php

namespace App\Http\Controllers\RedDropOperations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\Items\ManageItemsService;
use App\User;
use App\Models\RdItems;
use Auth;
use Validator;
use Exception;

class ManageItemsController extends Controller
{
    protected $manageItems;

    public function __construct(ManageItemsService $manageItems)
    {
        $this->manageItems = $manageItems;
    }

    public function index()
    {
        try {
            $viewItems = $this->manageItems->indexView();
            return $viewItems;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function itemsDtAjax(Request $request)
    {
        try {
            return $this->manageItems->dataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function searchItems(Request $request)
    {
        try {
            return $this->manageItems->dataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function addItems(Request $request)
    {
        try {
            $addItems = $this->manageItems->addItems($request);
            return $addItems;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function editItems(Request $request)
    {
        try {
            $updatedItems = $this->manageItems->editItems($request);
            return $updatedItems;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function deleteItems(Request $request)
    {
        try {
            $deletedItems = $this->manageItems->deleteItems($request);
            return $deletedItems;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}