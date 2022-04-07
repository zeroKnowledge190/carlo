<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class SurveyNotification extends Mailable
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
    public $description;
    public $purpose;
    public $question1;
    public $question2;
    public $question3;
    public $question4;
    public $question5;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($filename, 
                                $date_created, 
                                $firstname, 
                                $lastname, 
                                $email, 
                                $sender_email, 
                                $description, 
                                $purpose,
                                $question1,
                                $question2,
                                $question3,
                                $question4,
                                $question5)
    {
        $this->filename = $filename;
        $this->date_created = $date_created;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->sender_email = $sender_email;
        $this->description = $description;
        $this->purpose = $purpose;
        $this->question1 = $question1;
        $this->question2 = $question2;
        $this->question3 = $question3;
        $this->question4 = $question4;
        $this->question5 = $question5;        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('survey_notification')
            ->subject('Survey')
            ->attach($this->filename);
    }
}