<?php

namespace App\Http\Controllers;

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
        $fileSize = $file->getSize();
        $fileType =$file->getClientOriginalExtension();

        $name = $request->input('name');
        $subject = $request->input('subject');
        $email = $request->input('email');
        $message = $request->input('message');

        $feedback = FormContact::create([
            'name' => $name,
            'subject' => $subject,
            'email' => $email,
            'message' => $message,
            'file_name' => $fileName,
            'file_size' => $fileSize,
            'file_type' => $fileType

        ]);

        session()->flash('success', 'Information has been successfully sent.');
        return redirect()->route('contacts');
    }
}
