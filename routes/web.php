<?php

use App\Http\Controllers\AboutController;

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main'])->name('main');


Route::group(['prefix' => '/products', 'controller' => ProductController::class], function () {
    Route::get('/', 'products')->name('products.index');
    Route::get('/categories/{category}', 'category')->name('products.category');
    Route::get('/{product}', 'product')->name('products.show');
});

Route::group(['controller' => AuthController::class], function () {
    Route::get('/login', 'getLoginPage')->name('auth.loginPage');
    Route::post('/login', 'login')->name('auth.login');
    Route::get('/register', 'getRegisterPage')->name('auth.registerPage');
   Route::post('/register', 'register')->name('auth.register');
    Route::get('/logout', 'logout')->name('auth.logout');
});

/*Route::group(['prefix' => '/account', 'controller' => AccountController::class, 'middleware' => 'auth'], function () {
    Route::get('/', 'account')->name('account.show');
    Route::post('/', 'updateAccount')->name('account.update');
});*/

Route::get('/account', [AccountController::class, 'account'])->name('account');
Route::post('/account', [AccountController::class, 'updateAccount'])->name('account.update');

Route::get('/contacts', [ContactsController::class, 'contacts'])->name('contacts');
Route::post('/contacts', [ContactsController::class, 'sendContacts'])->name('send.contacts');


Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/about', [AboutController::class, 'about'])->name('about');



