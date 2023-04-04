<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
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

Route::get('/account', [AccountController::class, 'account'])->name('account.show');
Route::post('/account', [AccountController::class, 'updateAccount'])->name('account.update');

Route::get('/contacts', [ContactsController::class, 'contacts'])->name('contacts');
Route::post('/contacts', [ContactsController::class, 'sendContacts'])->name('send.contacts');

Route::group(['prefix' => '/wishlist', 'controller' => WishlistController::class, 'middleware' => 'auth'], function () {
    Route::get('/', 'get')->name('wishlist.get');
    Route::post('/{product}/delete', 'delete')->name('wishlist.delete');
    Route::post('/{product}/add', 'add')->name('wishlist.add');
});

Route::group(['prefix' => '/admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', [\App\Http\Controllers\Admin\MainController::class, 'main'])->name('main');

    Route::group(['prefix' => '/reviews', 'as' => 'reviews.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('index');
        Route::get('/delete/{review}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/deliveries', 'as' => 'deliveries.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\DeliveryController::class, 'index'])->name('index');

        Route::get('/create', [\App\Http\Controllers\Admin\DeliveryController::class, 'create'])->name('create.view');
        Route::post('/create', [\App\Http\Controllers\Admin\DeliveryController::class, 'store'])->name('create');

        Route::get('/update/{delivery}', [\App\Http\Controllers\Admin\DeliveryController::class, 'edit'])->name('update.view');
        Route::post('/update/{delivery}', [\App\Http\Controllers\Admin\DeliveryController::class, 'update'])->name('update');

        Route::get('/delete/{delivery}', [\App\Http\Controllers\Admin\DeliveryController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/products', 'as' => 'products.'], function () {
        Route::get('/export-csv', [\App\Http\Controllers\Admin\ProductController::class, 'exportCsv'])->name('export.csv');
        Route::get('/export-excel', [\App\Http\Controllers\Admin\ProductController::class, 'exportExcel'])->name('export.excel');

        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('index');

        Route::get('/export-excel', [\App\Http\Controllers\Admin\ProductController::class, 'exportExcel'])->name('export.excel');

        Route::get('/create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('create.view');
        Route::post('/create', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('create');

        Route::get('/update/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('update.view');
        Route::post('/update/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('update');

        Route::get('/delete/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('delete');

//        Route::get('/download-csv', [\App\Http\Controllers\Admin\ProductController::class, 'downloadCsv'])->name('download.csv');
    });

    Route::group(['prefix' => '/banners', 'as' => 'banners.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\BannerController::class, 'index'])->name('index');

        Route::get('/create', [\App\Http\Controllers\Admin\BannerController::class, 'create'])->name('create.view');
        Route::post('/create', [\App\Http\Controllers\Admin\BannerController::class, 'store'])->name('create');

        Route::get('/update/{banner}', [\App\Http\Controllers\Admin\BannerController::class, 'edit'])->name('update.view');
        Route::post('/update/{banner}', [\App\Http\Controllers\Admin\BannerController::class, 'update'])->name('update');

        Route::get('/delete/{banner}', [\App\Http\Controllers\Admin\BannerController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/feedback', 'as' => 'feedback.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\FormContactController::class, 'index'])->name('index');
        Route::get('/delete/{feedback}', [\App\Http\Controllers\Admin\FormContactController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/tags', 'as' => 'tags.'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\TagController::class, 'index'])->name('index');

        Route::get('/create', [\App\Http\Controllers\Admin\TagController::class, 'create'])->name('create.view');
        Route::post('/create', [\App\Http\Controllers\Admin\TagController::class, 'store'])->name('create');

        Route::get('/update/{tag}', [\App\Http\Controllers\Admin\TagController::class, 'edit'])->name('update.view');
        Route::post('/update/{tag}', [\App\Http\Controllers\Admin\TagController::class, 'update'])->name('update');

        Route::get('/delete/{tag}', [\App\Http\Controllers\Admin\TagController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => '/users', 'as' => 'users.'], function () {
        Route::get('/export-csv', [\App\Http\Controllers\Admin\UserController::class, 'exportCsv'])->name('export.csv');
        Route::get('/export-excel', [\App\Http\Controllers\Admin\UserController::class, 'exportExcel'])->name('export.excel');

        Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('index');

        Route::get('/delete/{user}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('delete');
    });

});

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/about', [AboutController::class, 'about'])->name('about');



