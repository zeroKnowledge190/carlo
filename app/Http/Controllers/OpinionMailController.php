<?php

namespace App\Http\Controllers;

use File;
use Mail;
use App\Mail\OpinionNotification;
use Illuminate\Http\Request;
use Validator;
use DB;

class OpinionMailController extends Controller
{
    /**
     * email send view.
     *
     * @return $this
     */
    public function opinionMailView(Request $request)
    {
        $entities = DB::table('entities')->get();
        return view('opinionMailView', [
            'entities' => $entities
        ]);
    }

    /**
     * save file and send mail.
     *
     * @return $this
     */
    public function opinionMailSend(Request $request)
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
        $email = $request->email;
        $sender_email = $request->sender_email;
        $opinion_body = $request->opinion_body;

        try {
            Mail::to($request['email'])->send(new OpinionNotification(
                    $filename, 
                    $date_created, 
                    $firstname,
                    $lastname,
                    $email,
                    $sender_email,
                    $opinion_body
                    )
                );
        } catch (\Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Mail sent successfully.');
    }
}