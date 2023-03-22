<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Delivery;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;


class ProductController
{
    public function product(Product $product)
    {
        $categories = Category::all();
        $deliveries = Delivery::all();
        return view('product', [
            'product' => $product,
            'deliveries' =>$deliveries,
            'categories' => $categories
        ]);
    }

    public function products()
    {
        $products = Product::query()->where('is_active', 1)->get();

        $categories = DB::table('categories')
            ->selectRaw('categories.id, count(categories.id) as count, categories.name as name')
            ->leftJoin('products', 'categories.id', '=', 'products.category_id')
            ->groupBy('categories.id')
            ->get();

        $latestProducts = Product::query()->where('is_active', 1)->orderBy('created_at', 'DESC')->take(3)->get();



        $tags = Tag::all();
        $deliveries = Delivery::all();
        return view('products', [
            'products' => $products,
            'categories' => $categories,
            'latestProducts' => $latestProducts,
            'deliveries' => $deliveries,
            'tags' => $tags,
        ]);
    }

    public function category()
    {

     /*   $categoryProduct = Product::query()->where('category_id', $this->category())->get();*/
        $products = Product::query()->where('is_active', 1)->get();
        $categories = Category::all();

        return view('category', [
            'categories' => $categories,
            'products' => $products
/*            'categoryProduct' => $categoryProduct*/
        ]);
    }

}





/*
public function product()
    {
        {
            $products = Product::query()->where('is_active', 1)->get();
            $category = Category::where('is_active', 1)->get();
            $deliveries = Delivery::all();
            $reviews = ProductReview::where('product_id', 1)->get();

            return view('product', [

                'products' => $products,
                'category' => $category,
                'deliveries' => $deliveries,
                'reviews' => $reviews
            ]);
        }
    }
}
/*public function shop()
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
}*/
