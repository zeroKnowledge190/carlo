<?php

namespace App\Http\Controllers;

use File;
use Mail;
use App\Mail\RequisitionNotification;
use Illuminate\Http\Request;
use Validator;
use DB;

class RequisitionMailController extends Controller
{
    /**
     * email send view.
     *
     * @return $this
     */
    public function requisitionMailView(Request $request)
    {
        $entities = DB::table('entities')->get();
        return view('requisitionMailView', [
            'entities' => $entities
        ]);
    }

    /**
     * save file and send mail.
     *
     * @return $this
     */
    public function requisitionMailSend(Request $request)
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
        $fullname = $request->fullname;
        $job_title = $request->job_title;
        $company = $request->company;
        $email = $request->email;
        $sender_email = $request->sender_email;
        $requisition_body = $request->requisition_body;
        $location = $request->location;
        $request_type = $request->request_type;
        $others = $request->others;
        $priority = $request->priority;
        $due_date = $request->due_date;
        $definition = $request->definition;
        
        try {
            Mail::to($request['email'])->send(new RequisitionNotification(
                    $filename, 
                    $date_created, 
                    $fullname,
                    $job_title,
                    $company,
                    $email,
                    $sender_email,
                    $requisition_body,
                    $location,
                    $request_type,
                    $others,
                    $priority,
                    $due_date,
                    $definition
                    )
                );
        } catch (\Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Mail sent successfully.');
    }
}