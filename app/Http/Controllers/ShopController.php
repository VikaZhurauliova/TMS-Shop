<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Delivery;
use App\Models\Product;

class ShopController
{
    public function shop()
    {
        $category = Category::where('is_active', 1)->get();

        $deliveries = Delivery::all();

        $products = Product::query()->where('category_id', 6)->get();
        $latestProducts = Product::query()->where('is_active', 1)->orderBy('created_at', 'DESC')->take(3)->get();
        return view('shop', [
            'products' => $products,
            'category' => $category,
            'deliveries' => $deliveries,
            'latestProducts' => $latestProducts
        ]);
    }


}
