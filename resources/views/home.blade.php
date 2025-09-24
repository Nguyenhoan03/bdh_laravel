@extends('layouts.app')

@section('title', $meta['title'] ?? 'Trang Chủ - Daniel Wellington Vietnam')

@section('content')
<!-- Hero Banner -->
@include('components.banner-slide')

<!-- Features Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Tại sao chọn chúng tôi?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Cam kết mang đến trải nghiệm mua sắm tốt nhất với chất lượng và dịch vụ vượt trội</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 scroll-reveal">
            <!-- Feature 1: Diverse Designs -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 p-6 text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Mẫu mã đa dạng</h3>
                <p class="text-sm text-gray-600">Nhiều sản phẩm mới cập nhật liên tục</p>
            </div>

            <!-- Feature 2: Genuine Products -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 p-6 text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Sản phẩm chính hãng</h3>
                <p class="text-sm text-gray-600">Hoàn tiền 20 lần nếu phát hiện hàng giả</p>
            </div>

            <!-- Feature 3: Fast Delivery -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 p-6 text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shipping-fast text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Giao hàng nhanh chóng</h3>
                <p class="text-sm text-gray-600">Giao hàng nhanh nội thành HCM</p>
            </div>

            <!-- Feature 4: Easy Returns -->
            <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 p-6 text-center">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-undo-alt text-white text-2xl"></i>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Đổi trả dễ dàng</h3>
                <p class="text-sm text-gray-600">Đổi trả miễn phí trong 7 ngày</p>
            </div>
        </div>
    </div>
</section>

<!-- Main Heading Section -->
<section class="py-16 bg-gradient-to-r from-blue-50 to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center justify-center mb-6">
            <div class="w-12 h-1 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mr-4"></div>
            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <div class="w-12 h-1 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full ml-4"></div>
        </div>
        <h1 class="text-3xl md:text-5xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 uppercase tracking-wide scroll-reveal roboto-condensed mb-6">
            ĐỒNG HỒ DANIEL WELLINGTON
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            Thương hiệu đồng hồ cao cấp từ Thụy Điển - Phong cách tối giản, sang trọng và đẳng cấp
        </p>
    </div>
</section>

<!-- Promotional Banner -->
<section class="bg-gradient-to-r from-purple-50 to-pink-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-lg overflow-hidden scroll-reveal" style="background: linear-gradient(to right, #93c5fd, #1e40af);">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg xmlns=\" http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\">
                    <defs>
                        <pattern id=\"confetti\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\">
                            <circle cx=\"10\" cy=\"10\" r=\"1\" fill=\"%23ffffff\" opacity=\"0.3\" />
                            <circle cx=\"5\" cy=\"5\" r=\"0.5\" fill=\"%23ffffff\" opacity=\"0.2\" />
                            <circle cx=\"15\" cy=\"15\" r=\"0.5\" fill=\"%23ffffff\" opacity=\"0.2\" />
                        </pattern>
                    </defs>
                    <rect width=\"100\" height=\"100\" fill=\"url(%23confetti)\" /></svg>
                </div>
            </div>

            <!-- Content -->
            <div class="relative z-10 text-center">
                <img src="{{ asset('img/bnn.jpg') }}" alt="Banner Promotional" class="w-full h-auto">
            </div>

            <!-- Products Swiper -->
            <div class="swiper promotional-products-swiper">
                <div class="swiper-wrapper">
                    @forelse($promotionalProducts ?? collect() as $product)
                    <div class="swiper-slide p-3 h-[400px]">
                        <a href="/san-pham/{{ $product->slug ?? $product->id }}" class="block h-full">
                            <x-product-card
                                :name="$product->name ?? ''"
                                :spec="''"
                                :original-price="number_format($product->price, 0, ',', '.') . '₫'"
                                :price="number_format($product->sale_price > 0 ? $product->sale_price : $product->price, 0, ',', '.') . '₫'"
                                :discount="($product->price > $product->sale_price && $product->sale_price > 0) ? '-' . round((($product->price - $product->sale_price) / $product->price) * 100) . '%' : ''"
                                :image="$product->first_image_url"
                                :size="'normal'"
                                :product-id="$product->id"
                                :slug="$product->slug ?? $product->id" />
                        </a>
                    </div>
                    @empty
                    <!-- Fallback: Show newest products if no promotional products -->
                    @forelse($newestProducts ?? collect() as $product)
                    <div class="swiper-slide p-3 h-[400px]">
                        <a href="/san-pham/{{ $product->slug ?? $product->id }}" class="block h-full">
                            <x-product-card
                                :name="$product->name ?? ''"
                                :spec="''"
                                :original-price="number_format($product->price, 0, ',', '.') . '₫'"
                                :price="number_format($product->sale_price > 0 ? $product->sale_price : $product->price, 0, ',', '.') . '₫'"
                                :discount="($product->price > $product->sale_price && $product->sale_price > 0) ? '-' . round((($product->price - $product->sale_price) / $product->price) * 100) . '%' : ''"
                                :image="$product->first_image_url"
                                :size="'normal'"
                                :product-id="$product->id"
                                :slug="$product->slug ?? $product->id" />
                        </a>
                    </div>
                    @empty
                    <div class="swiper-slide p-3">
                        <div class="text-center text-white">
                            <p>Không có sản phẩm khuyến mãi</p>
                        </div>
                    </div>
                    @endforelse
                    @endforelse
                </div>
            </div>

            <!-- View More Button -->
            <div class="text-center m-4">
                <a href="/products"
                    class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
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

