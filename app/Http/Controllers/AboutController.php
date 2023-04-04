<?php

namespace App\Http\Controllers;


use App\Models\Category;

class AboutController extends Controller
{
    public function about()
    {
        return view('about', [
        ]);
    }
}
