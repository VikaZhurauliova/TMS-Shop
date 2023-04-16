<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderCreateController extends Controller
{

    public function order()
    {
        return view('orderCreate',[
            'user' => Auth::user(),
        ]);
    }

    public function orderCreate(Request $request)
    {
        $cart = session()->get('order.create',[]);

        $productsItems = [];

        foreach ($cart as $key => $item) {
            $productsItems[$key]['quantity'] = $item['quantity'];
        }

        $order = Order::query()->create(
            [
                'user_id' => Auth::user()?->id,
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'address' => $request->input('address'),
            ]
        );

        $order->products()->sync($productsItems);
        session()->flash('success', 'Order has been successfully created.');
        return redirect()->route('order.completed');
    }

    public function orderCompleted()
    {
        return view('orderCompleted');
    }
}
