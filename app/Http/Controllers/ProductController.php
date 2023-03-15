<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Delivery;
use App\Models\Product;
use App\Models\Product_review;


class ProductController
{
public function product()
    {
        {
            $products = Product::query()->where('is_active', 1)->get();
            $category = Category::where('is_active', 1)->get();
            $deliveries = Delivery::all();
            $reviews = Product_review::where('product_id', 1)->get();

            return view('product', [

                'products' => $products,
                'category' => $category,
                'deliveries' => $deliveries,
                'reviews' => $reviews
            ]);
        }
    }
}
