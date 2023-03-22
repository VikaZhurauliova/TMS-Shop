<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contacts;
use App\Models\FormContact;
use Illuminate\Http\Request;

class ContactsController
{
    public function contacts()
    {
        $categories = Category::all();
        $forms = FormContact::all();
        $contacts = Contacts::all();
        return view('contacts', [
            'categories' => $categories,
            'contacts' => $contacts,
            'forms' => $forms
        ]);
    }
    public function sendContacts (Request $request)
    {

        $name = $request->input('name');
        $subject = $request->input('subject');
        $email = $request->input('email');
        $message = $request->input('message');

        $feedback =FormContact::create([
            'name' => $name,
            'subject' => $subject,
            'email' => $email,
            'message' => $message

        ]);


        return redirect()->route('contacts');
    }
}
