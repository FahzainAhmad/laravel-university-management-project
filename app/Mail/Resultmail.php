<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Resultmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The subject of the email.
     *
     * @var string
     */
    public $message;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @param  string  $subject
     *  @param  string  $message
     * @return void
     */
    public function __construct($subject, $message)
    {
        $this->message = $message;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
                    ->with(['message' => $this->message])
                    ->text('resultmailview'); // set the view name here
    }
}
