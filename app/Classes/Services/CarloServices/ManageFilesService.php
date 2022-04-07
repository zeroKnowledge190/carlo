<?php

namespace App\Classes\Services\CarloServices;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use App\Models\Navbars;
use App\Models\CarloFiles;
use DB;
use Auth;
use Exception;
use Image;
use Session;
use Validator;

class ManageFilesService
{
    public function indexView()
    {
        try {
            $hicUsers = User::all();
            return view('reddrop_back.list_of_files', [
                'hicUsers' => $hicUsers
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function deleteAdsForm($request, $fileIdNo)
    {
        try {
            $hicUsers = User::all();
            $deleteAds = DB::table('carlo_files')->where('file_id_no', $fileIdNo)->first();
            return view('reddrop_back.delete_files_form', [
                'userFirstName' => Auth::user()->user_firstname,
                'userLastName' => Auth::user()->user_lastname,
                'deleteAds' => $deleteAds
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function saveDeleteAds(Request $request, $adsIdNo)
	{
	    $deleteAds = DB::table('news_ads')->where('ads_id_no', $adsIdNo)->delete();
	    return redirect('/list-of-ads')->with('message', 'Ads was deleted');
	}
    
	public function editFilesForm($request, $fileIdNo)
    {
        try {
            $hicUsers = User::all();
            $editFiles = DB::table('carlo_files')->where('file_id_no', $fileIdNo)->first();
            return view('reddrop_back.edit_files_form', [
                'userFirstName' => Auth::user()->user_firstname,
                'userLastName' => Auth::user()->user_lastname,
                'editFiles' => $editFiles
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
	
	public function saveEditFiles($request, $fileIdNo)
    {
        DB::beginTransaction();
        try {
        $validation = Validator::make($request->all(), [
            'hic_documents' => 'image|mimes:jpeg,png,jpg,mp4|max:18048'
        ]);

        $pFiles = CarloFiles::where('file_id_no', $fileIdNo)->first();
        if (!empty($pFiles)) {
        $pFiles->file_id_no = $request->file_id_no;
        $pFiles->file_status = $request->file_status;
       
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
            return redirect('/list-of-files')->with('message', 'Files was updated');

        } else {
            return response()->json(['errorStatus' => 1]);
                }
            }
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function filesDataTable($request)
    {
        try {
            $pabloFiles = DB::table('carlo_files')
                ->select('id', 
                          'file_id_no', 
                          'file_name', 
                          'file_status', 
                          'hic_documents',
                          'created_by')->get();
            $queryFiles = datatables()->of($pabloFiles);
            return $queryFiles
                ->addColumn('action', function ($data) {
                    $action = '
                    <a href="/edit-files-form/'.$data->file_id_no.'"><button class="btn btn-primary btn-xs" type="button">
                        <i class="fa fa-edit"></i> Edit
                    </button></a>';
                return $action;
        })->make();
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

}