<!-- Women's Watches Section -->
<section class="py-16 bg-gradient-to-br from-pink-50 to-rose-50 scroll-reveal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 womens-watches">
        <!-- Section Header -->
        <div class="relative w-full h-64 bg-gradient-to-r from-pink-100 to-yellow-100 flex items-center justify-end">
            <img src="{{ asset('img/dong-ho-nu-banner.jpg') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover opacity-50">
        </div>
        <div class="text-center mb-12 pt-4">
            <div class="flex items-center justify-center mb-4">
                <!-- Left line -->
                <div class="flex-1 h-px bg-gray-300 mr-4"></div>

                <!-- Icon and text -->
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12,6 12,12 16,14"></polyline>
                    </svg>
                    <h2 class="md:text-5xl mt-5 font-extrabold text-gray-900 uppercase tracking-wider roboto-condensed" style="font-size: 22px;">ĐỒNG HỒ NỮ</h2>
                </div>

                <!-- Right line -->
                <div class="flex-1 h-px bg-gray-300 ml-4"></div>
            </div>
        </div>

        <!-- Products Grid with Navigation -->
        <div class="relative">
            <!-- Swiper Container -->
            <div class="swiper products-swiper">
                <div class="swiper-wrapper">
                    @forelse($dataWatchWomen ?? collect() as $index => $product)
                    <div class="swiper-slide scroll-reveal" data-delay="{{ $index * 100 }}">
                        <a href="/san-pham/{{ $product->slug ?? $product->id }}" class="block">
                            <div class="relative bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 overflow-hidden border border-gray-100 h-[400px] flex flex-col">
                                <!-- Discount Badge -->
                                @if($product->price > $product->sale_price && $product->sale_price > 0)
                                <div class="absolute top-4 left-4 z-20">
                                    <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow-lg animate-pulse">
                                        -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                                    </div>
                                </div>
                                @endif

                                <!-- Women Badge -->
                                <div class="absolute top-4 right-4 z-20">
                                    <div class="bg-gradient-to-r from-pink-500 to-rose-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg">
                                        NỮ
                                    </div>
                                </div>

                                <!-- Product Image Container -->
                                <div class="relative h-48 bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center p-6 overflow-hidden flex-shrink-0">
                                    <img src="{{ $product->first_image_url }}"
                                        alt="{{ $product->name }}"
                                        class="relative z-10 max-w-full max-h-full object-contain transform group-hover:scale-110 transition-transform duration-500"
                                        onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                                </div>

                                <!-- Product Details -->
                                <div class="p-4 space-y-3 flex-1 flex flex-col justify-between">
                                    <!-- Product Name -->
                                    @php
                                        $nameParts = explode(' - ', $product->name);
                                        $mainName = $nameParts[0] ?? $product->name;
                                        $subName = isset($nameParts[1]) ? $nameParts[1] : '';
                                    @endphp
                                    <h3 class="text-base font-bold text-gray-900 leading-tight group-hover:text-blue-600 transition-colors duration-300 mb-1" title="{{ $product->name }}">
                                        {{ Str::limit($mainName, 30) }}
                                    </h3>
                                    
                                    <!-- Sub Name and Stock Indicator -->
                                    <div class="flex items-center justify-between mb-3">
                                        @if($subName)
                                        <p class="text-sm text-gray-600 font-medium">
                                            {{ Str::limit($subName, 25) }}
                                        </p>
                                        @endif
                                        
                                        <!-- Stock Indicator -->
                                        <div class="flex items-center space-x-1">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            <span class="text-xs text-gray-500">Còn hàng</span>
                                        </div>
                                    </div>

                                    <!-- Pricing -->
                                    <div class="flex">
                                        <div class="flex space-x-2">
                                            @if($product->price > $product->sale_price && $product->sale_price > 0)
                                            <span class="text-sm text-gray-400 line-through font-medium">
                                                {{ number_format($product->price, 0, ',', '.') }}₫
                                            </span>
                                            @endif
                                            <span class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                                                {{ number_format($product->sale_price > 0 ? $product->sale_price : $product->price, 0, ',', '.') }}₫
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Add to Cart Button -->
                                    <button onclick="addToCart({{ $product->id }})" class="w-full mt-auto px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg text-sm">
                                        <span class="flex items-center justify-center space-x-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                                            </svg>
                                            <span>THÊM VÀO GIỎ</span>
                                        </span>
                                    </button>
                                </div>

                                <!-- Hover Effect Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                        </a>
                    </div>
                    @empty
                    <div class="swiper-slide scroll-reveal">
                        <div class="text-center text-gray-500">
                            <p>Không có sản phẩm đồng hồ nữ</p>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>

            <!-- Left Arrow -->
            <button class="swiper-button-prev absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 group transform translate-y-8 opacity-0">
            </button>

            <!-- Right Arrow -->
            <button class="swiper-button-next absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 group transform translate-y-8 opacity-0">
            </button>

            <!-- Pagination -->
            <div class="swiper-pagination mt-6"></div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-8">
            <a href="/danh-muc"
                class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Men's Watches Section -->
