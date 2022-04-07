<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Opinions extends Model
{
    protected $table = "opinions";
	protected $guarded = ['id'];
    
    public static function saveOpinions($request)
    {
        if ($request->oTokenVal == NULL){
            return response()->json('notAuth');
        } else {

        $createOpinions = self::create([
            'opinion_id_no' => mt_rand(100000, 999999),
            'date_created' => $request->oDateCreated,
            'entity_name' => $request->oEntityName,
            'opinion_body' => $request->oOpinion,
            'opinion_status' => $request->oStatus,
            'created_by' => Auth::user()->full_name
        ]);
            return $createOpinions;
        }
    }

    public static function saveEditedOpinions($request)
    {
        $editedOpinions = Opinions::where('opinion_id_no', $request->oIdNo)->first();
        if (!empty($editedOpinions)){
            $editedOpinions->opinion_status = $request->oStatus;
            $editedOpinions->save();
            return $editedOpinions;
        }  
    }

    public static function deleteOpinions($request)
    {
        $deletedOpinions = Opinions::find($request->oId)->delete();
            return $deletedOpinions;
    }
}

