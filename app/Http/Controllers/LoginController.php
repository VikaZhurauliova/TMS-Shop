<?php

namespace App\Http\Controllers;

use App\Models\Category;

class LoginController
{
    public function login()
    {
        $categories = Category::all();
        return view('login', [
            'categories' => $categories
        ]);
    }
}
