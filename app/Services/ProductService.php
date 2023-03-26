<?php

namespace App\Services;

use App\Models\Product;
class ProductService

{
    public function getProducts(array $params)
    {
        $products = Product::query();

        $products = match ($params['sort'] ?? null){
            'rating' =>'',
            'price-asc' =>$products->orderBy('price'),
            'price-desk'=>$products->orderByDesc('price'),
            default =>$products->orderByDesc('created_at')
        };

        if (isset($params['price-min'])) {
            $products->where('price', '>', $params['price-min']);
        }

        if (isset($params['price-max'])) {
            $products->where('price', '<', $params['price-max']);
        }

        return $products->where('is_active', 1)->paginate(12);
    }
}
