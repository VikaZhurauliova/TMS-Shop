<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CartController
{
    public function cart()
    {
        $categories = Category::all();
        return view('cart', [
            'categories' => $categories
        ]);
    }
}
