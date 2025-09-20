<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\GetListController::class, 'getListHome'])->name('home');

// Product detail routes
Route::get('/san-pham/{slug}', [App\Http\Controllers\ProductDetailController::class, 'show'])->name('product.detail');

// Cart routes
Route::post('/cart/add', [App\Http\Controllers\ProductDetailController::class, 'addToCart'])->name('cart.add');

// Category routes
Route::get('/danh-muc', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
Route::get('/danh-muc/{slug}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');

Route::get('/test', function () {
    return view('components.product-card');
});

Route::get('/ve-chung-toi', function () {
    return view('about');
});

Route::get('/blog-dong-ho-360', function () {
    return view('blog');
});