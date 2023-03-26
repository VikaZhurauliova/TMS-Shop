<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;

class MainController extends Controller
{
    public function main()
    {
        $categories = Category::all();
        $banners = Banner::where('is_active', 1)->get();
        return view('main', [
            'banners' => $banners,
            'categories' => $categories
        ]);
    }
}
