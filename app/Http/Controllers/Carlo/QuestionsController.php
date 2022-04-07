<?php

namespace App\Http\Controllers\Carlo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Classes\Services\CarloServices\QuestionsService;
use App\User;
use Auth;
use Validator;
use Exception;

class QuestionsController extends Controller
{
    protected $questionsService;

    public function __construct(QuestionsService $questionsService)
    {
        $this->questionsService = $questionsService;
    }

    public function index()
    {
        try {
            $viewQuestions = $this->questionsService->indexView();
            return $viewQuestions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function questionsForm()
    {
        try {
            $qForm = $this->questionsService->questionsForm();
            return $qForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function viewQuestionForm(Request $request)
    {
        try {
            $viewQuestionsForm = $this->questionsService->viewQuestionForm($request);
            return $viewQuestionsForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveQuestions(Request $request)
    {
        try {
            $createQuestion = $this->questionsService->saveQuestions($request);
            return $createQuestion;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function saveUploadQuestionFiles(Request $request)
    {
        try {
            $qFileForm = $this->questionsService->saveUploadQuestionFiles($request);
            return $qFileForm;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function updateQuestions(Request $request)
    {
        try {
            $updateQuestions = $this->questionsService->updateQuestions($request);
            return $updateQuestions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function deleteQuestions(Request $request)
    {
        try {
            $editQuestions = $this->questionsService->deleteQuestions($request);
            return $editQuestions;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
    
    public function questionsDtAjax(Request $request)
    {
        try {
            return $this->questionsService->questionsDataTable($request);
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

}