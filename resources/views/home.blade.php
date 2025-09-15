@extends('layouts.app')

@section('title', 'Trang Chủ - Daniel Wellington Vietnam')

@section('content')
<!-- Hero Banner -->
@include('components.banner-slide')

<!-- Features Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 scroll-reveal">
            <!-- Feature 1: Diverse Designs -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex">
                    <!-- Icon Section -->
                    <div class="w-20 h-20 bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>
                    
                    <!-- Text Section -->
                    <div class="flex-1 p-4 bg-gray-50">
                        <h3 class="text-sm font-bold text-blue-600 mb-1">Mẫu mã đa dạng</h3>
                        <p class="text-xs text-gray-600 leading-relaxed">Nhiều sản phẩm mới cập nhật liên tục</p>
                    </div>
                </div>
            </div>

            <!-- Feature 2: Genuine Products -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex">
                    <!-- Icon Section -->
                    <div class="w-20 h-20 bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-shield-check text-white text-2xl"></i>
                    </div>
                    
                    <!-- Text Section -->
                    <div class="flex-1 p-4 bg-gray-50">
                        <h3 class="text-sm font-bold text-blue-600 mb-1">Sản phẩm chính hãng</h3>
                        <p class="text-xs text-gray-600 leading-relaxed">Hoàn tiền 20 lần nếu phát hiện hàng giả</p>
                    </div>
                </div>
            </div>

            <!-- Feature 3: Fast Delivery -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex">
                    <!-- Icon Section -->
                    <div class="w-20 h-20 bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-shipping-fast text-white text-2xl"></i>
                    </div>
                    
                    <!-- Text Section -->
                    <div class="flex-1 p-4 bg-gray-50">
                        <h3 class="text-sm font-bold text-blue-600 mb-1">Giao hàng nhanh chóng</h3>
                        <p class="text-xs text-gray-600 leading-relaxed">Giao hàng nhanh nội thành HCM</p>
                    </div>
                </div>
            </div>

            <!-- Feature 4: Easy Returns -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex">
                    <!-- Icon Section -->
                    <div class="w-20 h-20 bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-undo-alt text-white text-2xl"></i>
                    </div>
                    
                    <!-- Text Section -->
                    <div class="flex-1 p-4 bg-gray-50">
                        <h3 class="text-sm font-bold text-blue-600 mb-1">Đổi trả dễ dàng</h3>
                        <p class="text-xs text-gray-600 leading-relaxed">Dễ dàng đổi trả</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Heading Section -->
<section class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 uppercase tracking-wide scroll-reveal" style="font-family: 'Roboto Condensed', sans-serif;">
            ĐỒNG HỒ DANIEL WELLINGTON (ĐỒNG HỒ DW)
        </h1>
    </div>
</section>

