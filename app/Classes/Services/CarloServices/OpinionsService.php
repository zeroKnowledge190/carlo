<?php

namespace App\Classes\Services\CarloServices;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use App\Models\Opinions;
use App\Models\CarloFiles;
use Image;
use Validator;
use Session;
use DB;
use Auth;
use Exception;

class OpinionsService
{
    public function indexView()
    {
        try {
            return view('carlo_web.manage_opinions');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function opinionsForm()
    {
        try {
            $token = '';
            if (Auth::user()){
            $token = csrf_token();
            }
            return view('carlo_web.opinions',[
                'token' => $token
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function saveOpinions($request)
    {
        try {
            $createOpinions = Opinions::saveOpinions($request);
            return $createOpinions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function saveUploadOpinionFiles($request) 
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

    public function updateOpinions($request)
    {
        try {
            $updateOpinions = Opinions::saveUpdatedOpinions($request);
            return $updateOpinions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function viewOpinionsForm($request)
    {
        try {
            $oToken = csrf_token();
            $viewO = DB::table('opinions')->where('opinion_id_no', $request->id)->first();
            return view('carlo_web.view_opinions_form', [
                'viewO' => $viewO,
                'oToken' => $oToken
            ]);
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function deleteOpinions($request)
    {
        try {
            $deleteOpinions = Opinions::saveDeletedOpinions($request);
            return $deleteOpinions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function opinionsDataTable($request)
    {
        try {
            $queryOpinions = DB::table('opinions')
                                ->select(
                                    'id',
                                    'opinion_id_no',
                                    'date_created',
                                    'entity_name',
                                    'opinion_body',
                                    'opinion_status',
                                    'created_by',
                                    'created_at')->get();
            $opinions = datatables()->of($queryOpinions);
            return $opinions
            ->addColumn('action', function ($data) {
                if (Auth::user()->user_account_type == 'Administrator'){
                $action = '<a target="_blank" href="/view-opinions-form/'. $data->opinion_id_no.'" style="text-decoration:none;">
                            <button class="btn btn-primary btn-xs" type="button"
                            data-o-id="'. $data->id .'"
                            data-o-id-no"'. $data->opinion_id_no .'"
                            data-o-entity-name="'. $data->entity_name .'"
                            data-o-opinion-status="'. $data->opinion_status .'"
                            data-o-opinion-body="'. $data->opinion_body .'"
                            data-o-created-by="'. $data->created_by .'"
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
