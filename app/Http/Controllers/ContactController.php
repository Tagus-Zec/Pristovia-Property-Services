<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'message' => 'required'
        ]);

        $contact = Contact::create($data);

        Mail::to('ezechielnjondo5@gmail.com')->send(new ContactMail($contact));

        return back()->with('success', 'Message envoyé avec succès.');
    }
}