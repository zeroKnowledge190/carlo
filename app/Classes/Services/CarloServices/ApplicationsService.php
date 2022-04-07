<?php

namespace App\Classes\Services\CarloServices;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use App\Models\Applications;
use App\Models\CarloFiles;
use Image;
use Session;
use Validator;
use DB;
use Auth;
use Exception;

class ApplicationsService
{
    public function indexView()
    {
        try {
            return view('carlo_web.manage_applications');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function applicationsForm()
    {
        try {
            $token = '';
            if (Auth::user()){
            $token = csrf_token();
            }
            return view('carlo_web.applications', [
                'token' => $token
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function saveApplications($request)
    {
        try {
            $createApplications = Applications::saveApplications($request);
            return $createApplications;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function saveUploadApplicationFiles($request) 
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

    public function viewApplicationsForm($request)
    {
        try {
            $aToken = csrf_token();
            $viewA = DB::table('applications')->where('app_id_no', $request->id)->first();
            return view('carlo_web.view_applications_form', [
                'viewA' => $viewA,
                'aToken' => $aToken
            ]);
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function updateApplications($request)
    {
        try {
            $updateApplications = Applications::saveUpdatedApplications($request);
            return $updateApplications;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function deleteApplications($request)
    {
        try {
            $deleteApplications = Applications::saveDeletedApplications($request);
            return $deleteApplications;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function applicationsDataTable($request)
    {
        try {
            $queryApplications = DB::table('applications')
                                ->select(
                                    'id',
                                    'app_id_no',
                                    'date_created',
                                    'entity_name',
                                    'subject',
                                    'dear',
                                    'application_status',
                                    'created_by',
                                    'created_at')->get();
            $applications = datatables()->of($queryApplications);
            return $applications
            ->addColumn('action', function ($data) {
                if (Auth::user()->user_account_type == 'Administrator'){
                    $action = '<a target="_blank" href="/view-applications-form/'. $data->app_id_no.'" style="text-decoration:none;">
                    <button class="btn btn-primary btn-xs" type="button"
                    data-a-id="'. $data->id .'"
                    data-a-id-no"'. $data->app_id_no .'"
                    data-a-entity-name="'. $data->entity_name .'"
                    data-a-petition-status="'. $data->application_status .'"
                    data-a-subject="'. $data->subject .'"
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
