<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\GetListController::class, 'getListHome'])->name('home');

// Product detail routes
Route::get('/san-pham/{slug}', [App\Http\Controllers\ProductDetailController::class, 'show'])->name('product.detail');

// Cart routes
Route::get('/gio-hang', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/cart/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
Route::get('/cart/api', [App\Http\Controllers\CartController::class, 'getCart'])->name('cart.api');

// Checkout routes
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout/process', [App\Http\Controllers\CheckoutController::class, 'process'])->name('checkout.process');
Route::get('/checkout/success', [App\Http\Controllers\CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/order/{orderNumber}', [App\Http\Controllers\CheckoutController::class, 'getOrder'])->name('order.show');

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