<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Questions extends Model
{
    protected $table = "questions";
	protected $guarded = ['id'];

    public static function saveQuestions($request)
    {
        
        if ($request->qTokenVal == NULL){
            return response()->json('notAuth');
        } else {

        $createQuestions = self::create([
            'question_id_no' => mt_rand(100000, 999999),
            'date_created' => $request->qDateCreated,
            'entity_name' => $request->qEntityName,
            'question' => $request->qQuestion,
            'question_status' => $request->qStatus,
            'created_by' => Auth::user()->full_name
        ]);   
            return $createQuestions;
        }
    }

    public static function saveEditedQuestions($request)
    {
        $editedQuestions = Questions::where('question_id_no', $request->qIdNo)->first();
        if (!empty($editedQuestions)){
            $editedQuestions->question_status = $request->qStatus;
            $editedQuestions->save();
            return $editedQuestions;
        }  
    }

    public static function deleteQuestions($request)
    {
        $deletedQuestions = Questions::find($request->qId)->delete();
            return $deletedQuestions;
    }
}

