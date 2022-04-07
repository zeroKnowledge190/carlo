<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Petitions extends Model
{
    protected $table = "petitions";
	protected $guarded = ['id'];
    
    public static function savePetitions($request)
    {
        if ($request->pTokenVal == NULL){
            return response()->json('notAuth');
        } else {

        $createPetitions = self::create([
            'petition_id_no' => mt_rand(100000, 999999),
            'date_created' => $request->pDateCreated,
            'entity_name' => $request->pEntityName,
            'subject' => $request->pSubject,
            'intention' => $request->pIntention,
            'solution' => $request->pSolution,
            'petition_status' => $request->pStatus,
            'created_by' => Auth::user()->full_name
        ]);
        return $createPetitions;
        }
    }

    public static function saveEditedPetitions($request)
    {
        $editedPetitions = Petitions::where('petition_id_no', $request->pIdNo)->first();
        if (!empty($editedPetitions)){
            $editedPetitions->petition_status = $request->pStatus;
            $editedPetitions->save();
            return $editedPetitions;
        }  
    }

    public static function deletePetitions($request)
    {
        $deletedPetitions = Petitions::find($request->pId)->delete();
            return $deletedPetitions;
    }
}

