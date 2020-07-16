<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $inputs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
      $this->inputs = $inputs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('emails.contact')->with([
        'name' => $this->inputs['name'],
        'email' => $this->inputs['email'],
        'bodyMessage' => $this->inputs['bodyMessage']
      ])->subject("Contato do site");
    }
}
