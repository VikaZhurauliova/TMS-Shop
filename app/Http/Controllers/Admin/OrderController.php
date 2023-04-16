<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Order;


class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::query()->orderByDesc('created_at')->paginate(10);

        return view('admin.orders.index', [
            'orders' => $orders,
        ]);
    }
}
