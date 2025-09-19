<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\GetListController::class, 'getListHome'])->name('home');


Route::get('/test', function () {
    return view('components.product-card');
});

Route::get('/ve-chung-toi', function () {
    return view('about');
});

Route::get('/blog-dong-ho-360', function () {
    return view('blog');
});