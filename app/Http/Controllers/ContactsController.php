<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contacts;
use App\Models\FormContact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contacts()
    {
        $forms = FormContact::all();
        $contacts = Contacts::all();
        return view('contacts', [
            'contacts' => $contacts,
            'forms' => $forms
        ]);
    }

    public function sendContacts(Request $request)
    {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $file->storeAs('/contacts',$fileName);

        $name = $request->input('name');
        $subject = $request->input('subject');
        $email = $request->input('email');
        $message = $request->input('message');

        $feedback = FormContact::create([
            'name' => $name,
            'subject' => $subject,
            'email' => $email,
            'message' => $message

        ]);

        session()->flash('success', 'Information has been successfully sent.');
        return redirect()->route('contacts');
    }
}
