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

Route::get('/test-warranty', function () {
    return 'Test warranty page works!';
});

// Blog routes
Route::get('/blog-dong-ho-360', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

// Test route để kiểm tra blog posts
Route::get('/test-blog', function() {
    $posts = \App\Models\BlogPost::where('is_published', true)->get();
    return response()->json([
        'count' => $posts->count(),
        'posts' => $posts->map(function($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'slug' => $post->slug,
                'is_published' => $post->is_published
            ];
        })
    ]);
});

// Test route đơn giản cho blog detail
Route::get('/test-blog-detail/{slug}', function($slug) {
    try {
        $post = \App\Models\BlogPost::where('slug', $slug)->where('is_published', true)->first();
        
        if (!$post) {
            return response()->json(['error' => 'Post not found'], 404);
        }
        
        return response()->json([
            'success' => true,
            'post' => [
                'id' => $post->id,
                'title' => $post->title,
                'slug' => $post->slug,
                'content' => $post->content,
                'author' => $post->author,
                'image_url' => $post->image_url
            ]
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
});

// Policy pages
Route::get('/dieu-khoan-thanh-toan', function () {
    $meta = [
        'title' => 'Điều khoản thanh toán - Daniel Wellington Vietnam',
        'description' => 'Tìm hiểu về các điều khoản thanh toán, phương thức thanh toán và quy định giao dịch tại Daniel Wellington Vietnam. Thanh toán an toàn, bảo mật.',
        'keywords' => 'điều khoản thanh toán, thanh toán online, thanh toán an toàn, daniel wellington vietnam, quy định giao dịch',
        'og_title' => 'Điều khoản thanh toán - Daniel Wellington Vietnam',
        'og_description' => 'Tìm hiểu về các điều khoản thanh toán, phương thức thanh toán và quy định giao dịch tại Daniel Wellington Vietnam.',
        'og_image' => asset('img/DW-LOGO.png'),
        'canonical_url' => url('/dieu-khoan-thanh-toan'),
        'no_index' => false,
        'no_follow' => false,
    ];
    return view('policies.payment-terms', compact('meta'));
})->name('policy.payment');

Route::get('/chinh-sach-bao-hanh', function () {
    $meta = [
        'title' => 'Chính sách bảo hành - Daniel Wellington Vietnam',
        'description' => 'Chính sách bảo hành đồng hồ Daniel Wellington tại Việt Nam. Bảo hành chính hãng, sửa chữa miễn phí, thay pin trọn đời.',
        'keywords' => 'chính sách bảo hành, bảo hành đồng hồ, daniel wellington bảo hành, sửa chữa đồng hồ, thay pin đồng hồ',
        'og_title' => 'Chính sách bảo hành - Daniel Wellington Vietnam',
        'og_description' => 'Chính sách bảo hành đồng hồ Daniel Wellington tại Việt Nam. Bảo hành chính hãng, sửa chữa miễn phí.',
        'og_image' => asset('img/DW-LOGO.png'),
        'canonical_url' => url('/chinh-sach-bao-hanh'),
        'no_index' => false,
        'no_follow' => false,
    ];
    return view('policies.warranty-policy', compact('meta'));
})->name('policy.warranty');

Route::get('/chinh-sach-doi-tra', function () {
    $meta = [
        'title' => 'Chính sách đổi trả - Daniel Wellington Vietnam',
        'description' => 'Chính sách đổi trả hàng tại Daniel Wellington Vietnam. Đổi trả trong 30 ngày, hoàn tiền 100%, điều kiện đổi trả rõ ràng.',
        'keywords' => 'chính sách đổi trả, đổi trả hàng, hoàn tiền, daniel wellington đổi trả, quy định đổi trả',
        'og_title' => 'Chính sách đổi trả - Daniel Wellington Vietnam',
        'og_description' => 'Chính sách đổi trả hàng tại Daniel Wellington Vietnam. Đổi trả trong 30 ngày, hoàn tiền 100%.',
        'og_image' => asset('img/DW-LOGO.png'),
        'canonical_url' => url('/chinh-sach-doi-tra'),
        'no_index' => false,
        'no_follow' => false,
    ];
    return view('policies.return-policy', compact('meta'));
})->name('policy.return');

Route::get('/chinh-sach-van-chuyen', function () {
    $meta = [
        'title' => 'Chính sách vận chuyển - Daniel Wellington Vietnam',
        'description' => 'Chính sách vận chuyển và giao hàng tại Daniel Wellington Vietnam. Miễn phí vận chuyển toàn quốc, giao hàng nhanh, đóng gói cẩn thận.',
        'keywords' => 'chính sách vận chuyển, giao hàng, miễn phí vận chuyển, daniel wellington giao hàng, vận chuyển toàn quốc',
        'og_title' => 'Chính sách vận chuyển - Daniel Wellington Vietnam',
        'og_description' => 'Chính sách vận chuyển và giao hàng tại Daniel Wellington Vietnam. Miễn phí vận chuyển toàn quốc.',
        'og_image' => asset('img/DW-LOGO.png'),
        'canonical_url' => url('/chinh-sach-van-chuyen'),
        'no_index' => false,
        'no_follow' => false,
    ];
    return view('policies.shipping-policy', compact('meta'));
})->name('policy.shipping');

Route::get('/chinh-sach-bao-mat', function () {
    $meta = [
        'title' => 'Chính sách bảo mật - Daniel Wellington Vietnam',
        'description' => 'Chính sách bảo mật thông tin khách hàng tại Daniel Wellington Vietnam. Bảo vệ dữ liệu cá nhân, thông tin thanh toán an toàn.',
        'keywords' => 'chính sách bảo mật, bảo vệ thông tin, daniel wellington bảo mật, quyền riêng tư, bảo mật dữ liệu',
        'og_title' => 'Chính sách bảo mật - Daniel Wellington Vietnam',
        'og_description' => 'Chính sách bảo mật thông tin khách hàng tại Daniel Wellington Vietnam. Bảo vệ dữ liệu cá nhân.',
        'og_image' => asset('img/DW-LOGO.png'),
        'canonical_url' => url('/chinh-sach-bao-mat'),
        'no_index' => false,
        'no_follow' => false,
    ];
    return view('policies.privacy-policy', compact('meta'));
})->name('policy.privacy');

// About and Contact pages
Route::get('/ve-chung-toi', function () {
    $meta = [
        'title' => 'Về chúng tôi - Daniel Wellington Vietnam',
        'description' => 'Tìm hiểu về Daniel Wellington Vietnam - đại lý chính thức đồng hồ Daniel Wellington tại Việt Nam. Lịch sử thương hiệu, cam kết chất lượng.',
        'keywords' => 'về daniel wellington, lịch sử thương hiệu, daniel wellington vietnam, đại lý chính thức, cam kết chất lượng',
        'og_title' => 'Về chúng tôi - Daniel Wellington Vietnam',
        'og_description' => 'Tìm hiểu về Daniel Wellington Vietnam - đại lý chính thức đồng hồ Daniel Wellington tại Việt Nam.',
        'og_image' => asset('img/DW-LOGO.png'),
        'canonical_url' => url('/ve-chung-toi'),
        'no_index' => false,
        'no_follow' => false,
    ];
    return view('about', compact('meta'));
})->name('about');

Route::get('/lien-he', function () {
    $meta = [
        'title' => 'Liên hệ - Daniel Wellington Vietnam',
        'description' => 'Liên hệ với Daniel Wellington Vietnam. Hotline: 0978187088, Email: cskh@donghodanielwellington.vn. Địa chỉ: 590 Cách Mạng Tháng 8, Hồ Chí Minh.',
        'keywords' => 'liên hệ daniel wellington, hotline daniel wellington, địa chỉ daniel wellington, email daniel wellington, hỗ trợ khách hàng',
        'og_title' => 'Liên hệ - Daniel Wellington Vietnam',
        'og_description' => 'Liên hệ với Daniel Wellington Vietnam. Hotline: 0978187088, Email: cskh@donghodanielwellington.vn.',
        'og_image' => asset('img/DW-LOGO.png'),
        'canonical_url' => url('/lien-he'),
        'no_index' => false,
        'no_follow' => false,
    ];
    return view('contact', compact('meta'));
})->name('contact');

// Page routes (phải để cuối cùng để không bắt các routes khác)
Route::get('/{slug}', [App\Http\Controllers\PageController::class, 'show'])->name('page.show');