<section class="bg-gradient-to-br from-blue-50 to-indigo-50 scroll-reveal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 womens-watches">
        <!-- Section Header -->
        <div class="relative w-full h-64 bg-gradient-to-r from-pink-100 to-yellow-100 flex items-center justify-end">
            <img src="{{ asset('img/dong-ho-nam-banner.jpg') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover opacity-50">
        </div>
        <div class="text-center mb-12 pt-4">
            <div class="flex items-center justify-center mb-4">
                <!-- Left line -->
                <div class="flex-1 h-px bg-gray-300 mr-4"></div>

                <!-- Icon and text -->
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12,6 12,12 16,14"></polyline>
                    </svg>
                    <h2 class="md:text-5xl mt-5 font-extrabold text-gray-900 uppercase tracking-wider roboto-condensed" style="font-size: 22px;">ĐỒNG HỒ NAM</h2>
                </div>

                <!-- Right line -->
                <div class="flex-1 h-px bg-gray-300 ml-4"></div>
            </div>
        </div>

        <!-- Products Grid with Navigation -->
        <div class="relative">
            <!-- Swiper Container -->
            <div class="swiper products-swiper">
                <div class="swiper-wrapper">
                    @forelse($dataWatchMen ?? collect() as $index => $product)
                    <div class="swiper-slide scroll-reveal" data-delay="{{ $index * 100 }}">
                        <a href="/san-pham/{{ $product->slug ?? $product->id }}" class="block">
                            <div class="relative bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 overflow-hidden border border-gray-100 h-[400px] flex flex-col">
                                <!-- Discount Badge -->
                                @if($product->price > $product->sale_price && $product->sale_price > 0)
                                <div class="absolute top-4 left-4 z-20">
                                    <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow-lg animate-pulse">
                                        -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                                    </div>
                                </div>
                                @endif

                                <!-- Men Badge -->
                                <div class="absolute top-4 right-4 z-20">
                                    <div class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg">
                                        NAM
                                    </div>
                                </div>

                                <!-- Product Image Container -->
                                <div class="relative h-48 bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center p-6 overflow-hidden flex-shrink-0">
                                    <img src="{{ $product->first_image_url }}"
                                        alt="{{ $product->name }}"
                                        class="relative z-10 max-w-full max-h-full object-contain transform group-hover:scale-110 transition-transform duration-500"
                                        onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                                </div>

                                <!-- Product Details -->
                                <div class="p-4 space-y-3 flex-1 flex flex-col justify-between">
                                    <!-- Product Name -->
                                    @php
                                        $nameParts = explode(' - ', $product->name);
                                        $mainName = $nameParts[0] ?? $product->name;
                                        $subName = isset($nameParts[1]) ? $nameParts[1] : '';
                                    @endphp
                                    <h3 class="text-base font-bold text-gray-900 leading-tight group-hover:text-blue-600 transition-colors duration-300 mb-1" title="{{ $product->name }}">
                                        {{ Str::limit($mainName, 30) }}
                                    </h3>
                                    
                                    <!-- Sub Name and Stock Indicator -->
                                    <div class="flex items-center justify-between mb-3">
                                        @if($subName)
                                        <p class="text-sm text-gray-600 font-medium">
                                            {{ Str::limit($subName, 25) }}
                                        </p>
                                        @endif
                                        
                                        <!-- Stock Indicator -->
                                        <div class="flex items-center space-x-1">
                                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                            <span class="text-xs text-gray-500">Còn hàng</span>
                                        </div>
                                    </div>

                                    <!-- Pricing -->
                                    <div class="flex">
                                        <div class="flex space-x-2">
                                            @if($product->price > $product->sale_price && $product->sale_price > 0)
                                            <span class="text-sm text-gray-400 line-through font-medium">
                                                {{ number_format($product->price, 0, ',', '.') }}₫
                                            </span>
                                            @endif
                                            <span class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                                                {{ number_format($product->sale_price > 0 ? $product->sale_price : $product->price, 0, ',', '.') }}₫
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Add to Cart Button -->
                                    <button onclick="addToCart({{ $product->id }})" class="w-full mt-auto px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg text-sm">
                                        <span class="flex items-center justify-center space-x-2">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                                            </svg>
                                            <span>THÊM VÀO GIỎ</span>
                                        </span>
                                    </button>
                                </div>

                                <!-- Hover Effect Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-blue-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                            </div>
                        </a>
                    </div>
                    @empty
                    <div class="swiper-slide scroll-reveal">
                        <div class="text-center text-gray-500">
                            <p>Không có sản phẩm đồng hồ nam</p>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>

            <!-- Left Arrow -->
            <button class="swiper-button-prev absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 group transform translate-y-8 opacity-0">
            </button>

            <!-- Right Arrow -->
            <button class="swiper-button-next absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 group transform translate-y-8 opacity-0">
            </button>

            <!-- Pagination -->
            <div class="swiper-pagination mt-6"></div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-8 mb-5">
            <a href="/dong-ho-nam"
                class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Best Selling Section -->
