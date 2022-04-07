<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Applications extends Model
{
    protected $table = "applications";
	protected $guarded = ['id'];
    
    public static function saveApplications($request)
    {
        if ($request->aTokenVal == NULL){
            return response()->json('notAuth');
        } else {

        $createApplications = self::create([
            'app_id_no' => mt_rand(100000, 999999),
            'date_created' => $request->aDateCreated,
            'entity_name' => $request->aEntityName,
            'subject' => $request->aSubject,
            'dear' => $request->aDear,
            'application_status' => $request->aStatus,
            'created_by' => Auth::user()->full_name
        ]);
            return $createApplications;
        }
    }

    public static function saveEditedApplications($request)
    {
        $editedApplications = Applications::where('application_id_no', $request->aIdNo)->first();
        if (!empty($editedApplications)){
            $editedApplications->opinion_status = $request->oStatus;
            $editedApplications->save();
            return $editedApplications;
        }  
    }

    public static function deleteApplications($request)
    {
        $deletedApplications = Applications::find($request->oId)->delete();
            return $deletedApplications;
    }
}

