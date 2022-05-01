<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Testmarkdown extends Mailable
{
    use Queueable, SerializesModels;

    public $url = 'http://www.facebook.com';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('test@test.com')
        ->markdown('emails.markdown-test');


        // or instead of from go to .env -> MAIL_FROM_ADDRESS
    }
}

