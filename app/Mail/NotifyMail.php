<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyMail extends Mailable
{
    use Queueable, SerializesModels;
    public $subject='Petición de su libro';

    public $titulo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($titulo)
    {
        $this->titulo=$titulo; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $titulo= $this->titulo;
        return $this->view('emails.miMail', compact('titulo'));
    }
}
