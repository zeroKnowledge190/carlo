<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Surveys extends Model
{
    protected $table = "surveys";
	protected $guarded = ['id'];
    
    public static function saveSurveys($request)
    {
        if ($request->sTokenVal == NULL){
            return response()->json('notAuth');
        } else {
        $createSurveys = self::create([
            'survey_id_no' => mt_rand(100000, 999999),
            'date_created' => $request->sDateCreated,
            'description' => $request->sDescription,
            'intention' => $request->sIntention,
            'question1' => $request->sQuestionFirst,
            'question2' => $request->sQuestionSecond,
            'question3' => $request->sQuestionThird,
            'question4' => $request->sQuestionFourth,
            'question5' => $request->sQuestionFifth,
            'survey_status' => $request->sStatus,
            'created_by' => Auth::user()->full_name
        ]);
            return $createSurveys;
        }
    }

    public static function saveEditedSurveys($request)
    {
        $editedSurveys = Surveys::where('survey_id_no', $request->sIdNo)->first();
        if (!empty($editedSurveys)){
            $editedSurveys->survey_status = $request->sStatus;
            $editedSurveys->save();
            return $editedSurveys;
        }  
    }

    public static function deleteSurveys($request)
    {
        $deletedSurveys = Surveys::find($request->sId)->delete();
            return $deletedSurveys;
    }
}

