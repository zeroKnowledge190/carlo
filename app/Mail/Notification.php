<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class Notification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The data.
     *
     * @var array
     */
    public $filename;
    public $entity;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($filename, $entity)
    {
        $this->filename = $filename;
        $this->entity = $entity;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('notification')
            ->subject('An email from CARLOPH')
            ->attach($this->filename);
    }
}