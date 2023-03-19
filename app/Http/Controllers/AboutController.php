<?php

namespace App\Http\Controllers;


use App\Models\Category;

class AboutController
{
    public function about()
    {
        $categories = Category::all();
        return view('about', [
            'categories' => $categories
        ]);
    }
}
