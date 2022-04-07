<?php

namespace App\Http\Controllers;

use File;
use Mail;
use App\Mail\Notification;
use Illuminate\Http\Request;
use Validator;

class MailController extends Controller
{
    /**
     * email send view.
     *
     * @return $this
     */
    public function mailView(Request $request)
    {
        return view('mailView', [
            'entity' => $request['entity']
        ]);
    }

    /**
     * save file and send mail.
     *
     * @return $this
     */
    public function mailSend(Request $request)
    {

        // $input = $request->validate([
        //     'email' => 'required',
        //     'attachment' => 'required',
        // ]);

        $validation = Validator::make($request->all(), [
            'email' => 'required',
            'attachment' => 'required',
            'entity' => 'required'
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
        $entity = $request['entity'];

        try {
            Mail::to($request['email'])->send(new Notification($filename, $entity));
        } catch (\Exception $e) {
            return redirect()->back()->with('success', $e->getMessage());
        }

        return redirect()->back()->with('success', 'Mail sent successfully.');
    }
}