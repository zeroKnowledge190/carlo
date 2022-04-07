<?php

namespace App\Http\Controllers\Filimon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\FilimonServices\NewsContentsService;
use App\User;
use Auth;
use Validator;
use Exception;

class NewsContentsController extends Controller
{
    protected $newsService;

    public function __construct(NewsContentsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function index()
    {
        try {
            $viewNews = $this->newsService->indexView();
            return $viewNews;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function addContent(Request $request)
    {
        try {
            $addContent = $this->newsService->addContent();
            return $addContent;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function newsContentsDtAjax(Request $request)
    {
        try {
            return $this->newsService->newsContentsDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}