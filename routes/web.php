<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/contacts', [ContactsController::class, 'contacts'])->name('contacts');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/product', [ProductController::class, 'product'])->name('product');
