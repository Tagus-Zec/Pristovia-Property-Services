<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quote;

    public function __construct($quote)
    {
        $this->quote = $quote;
    }

    public function build()
    {
        return $this->subject('New Quote Request | Pristovia Property')
                    ->view('emails.quote');
    }
}