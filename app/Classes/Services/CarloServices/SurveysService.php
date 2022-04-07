<?php

namespace App\Classes\Services\CarloServices;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use App\Models\Surveys;
use App\Models\CarloFiles;
use Image;
use Session;
use Validator;
use DB;
use Auth;
use Exception;

class SurveysService
{
    public function indexView()
    {
        try {
            return view('carlo_web.manage_surveys');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function surveyForm()
    {
        try {
            $token = '';
            if (Auth::user()){
            $token = csrf_token();
            }
            return view('carlo_web.surveys', [
                'token' => $token
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function saveSurveys($request)
    {
        try {
            $createSurveys = Surveys::saveSurveys($request);
            return $createSurveys;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function saveUploadSurveyFiles($request) 
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

    public function viewSurveysForm($request)
    {
        try {
            $sToken = csrf_token();
            $viewS = DB::table('surveys')->where('survey_id_no', $request->id)->first();
            return view('carlo_web.view_survey_form', [
                'viewS' => $viewS,
                'sToken' => $sToken
            ]);
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function updateSurveys($request)
    {
        try {
            $updateSurveys = Surveys::saveUpdatedSurveys($request);
            return $updateSurveys;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function deleteSurveys($request)
    {
        try {
            $deleteSurveys = Surveys::saveDeletedSurveys($request);
            return $deleteSurveys;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function surveysDataTable($request)
    {
        try {
            $querySurveys = DB::table('surveys')
                                ->select(
                                    'id',
                                    'survey_id_no',
                                    'date_created',
                                    'description',
                                    'intention',
                                    'survey_status',
                                    'created_by',
                                    'created_at')->get();
            $surveys = datatables()->of($querySurveys);
            return $surveys
            ->addColumn('action', function ($data) {
                if (Auth::user()->user_account_type == 'Administrator'){
                    $action = '<a target="_blank" href="/view-surveys-form/'. $data->survey_id_no.'" style="text-decoration:none;">
                    <button class="btn btn-primary btn-xs" type="button"
                    data-s-id="'. $data->id .'"
                    data-s-id-no"'. $data->survey_id_no .'"
                    data-s-description"'. $data->description .'"
                    data-s-date-created="'. $data->date_created .'"
                    data-s-survey-status="'. $data->survey_status .'"
                    data-a-created-by="'. $data->created_by .'"
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
