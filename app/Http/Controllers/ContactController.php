<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }
    public function save_contact(Request $req) {
        $validated = $req->validate([
            'subject' => 'required|max:255',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|digits:10',
            'message' => 'required',
        ]);
        $contact = new Contact();
        $contact->subject = $validated['subject'];
        $contact->name = $validated['name'];
        $contact->email = $validated['email'];
        $contact->phone = $validated['phone_number'];
        $contact->message = $validated['message'];
        $contact->save();

        return redirect()->back()->with('success', 'A request has been sent successfully. We will be in touch.');
    }
}
