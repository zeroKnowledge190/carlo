<?php

namespace App\Classes\Services\CarloServices;
use Illuminate\Http\Request;
use App\Classes\Constants\Constants;
use Carbon\Carbon;
use Datatables;
use App\User;
use App\Models\Entities;
use DB;
use Auth;
use Exception;
use Image;
use Session;
use Validator;

class ManageEntitiesService
{
    public function indexView()
    {
        try {
            $hicUsers = User::all();
            return view('reddrop_back.list_of_entities', [
                'hicUsers' => $hicUsers
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function addEntityForm($request)
    {
        try {
            $hicUsers = User::all();
            return view('reddrop_back.add_entity', [
                'hicUsers' => $hicUsers,
                'userFirstName' => Auth::user()->user_firstname,
                'userLastName' => Auth::user()->user_lastname
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function saveEntity($request)
    { 
	    
		DB::beginTransaction();
        try {
        $validation = Validator::make($request->all(), [
            'entity_name' => 'required',
            'entity_email' => 'required',
        ]);

        $entities = new Entities;
        $entities->ent_id_no = mt_rand(100000, 999999);
        $entities->entity_name = $request->entity_name;
        $entities->entity_email = $request->entity_email;
        $entities->created_by = Auth::user()->full_name;
       
        if ($validation->passes()){
            $entities->save();
            DB::commit();
            return redirect()->back()->with('message', 'Entity was successfully added');
        } else {
            return response()->json(['errorStatus' => 1]);
        }

        } catch (Exception $e){
            return $e->getMessage();
        }
	}

	public function editEntityForm($request, $entIdNo)
    {
        try {
            $hicUsers = User::all();
            $editEntities = DB::table('entities')->where('ent_id_no', $entIdNo)->first();
            return view('reddrop_back.edit_entity', [
                'userFirstName' => Auth::user()->user_firstname,
                'userLastName' => Auth::user()->user_lastname,
                'editEntity' => $editEntities
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
	
	public function saveEditEntity($request, $entIdNo)
    {
        DB::beginTransaction();
        try {
        $validation = Validator::make($request->all(), [
            'entity_name' => 'required',
            'entity_email' => 'required'
        ]);

        $editEntities = Entities::where('ent_id_no', $entIdNo)->first();
        if (!empty($editEntities)) {
        $editEntities->entity_name = $request->entity_name;
        $editEntities->entity_email = $request->entity_email;
        $editEntities->created_by = Auth::user()->full_name;

        if ($validation->passes()){
            $editEntities->save();
            DB::commit();
            return redirect('/list-of-entities')->with('message', 'Entity was updated');

        } else {
            return response()->json(['errorStatus' => 1]);
                }
            }
        } catch (Exception $e){
            return $e->getMessage();
        }
    }

    public function deleteEntityForm($request, $entIdNo)
    {
        try {
            $hicUsers = User::all();
            $deleteEntities = DB::table('entities')->where('ent_id_no', $entIdNo)->first();
            return view('reddrop_back.delete_entity', [
                'userFirstName' => Auth::user()->user_firstname,
                'userLastName' => Auth::user()->user_lastname,
                'deleteEntity' => $deleteEntities
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    
    public function saveDeleteEntity($request, $entIdNo)
	{
	    $deleteAds = DB::table('entities')->where('ent_id_no', $entIdNo)->delete();
	    return redirect('/list-of-entities')->with('message', 'Entity was deleted');
	}

    public function entitiesDataTable($request)
    {
        try {
            $entities = DB::table('entities')
                ->select('id', 
                          'ent_id_no', 
                          'entity_name', 
                          'entity_email', 
                          'created_by')->get();
            $queryEntities = datatables()->of($entities);
            return $queryEntities
                ->addColumn('action', function ($data) {
                    $action = '<a href="/edit-entity/'.$data->ent_id_no.'"><button class="btn btn-primary btn-xs" type="button">
                            <i class="fa fa-edit"></i> Edit
                            </button></a>
                            <a href="/delete-entity/'.$data->ent_id_no.'"><button class="btn btn-danger btn-xs" type="button">
                        <i class="fa fa-trash"></i> Delete
                    </button></a>';
                return $action;
        })->make();
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

}
