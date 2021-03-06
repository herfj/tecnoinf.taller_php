<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $hash;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($h)
    {
        $this->hash=$h;
    }

    /**
     * Build the message.
     *
             * @return $this
     */
    public function build()
    {
        $coso = $this->hash;
        return $this->subject('Bienvenido a EVA')->markdown('emails.welcome',compact('coso'));
    }
}
