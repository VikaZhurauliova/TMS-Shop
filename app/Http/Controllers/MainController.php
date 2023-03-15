<?php

namespace App\Http\Controllers;

use App\Models\Banner;

class MainController
{
    public function main()
    {
        $banners = Banner::where('is_active', 1)->get();

        return view('main', [
            'banners' => $banners
        ]);
    }
}
