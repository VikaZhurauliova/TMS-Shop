<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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

    public function changeLang(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);

        return redirect()->back();
    }
}
