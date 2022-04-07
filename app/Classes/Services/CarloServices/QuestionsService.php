<?php

namespace App\Classes\Services\CarloServices;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use App\Models\Questions;
use App\Models\CarloFiles;
use Image;
use Validator;
use Session;
use DB;
use Auth;
use Exception;

class QuestionsService
{
    public function indexView()
    {
        try {
            return view('carlo_web.manage_questions');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function questionsForm()
    {
        try {
            $token = '';
            if (Auth::user()){
            $token = csrf_token();
            }
            return view('carlo_web.questions',[
                'token' => $token
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function saveQuestions($request)
    {
        try {
            $createQuestions = Questions::saveQuestions($request);
            return $createQuestions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function saveUploadQuestionFiles($request) 
	{ 
	    
		DB::beginTransaction();
        try {
        $validation = Validator::make($request->all(), [
            'hic_documents' => 'image|mimes:jpeg,png,jpg,pdf|max:4048'
            // 'hic_documents' => 'file|mimetypes:video/mp4'
        ]);

        $pFiles = new CarloFiles;
        $pFiles->file_id_no = mt_rand(100000, 999999);
        $pFiles->file_name = $request->file_name;
        $pFiles->file_status = 'New File';
        $pFiles->created_by = Auth::user()->full_name;
       
        if ($validation->passes()){
            if ($request->hasFile('hic_documents')) {
                $document = $request->file('hic_documents');
                
                $filename = time() . '.' . $document->getClientOriginalExtension();
                $location = public_path('uploads/documents/'. $filename);
                Image::make($document)->save($location);
                $pFiles->hic_documents = $filename;     
                
            }
        $pFiles->save();
            DB::commit();
            return redirect()->back()->with('message', 'Your file was uploaded');
        } else {
            return response()->json(['errorStatus' => 1]);
        }

        } catch (Exception $e){
            return $e->getMessage();
        }
	}

    public function viewQuestionForm($request)
    {
        try {
            $qToken = csrf_token();
            $viewQ = DB::table('questions')->where('question_id_no', $request->id)->first();
            return view('carlo_web.view_question_form', [
                'viewQ' => $viewQ,
                'qToken' => $qToken
            ]);
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function updateQuestions($request)
    {
        try {
            $updateQuestions = Questions::saveUpdatedQuestions($request);
            return $updateQuestions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function deleteQuestions($request)
    {
        try {
            $deleteQuestions = Questions::saveDeletedQuestions($request);
            return $deleteQuestions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function questionsDataTable($request)
    {
        try {
            $queryJobs = DB::table('questions')
                                ->select(
                                    'id',
                                    'question_id_no',
                                    'date_created',
                                    'entity_name',
                                    'question',
                                    'question_status',
                                    'created_by',
                                    'created_at')->get();
            $jobs = datatables()->of($queryJobs);
            return $jobs
            ->addColumn('action', function ($data) {
                if (Auth::user()->user_account_type == 'Administrator'){
                $action = '<a target="_blank" href="/view-questions-form/'. $data->question_id_no.'" style="text-decoration:none;">
                            <button class="btn btn-primary btn-xs" type="button"
                            data-q-id="'. $data->id .'"
                            data-q-id-no"'. $data->question_id_no .'"
                            data-q-entity-name="'. $data->entity_name .'"
                            data-q-status="'. $data->question_status .'"
                            data-q-created-by="'. $data->created_by .'"
                            >
                            <i class="fa fa-pencil-square"></i> View
                        </button>
                    </a>';
                return $action;
                }
            })->make();
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }
}
