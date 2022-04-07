<?php

namespace App\Http\Controllers;

use File;
use Mail;
use App\Mail\ApplicationNotification;
use Illuminate\Http\Request;
use Validator;
use DB;

class ApplicationMailController extends Controller
{
    /**
     * email send view.
     *
     * @return $this
     */
    public function applicationMailView(Request $request)
    {
        $entities = DB::table('entities')->get();
        return view('applicationMailView', [
            'entities' => $entities
        ]);
    }

    /**
     * save file and send mail.
     *
     * @return $this
     */
    public function applicationMailSend(Request $request)
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
        $subject = $request->subject;
        $purpose = $request->purpose;
        $solution = $request->solution;

        try {
            Mail::to($request['email'])->send(new ApplicationNotification(
                    $filename, 
                    $date_created, 
                    $firstname,
                    $lastname,
                    $sender_email,
                    $email,
                    $subject,
                    $purpose,
                    $solution
                    )
                );
        } catch (\Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Mail sent successfully.');
    }
}