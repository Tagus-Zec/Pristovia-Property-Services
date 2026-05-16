<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Contact $contact) {}

    public function build()
    {
        return $this->subject('Nouveau message contact')
            ->view('emails.contact');
    }
}