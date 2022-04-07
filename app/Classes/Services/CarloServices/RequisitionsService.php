<?php

namespace App\Classes\Services\CarloServices;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use App\Models\Requisitions;
use App\Models\CarloFiles;
use Image;
use Validator;
use Session;
use DB;
use Auth;
use Exception;

class RequisitionsService
{
    public function indexView()
    {
        try {
            return view('carlo_web.manage_requisitions');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function requisitionsForm()
    {
        try {
            $token = '';
            if (Auth::user()){
            $token = csrf_token();
            }
            return view('carlo_web.requisitions', [
                'token' => $token
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function saveRequisitions($request)
    {
        try {
            $createRequisitions = Requisitions::saveRequisitions($request);
            return $createRequisitions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function saveUploadRequisitionFiles($request) 
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

    public function viewRequisitionsForm($request)
    {
        try {
            $rToken = csrf_token();
            $viewR = DB::table('requisitions')->where('req_id_no', $request->id)->first();
            return view('carlo_web.view_reqs_form', [
                'viewR' => $viewR,
                'rToken' => $rToken
            ]);
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function updateRequisitions($request)
    {
        try {
            $updateRequisitions = Requisitions::saveUpdatedRequisitions($request);
            return $updateRequisitions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function deleteRequisitions($request)
    {
        try {
            $deleteRequisitions = Requisitions::saveDeletedRequisitions($request);
            return $deleteRequisitions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function requisitionsDataTable($request)
    {
        try {
            $queryReqs = DB::table('requisitions')
                                ->select(
                                    'id',
                                    'req_id_no',
                                    'date_created',
                                    'entity_name',
                                    'body_summary',
                                    'req_status',
                                    'created_by',
                                    'created_at')->get();
            $reqs = datatables()->of($queryReqs);
            return $reqs
            ->addColumn('action', function ($data) {
                if (Auth::user()->user_account_type == 'Administrator'){
                $action = '<a target="_blank" href="/view-requisitions-form/'. $data->req_id_no.'" style="text-decoration:none;">
                            <button class="btn btn-primary btn-xs" type="button"
                            data-r-id="'. $data->id .'"
                            data-r-id-no"'. $data->req_id_no .'"
                            data-r-entity-name="'. $data->entity_name .'"
                            data-r-body-summary="'. $data->body_summary .'"
                            data-r-rec-status="'. $data->req_status .'"
                            data-r-created-by="'. $data->created_by .'"
                            ">
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
