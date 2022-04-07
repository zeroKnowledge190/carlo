<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Requisitions extends Model
{
    protected $table = "requisitions";
	protected $guarded = ['id'];
    
    public static function saveRequisitions($request)
    {
        if ($request->rTokenVal == NULL){
            return response()->json('notAuth');
        } else {

        $createRequisitions = self::create([
            'req_id_no' => mt_rand(100000, 999999),
            'date_created' => $request->rDateCreated,
            'entity_name' => $request->rEntityName,
            'full_name' => $request->rFullName,
            'job_title' => $request->rJobTitle,
            'company_name' => $request->rCompanyName,
            'email_address' => $request->rEmailAddress,
            'body_summary' => $request->rReqBody,
            'location' => $request->rLocation,
            'request_type' => $request->rRequestType,
            'others' => $request->rOthers,
            'priority' => $request->rPriorityVal,
            'due_date' => $request->rDueDate,
            'definition' => $request->rDefinition,
            'req_status' => $request->rStatus,
            'created_by' => Auth::user()->full_name
        ]);
            return $createRequisitions;
        }
    }

    public static function saveEditedRequisitions($request)
    {
        $editedReqs = Requisitions::where('req_id_no', $request->rIdNo)->first();
        if (!empty($editedReqs)){
            $editedReqs->req_status = $request->rStatus;
            $editedReqs->save();
            return $editedReqs;
        }  
    }

    public static function deleteRequisitions($request)
    {
        $deletedReqs = Requisitions::find($request->rId)->delete();
            return $deletedReqs;
    }
}

