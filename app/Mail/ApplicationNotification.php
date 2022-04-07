<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class ApplicationNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The data.
     *
     * @var array
     */
    public $filename;
    public $date_created;
    public $firstname;
    public $lastname;
    public $email;
    public $sender_email;
    public $subject;
    public $dear;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    
    public function __construct($filename, $date_created, $firstname, $lastname, $email, $sender_email, $subject, $dear)
    {
        $this->filename = $filename;
        $this->date_created = $date_created;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->sender_email = $sender_email;
        $this->subject = $subject;
        $this->dear = $dear;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    
    public function build(Request $request)
    {
        return $this->view('application_notification')
            ->subject('Application')
            ->attach($this->filename);
    }
}