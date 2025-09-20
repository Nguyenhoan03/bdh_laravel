<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\GetListController::class, 'getListHome'])->name('home');

// Product detail route
Route::get('/product/{slug}', [App\Http\Controllers\GetListController::class, 'getProductDetail'])->name('product.detail');

Route::get('/test', function () {
    return view('components.product-card');
});

Route::get('/ve-chung-toi', function () {
    return view('about');
});

Route::get('/blog-dong-ho-360', function () {
    return view('blog');
});