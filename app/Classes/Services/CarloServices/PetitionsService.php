<?php

namespace App\Classes\Services\CarloServices;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use App\Models\Petitions;
use App\Models\CarloFiles;
use DB;
use Image;
use Validator;
use Session;
use Auth;
use Exception;

class PetitionsService
{
    public function indexView()
    {
        try {
            return view('carlo_web.manage_petitions');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function petitionsForm()
    {
        try {
            $token = '';
            if (Auth::user()){
            $token = csrf_token();
            }
            return view('carlo_web.petitions', [
                'token' => $token
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function savePetitions($request)
    {
        try {
            $createPetitions = Petitions::savePetitions($request);
            return $createPetitions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function saveUploadPetitionFiles($request) 
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

    public function viewPetitionsForm($request)
    {
        try {
            $pToken = csrf_token();
            $viewP = DB::table('petitions')->where('petition_id_no', $request->id)->first();
            return view('carlo_web.view_petitions_form', [
                'viewP' => $viewP,
                'pToken' => $pToken
            ]);
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function updatePetitions($request)
    {
        try {
            $updatePetitions = Petitions::saveUpdatedPetitions($request);
            return $updatePetitions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function deletePetitions($request)
    {
        try {
            $deletePetitions = Petitions::saveDeletedPetitions($request);
            return $deletePetitions;
        } catch (Exception $e){
            return $e->getMessage(); 
        }
    }

    public function petitionsDataTable($request)
    {
        try {
            $queryPetitions = DB::table('petitions')
                                ->select(
                                    'id',
                                    'petition_id_no',
                                    'date_created',
                                    'entity_name',
                                    'subject',
                                    'solution',
                                    'petition_status',
                                    'created_by',
                                    'created_at')->get();
            $petitions = datatables()->of($queryPetitions);
            return $petitions
            ->addColumn('action', function ($data) {
                if (Auth::user()->user_account_type == 'Administrator'){
                    $action = '<a target="_blank" href="/view-petitions-form/'. $data->petition_id_no.'" style="text-decoration:none;">
                    <button class="btn btn-primary btn-xs" type="button"
                    data-p-id="'. $data->id .'"
                    data-p-id-no"'. $data->petition_id_no .'"
                    data-p-entity-name="'. $data->entity_name .'"
                    data-p-petition-status="'. $data->petition_status .'"
                    data-p-subject="'. $data->subject .'"
                    data-p-created-by="'. $data->created_by .'"
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
