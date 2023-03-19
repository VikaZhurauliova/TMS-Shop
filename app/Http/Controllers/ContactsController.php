<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contacts;
use App\Models\FormContact;

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
}
