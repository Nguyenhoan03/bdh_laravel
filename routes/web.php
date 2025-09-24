<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\GetListController::class, 'getListHome'])->name('home');

// Page routes
Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'show'])->name('page.show');

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

// Blog routes
Route::get('/blog-dong-ho-360', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

// Policy pages
Route::get('/dieu-khoan-thanh-toan', function () {
    return view('policies.payment-terms');
})->name('policy.payment');

Route::get('/chinh-sach-bao-hanh', function () {
    return view('policies.warranty-policy');
})->name('policy.warranty');

Route::get('/chinh-sach-doi-tra', function () {
    return view('policies.return-policy');
})->name('policy.return');

Route::get('/chinh-sach-van-chuyen', function () {
    return view('policies.shipping-policy');
})->name('policy.shipping');

Route::get('/chinh-sach-bao-mat', function () {
    return view('policies.privacy-policy');
})->name('policy.privacy');

// About and Contact pages
Route::get('/ve-chung-toi', function () {
    return view('about');
})->name('about');

Route::get('/lien-he', function () {
    return view('contact');
})->name('contact');