<!-- Promotional Banner -->
<section class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg overflow-hidden scroll-reveal">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><defs><pattern id=\"confetti\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\"><circle cx=\"10\" cy=\"10\" r=\"1\" fill=\"%23ffffff\" opacity=\"0.3\"/><circle cx=\"5\" cy=\"5\" r=\"0.5\" fill=\"%23ffffff\" opacity=\"0.2\"/><circle cx=\"15\" cy=\"15\" r=\"0.5\" fill=\"%23ffffff\" opacity=\"0.2\"/></pattern></defs><rect width=\"100\" height=\"100\" fill=\"url(%23confetti)\"/></svg>');"></div>
            </div>
            
            <!-- Content -->
            <div class="relative z-10 py-12 px-8 text-center">
                <h2 class="text-2xl md:text-4xl font-bold text-white mb-4 uppercase tracking-wide" style="font-family: 'Roboto Condensed', sans-serif;">
                    XẢ KHO GIẢM SỐC - ĐỒNG HỒ GIẢM ĐẾN 58%
                </h2>
                <p class="text-lg text-blue-100 mb-6">
                    Cơ hội sở hữu đồng hồ Daniel Wellington chính hãng với giá tốt nhất
                </p>
                <a href="/products" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    XEM NGAY
                </a>
            </div>
            
            <!-- Decorative Watch Images -->
            <div class="absolute left-0 top-1/2 -translate-y-1/2 opacity-30">
                <img src="{{ asset('img/DW00100699-247x296.webp') }}" alt="Watch" class="w-32 h-auto transform -rotate-12">
            </div>
            <div class="absolute right-0 top-1/2 -translate-y-1/2 opacity-30">
                <img src="{{ asset('img/DW00100699-247x296.webp') }}" alt="Watch" class="w-32 h-auto transform rotate-12">
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section - 5 Columns (Compact) -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @php
            $featuredProducts = [
                [
                    'name' => 'ELAN NECKLACE DW00400158',
                    'spec' => 'Trang sức nữ',
                    'original_price' => '₫950.000',
                    'price' => '₫550.000',
                    'discount' => '-42%',
                    'image' => 'DW00100699-247x296.webp'
                ],
                [
                    'name' => 'Bound Durham Gold DW00100696 - Nữ 32x22mm',
                    'spec' => 'Đồng hồ nữ',
                    'original_price' => '₫2.950.000',
                    'price' => '₫1.850.000',
                    'discount' => '-37%',
                    'image' => 'DW00100699-247x296.webp'
                ],
                [
                    'name' => 'Bound Crocodile Champagne Sunray Gold DW00100695 - Nữ 32x22mm',
                    'spec' => 'Đồng hồ nữ',
                    'original_price' => '₫2.950.000',
                    'price' => '₫1.850.000',
                    'discount' => '-37%',
                    'image' => 'DW00100699-247x296.webp'
                ],
                [
                    'name' => 'ICONIC CHRONOGRAPH SHEFFIELD RG DW00100646 - Size 40mm',
                    'spec' => 'Đồng hồ nam',
                    'original_price' => '₫2.550.000',
                    'price' => '₫1.750.000',
                    'discount' => '-31%',
                    'image' => 'DW00100699-247x296.webp'
                ],
                [
                    'name' => 'Bound Black Crocodile Rose Gold DW00100693 - Nữ 32x22mm',
                    'spec' => 'Đồng hồ nữ',
                    'original_price' => '₫2.950.000',
                    'price' => '₫1.850.000',
                    'discount' => '-37%',
                    'image' => 'DW00100699-247x296.webp'
                ]
            ];
        @endphp

        <x-products-grid 
            :products="$featuredProducts"
            :columns="5"
            :size="'compact'"
            :show-view-more="true"
            :view-more-text="'Xem thêm sản phẩm giảm giá'"
            :view-more-url="'/products'"
        />
    </div>
</section>

<!-- Regular Products Section - 4 Columns (Normal) -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12 scroll-reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4" style="font-family: 'Roboto Condensed', sans-serif;">
                SẢN PHẨM NỔI BẬT
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Khám phá bộ sưu tập đồng hồ Daniel Wellington với thiết kế tinh tế và chất lượng cao cấp
            </p>
        </div>

        @php
            $regularProducts = [
                [
                    'name' => 'Elan Lumine Silver DW00100716',
                    'spec' => 'Nữ 22mm',
                    'original_price' => '₫2.850.000',
                    'price' => '₫1.850.000',
                    'discount' => '-35%',
                    'image' => 'DW00100699-247x296.webp'
                ],
                [
                    'name' => 'Classic Sheffield DW00100001',
                    'spec' => 'Nam 40mm',
                    'original_price' => '₫3.200.000',
                    'price' => '₫2.080.000',
                    'discount' => '-35%',
                    'image' => 'DW00100699-247x296.webp'
                ],
                [
                    'name' => 'Petite Sterling DW00100002',
                    'spec' => 'Nữ 28mm',
                    'original_price' => '₫2.600.000',
                    'price' => '₫1.690.000',
                    'discount' => '-35%',
                    'image' => 'DW00100699-247x296.webp'
                ],
                [
                    'name' => 'Classic Cornwall DW00100003',
                    'spec' => 'Nam 40mm',
                    'original_price' => '₫3.400.000',
                    'price' => '₫2.210.000',
                    'discount' => '-35%',
                    'image' => 'DW00100699-247x296.webp'
                ]
            ];
        @endphp

        <x-products-grid 
            :products="$regularProducts"
            :columns="4"
            :size="'normal'"
            :show-view-more="true"
            :view-more-text="'Xem Tất Cả Sản Phẩm'"
            :view-more-url="'/products'"
        />
    </div>
</section>
@endsection