<section class="py-12 bg-gradient-to-br from-orange-50 to-red-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-2xl font-extrabold text-gray-900 uppercase tracking-wider mb-4 roboto-condensed">
                BÁN CHẠY NHẤT HỆ THỐNG
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                DONGHODANIELWELLINGTION.VN đang có sẵn hơn 500+ sản phẩm đến và phụ kiện
            </p>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            @forelse($bestSellingProducts ?? collect() as $index => $product)
            <div class="group scroll-reveal" data-delay="{{ $index * 100 }}">
                <a href="/san-pham/{{ $product->slug ?? $product->id }}" class="block">
                    <div class="relative bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 overflow-hidden border border-gray-100 h-[400px] flex flex-col">
                        <!-- Discount Badge -->
                        @if($product->price > $product->sale_price && $product->sale_price > 0)
                        <div class="absolute top-4 left-4 z-20">
                            <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow-lg">
                                -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                            </div>
                        </div>
                        @elseif($product->price > 0 && $product->sale_price == 0)
                        <div class="absolute top-4 left-4 z-20">
                            <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow-lg">
                                -0%
                            </div>
                        </div>
                        @endif

                        <!-- Best Selling Badge -->
                        <div class="absolute top-4 right-4 z-20">
                            <div class="bg-gradient-to-r from-green-500 to-emerald-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg">
                                BÁN CHẠY
                            </div>
                        </div>

                        <!-- Product Image Container -->
                        <div class="relative h-48 bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center p-6 overflow-hidden flex-shrink-0">
                            <img src="{{ $product->first_image_url }}"
                                alt="{{ $product->name }}"
                                class="relative z-10 max-w-full max-h-full object-contain transform group-hover:scale-110 transition-transform duration-500"
                                onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                        </div>

                        <!-- Product Details -->
                        <div class="p-4 space-y-3 flex-1 flex flex-col justify-between">
                            <!-- Product Name -->
                            @php
                                $nameParts = explode(' - ', $product->name);
                                $mainName = $nameParts[0] ?? $product->name;
                                $subName = isset($nameParts[1]) ? $nameParts[1] : '';
                            @endphp
                            <h3 class="text-base font-bold text-gray-900 leading-tight group-hover:text-blue-600 transition-colors duration-300 mb-1" title="{{ $product->name }}">
                                {{ Str::limit($mainName, 30) }}
                            </h3>
                            
                            <!-- Sub Name and Stock Indicator -->
                            <div class="flex items-center justify-between mb-3 pt-2">
                                @if($subName)
                                <p class="text-sm text-gray-600 font-medium">
                                    {{ Str::limit($subName, 25) }}
                                </p>
                                @endif
                                
                                <!-- Stock Indicator -->
                                <div class="flex items-center space-x-1">
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    <span class="text-xs text-gray-500">Còn hàng</span>
                                </div>
                            </div>

                            <!-- Pricing -->
                            <div class="flex items-center space-x-2">
                                @if($product->price > $product->sale_price && $product->sale_price > 0)
                                <span class="text-sm text-gray-400 line-through">
                                    {{ number_format($product->price, 0, ',', '.') }}₫
                                </span>
                                @endif
                                <span class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                                    {{ number_format($product->sale_price > 0 ? $product->sale_price : $product->price, 0, ',', '.') }}₫
                                </span>
                            </div>

                            <!-- Add to Cart Button -->
                            <button class="w-full mt-auto px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg text-sm">
                                <span class="flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                                    </svg>
                                    <span>THÊM VÀO GIỎ</span>
                                </span>
                            </button>
                        </div>

                        <!-- Hover Effect Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-span-full text-center text-gray-500">
                <p>Không có sản phẩm bán chạy</p>
            </div>
            @endforelse
        </div>

        <!-- View More Button -->
        <div class="text-center">
            <a href="/products"
                class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 roboto-condensed">
                SẢN PHẨM NỔI BẬT
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Khám phá những mẫu đồng hồ được yêu thích nhất với thiết kế tinh tế
            </p>
        </div>

        <!-- Featured Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            @forelse($featuredProducts ?? collect() as $index => $product)
            <div class="group scroll-reveal" data-delay="{{ $index * 150 }}">
                <!-- Product Card with Enhanced Design -->
                <a href="/san-pham/{{ $product->slug ?? $product->id }}" class="block">
                    <div class="relative bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 overflow-hidden border border-gray-100 h-[400px] flex flex-col">
                        <!-- Discount Badge -->
                        @if($product->price > $product->sale_price && $product->sale_price > 0)
                        <div class="absolute top-4 left-4 z-20">
                            <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow-lg">
                                -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                            </div>
                        </div>
                        @elseif($product->price > 0 && $product->sale_price == 0)
                        <div class="absolute top-4 left-4 z-20">
                            <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow-lg">
                                -0%
                            </div>
                        </div>
                        @endif

                        <!-- Featured Badge -->
                        <div class="absolute top-4 right-4 z-20">
                            <div class="bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg">
                                NỔI BẬT
                            </div>
                        </div>

                        <!-- Product Image Container -->
                        <div class="relative h-48 bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center p-6 overflow-hidden flex-shrink-0">
                            <img src="{{ $product->first_image_url }}"
                                alt="{{ $product->name }}"
                                class="relative z-10 max-w-full max-h-full object-contain transform group-hover:scale-110 transition-transform duration-500"
                                onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                        </div>

                        <!-- Product Details -->
                        <div class="p-4 space-y-3 flex-1 flex flex-col justify-between">
                            <!-- Product Name -->
                            @php
                                $nameParts = explode(' - ', $product->name);
                                $mainName = $nameParts[0] ?? $product->name;
                                $subName = isset($nameParts[1]) ? $nameParts[1] : '';
                            @endphp
                            <h3 class="text-base font-bold text-gray-900 leading-tight group-hover:text-blue-600 transition-colors duration-300 mb-1" title="{{ $product->name }}">
                                {{ Str::limit($mainName, 30) }}
                            </h3>
                            
                            <!-- Sub Name and Stock Indicator -->
                            <div class="flex items-center justify-between mb-3 pt-2">
                                @if($subName)
                                <p class="text-sm text-gray-600 font-medium">
                                    {{ Str::limit($subName, 25) }}
                                </p>
                                @endif
                                
                                <!-- Stock Indicator -->
                                <div class="flex items-center space-x-1">
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    <span class="text-xs text-gray-500">Còn hàng</span>
                                </div>
                            </div>

                            <!-- Pricing -->
                            <div class="flex items-center space-x-2">
                                @if($product->price > $product->sale_price && $product->sale_price > 0)
                                <span class="text-sm text-gray-400 line-through">
                                    {{ number_format($product->price, 0, ',', '.') }}₫
                                </span>
                                @endif
                                <span class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                                    {{ number_format($product->sale_price > 0 ? $product->sale_price : $product->price, 0, ',', '.') }}₫
                                </span>
                            </div>

                            <!-- Add to Cart Button -->
                            <button class="w-full mt-auto px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg text-sm">
                                <span class="flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                                    </svg>
                                    <span>THÊM VÀO GIỎ</span>
                                </span>
                            </button>
                        </div>

                        <!-- Hover Effect Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-span-full text-center py-16">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-500 mb-2">Chưa có sản phẩm nổi bật</h3>
                <p class="text-gray-400">Chúng tôi đang cập nhật những sản phẩm tốt nhất cho bạn</p>
            </div>
            @endforelse
        </div>

        <!-- Enhanced View More Button -->
        <div class="text-center">
            <a href="/products"
                class="inline-flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg font-semibold text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <span>Khám phá thêm sản phẩm</span>
                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Custom Swiper Styles -->
