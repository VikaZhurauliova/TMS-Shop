<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Delivery;
use App\Models\Product;
use App\Models\Tag;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function product(Product $product)
    {
        $deliveries = Delivery::all();
        return view('product', [
            'product' => $product,
            'deliveries' => $deliveries,
        ]);
    }

    public function products(Request $request, ProductService $productService)
    {
        $products = $productService->getProducts($request->all());

        $categories = DB::table('categories')
            ->selectRaw('categories.id, count(categories.id) as count, categories.name as name')
            ->leftJoin('products', 'categories.id', '=', 'products.category_id')
            ->groupBy('categories.id')
            ->get();

        $latestProducts = Product::query()->where('is_active', 1)->orderBy('created_at', 'DESC')->take(3)->get();

        $tags = Tag::query()->where('is_active', 1)->orderBy('created_at', 'DESC')->take(6)->get();
        $deliveries = Delivery::all();

        return view('products', [
            'products' => $products,
            'categories' => $categories,
            'latestProducts' => $latestProducts,
            'deliveries' => $deliveries,
            'tags' => $tags,
        ]);
    }

    public function category(Category $category)
    {
        $products = $category->orderBy('created_at')->paginate(12);

        return view('category', [
            'category' => $category,
            'products' => $products
        ]);
    }

}

