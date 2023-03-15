<?php

namespace App\Http\Controllers;

use App\Models\Contacts;

class ContactsController
{
    public function contacts()
    {
        $contacts = Contacts::all();
        return view('contacts', [
            'contacts' => $contacts
        ]);
    }
}