<style>
    /* Custom navigation button styles */
    .swiper-button-prev,
    .swiper-button-next {
        position: absolute !important;
        top: 43% !important;
        width: 48px !important;
        height: 48px !important;
        margin-top: 0 !important;
        background: white !important;
        border-radius: 50% !important;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1) !important;
        z-index: 10 !important;
        opacity: 0 !important;
        visibility: hidden !important;
        transform: translateY(-50%) translateY(32px) scale(0.8) !important;
    }

    .womens-watches:hover .swiper-button-prev,
    .womens-watches:hover .swiper-button-next {
        opacity: 1 !important;
        visibility: visible !important;
        transform: translateY(-50%) translateY(0) scale(1) !important;
    }

    .womens-watches:hover .swiper-button-prev:hover,
    .womens-watches:hover .swiper-button-next:hover {
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        transform: translateY(-50%) scale(1.1) !important;
        background: #f9fafb !important;
    }

    .swiper-button-prev:after,
    .swiper-button-next:after {
        font-size: 18px !important;
        color: #6b7280 !important;
        font-weight: bold !important;
    }

    .swiper-button-prev:hover:after,
    .swiper-button-next:hover:after {
        color: #2563eb !important;
    }

    /* Custom pagination styles */
    .swiper-pagination-bullet {
        width: 12px !important;
        height: 12px !important;
        background: #d1d5db !important;
        opacity: 1 !important;
        transition: all 0.3s ease !important;
    }

    .swiper-pagination-bullet-active {
        background: #2563eb !important;
        transform: scale(1.2) !important;
    }

    .swiper-pagination-bullet-active-main {
        background: #2563eb !important;
    }

    .swiper-pagination-bullet-active-prev,
    .swiper-pagination-bullet-active-next {
        background: #9ca3af !important;
    }

    /* Smooth slide transitions */
    .swiper-slide {
        transition: transform 0.3s ease !important;
    }

    /* Hide default swiper navigation */
    .swiper-button-disabled {
        opacity: 0.3 !important;
        cursor: not-allowed !important;
    }
