<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class RequisitionNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The data.
     *
     * @var array
     */
    public $filename;
    public $date_created;
    public $fullname;
    public $job_title;
    public $company;
    public $email;
    public $sender_email;
    public $requisition_body;
    public $location;
    public $request_type;
    public $others;
    public $priority;
    public $due_date;
    public $definition;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($filename, 
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
                                $definition)
    {
        $this->filename = $filename;
        $this->date_created = $date_created;
        $this->fullname = $fullname;
        $this->job_title = $job_title;
        $this->company = $company;
        $this->email = $email;
        $this->sender_email = $sender_email;
        $this->requisition_body = $requisition_body;
        $this->location = $location;
        $this->request_type = $request_type;
        $this->others = $others;
        $this->priority = $priority;
        $this->due_date = $due_date;
        $this->definition = $definition;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('requisition_notification')
            ->subject('Requisition')
            ->attach($this->filename);
    }
}