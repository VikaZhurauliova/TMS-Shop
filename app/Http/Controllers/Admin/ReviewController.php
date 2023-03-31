<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductReview;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = ProductReview::query()->orderByDesc('created_at')->paginate(10);
        return view('admin.reviews.index', [
            'reviews' => $reviews,
        ]);
    }

    public function destroy(ProductReview $review)
    {
        $review->delete();
        session()->flash('success', 'Review has been successfully deleted.');
        return back();
    }
}