</style>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Products Swiper
        const productsSwiper = new Swiper('.products-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500, // Auto-slide every 2.5 seconds
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 800, // Smooth transition speed
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
            },
            // Pause autoplay when hovering over the swiper
            on: {
                init: function() {
                    this.el.addEventListener('mouseenter', () => {
                        this.autoplay.stop();
                    });
                    this.el.addEventListener('mouseleave', () => {
                        this.autoplay.start();
                    });
                }
            }
        });

        // Add click handlers for custom navigation buttons
        document.querySelectorAll('.swiper-button-prev').forEach(button => {
            button.addEventListener('click', () => {
                productsSwiper.slidePrev();
            });
        });

        document.querySelectorAll('.swiper-button-next').forEach(button => {
            button.addEventListener('click', () => {
                productsSwiper.slideNext();
            });
        });

        // Initialize Promotional Products Swiper
        const promotionalProductsSwiper = new Swiper('.promotional-products-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
                stopOnLastSlide: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
            },
            speed: 800,
            // Pause autoplay when hovering over the swiper
            on: {
                init: function() {
                    // Ensure autoplay starts
                    if (this.autoplay) {
                        this.autoplay.start();
                    }
                    this.el.addEventListener('mouseenter', () => {
                        if (this.autoplay) {
                            this.autoplay.stop();
                        }
                    });
                    this.el.addEventListener('mouseleave', () => {
                        if (this.autoplay) {
                            this.autoplay.start();
                        }
                    });
                }
            }
        });

        // Continuous autoplay monitoring for promotional products
        setInterval(() => {
            if (promotionalProductsSwiper && promotionalProductsSwiper.autoplay && !promotionalProductsSwiper.autoplay.running) {
                console.log('Restarting promotional products autoplay...');
                promotionalProductsSwiper.autoplay.start();
            }
        }, 5000);

        // Scroll Reveal Animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const delay = element.getAttribute('data-delay') || 0;

                    setTimeout(() => {
                        element.style.opacity = '1';
                        element.style.transform = 'translateY(0)';
                    }, delay);
                } else {
                    // Reset animation when element goes out of view
                    const element = entry.target;
                    element.style.opacity = '0';
                    element.style.transform = 'translateY(30px)';
                }
            });
        }, observerOptions);

        // Observe all scroll-reveal elements
        document.querySelectorAll('.scroll-reveal').forEach(el => {
            // Set initial state
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';

            // Start observing
            observer.observe(el);
        });
    });
</script>

@endsection