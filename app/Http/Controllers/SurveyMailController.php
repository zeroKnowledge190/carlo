<?php

namespace App\Http\Controllers;

use File;
use Mail;
use App\Mail\SurveyNotification;
use Illuminate\Http\Request;
use Validator;
use DB;

class SurveyMailController extends Controller
{
    /**
     * email send view.
     *
     * @return $this
     */
    public function surveyMailView(Request $request)
    {
        $entities = DB::table('entities')->get();
        return view('surveyMailView', [
            'entities' => $entities
        ]);
    }

    /**
     * save file and send mail.
     *
     * @return $this
     */
    public function surveyMailSend(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'email' => 'required',
            'attachment' => 'required',
            'date_created' => 'required'
        ]);

        $path = public_path('uploads');
        $attachment = $request->file('attachment');
        $name = time().'.'.$attachment->getClientOriginalExtension();

        // create folder
        if(!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }

        $attachment->move($path, $name);
        $filename = $path.'/'.$name;

        $date_created = $request->date_created;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $sender_email = $request->sender_email;
        $email = $request->email;
        $description = $request->description;
        $purpose = $request->purpose;
        $question1 = $request->question1;
        $question2 = $request->question2;
        $question3 = $request->question3;
        $question4 = $request->question4;
        $question5 = $request->question5;
        
        try {
            Mail::to($request['email'])->bcc(['beatlemark45@gmail.com'])->send(new SurveyNotification(
                    $filename, 
                    $date_created, 
                    $firstname,
                    $lastname,
                    $sender_email,
                    $email,
                    $description,
                    $purpose,
                    $question1,
                    $question2,
                    $question3,
                    $question4,
                    $question5
                    )
                );
        } catch (\Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }
        
        return redirect()->back()->with('success', 'Mail sent successfully.');
    }
}
