<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactAdminController extends Controller
{
    public function index()
    {
        return view('admin.contacts.index', [
            'contacts' => Contact::latest()->get()
        ]);
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update(['is_read' => true]);

        return view('admin.contacts.show', compact('contact'));
    }
}