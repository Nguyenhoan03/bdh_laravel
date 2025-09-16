@extends('layouts.app')

@section('title', 'Trang Chủ - Daniel Wellington Vietnam')

@section('content')
<!-- Hero Banner -->
@include('components.banner-slide')

<!-- Features Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 scroll-reveal h-20">
            <!-- Feature 1: Diverse Designs -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex">
                    <!-- Icon Section -->
                    <div class="w-20 h-20 bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clock text-white text-2xl"></i>
                    </div>

                    <!-- Text Section -->
                    <div class="flex-1 p-2 bg-gray-50">
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
                    <div class="flex-1 p-2 bg-gray-50">
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
                    <div class="flex-1 p-2 bg-gray-50">
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
                    <div class="flex-1 p-2 bg-gray-50">
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
        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 uppercase tracking-wide scroll-reveal roboto-condensed">
            ĐỒNG HỒ DANIEL WELLINGTON (ĐỒNG HỒ DW)
        </h1>
    </div>
</section>

<!-- Promotional Banner -->
<section class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-lg overflow-hidden scroll-reveal" style="background: linear-gradient(to right, #93c5fd, #1e40af);">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><defs><pattern id=\"confetti\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\"><circle cx=\"10\" cy=\"10\" r=\"1\" fill=\"%23ffffff\" opacity=\"0.3\" /><circle cx=\"5\" cy=\"5\" r=\"0.5\" fill=\"%23ffffff\" opacity=\"0.2\" /><circle cx=\"15\" cy=\"15\" r=\"0.5\" fill=\"%23ffffff\" opacity=\"0.2\" /></pattern></defs><rect width=\"100\" height=\"100\" fill=\"url(%23confetti)\" /></svg>');">
                </div>
            </div>

            <!-- Content -->
            <div class="relative z-10 text-center">
                <img src="{{ asset('img/bnn.jpg') }}" alt="Banner Promotional" class="w-full h-auto">
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
                :columns="5"
                :size="'normal'"
                :show-view-more="true"
                :view-more-text="'Xem thêm sản phẩm khác'"
                :view-more-url="'/products'" />

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
<!-- Women's Watches Banner -->


<!-- Women's Watches Section -->
<section class="py-16 bg-white scroll-reveal">
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
                    <h2 class="md:text-5xl font-extrabold text-gray-900 uppercase tracking-wider roboto-condensed" style="font-size:22px">ĐỒNG HỒ NỮ</h2>
                </div>
                
                <!-- Right line -->
                <div class="flex-1 h-px bg-gray-300 ml-4"></div>
            </div>
        </div>

        @php
        $womensWatches = [
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ]
        ];
        @endphp

        <!-- Products Grid with Navigation -->
        <div class="relative">
            <!-- Swiper Container -->
            <div class="swiper products-swiper">
                <div class="swiper-wrapper">
                    @foreach($womensWatches as $index => $product)
                        <div class="swiper-slide scroll-reveal" data-delay="{{ $index * 100 }}">
                            <x-product-card 
                                :name="$product['name'] ?? ''"
                                :spec="$product['spec'] ?? ''"
                                :original-price="$product['original_price'] ?? ''"
                                :price="$product['price'] ?? ''"
                                :discount="$product['discount'] ?? ''"
                                :image="$product['image'] ?? 'DW00100699-247x296.webp'"
                                :size="'normal'"
                            />
                        </div>
                    @endforeach
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
            <a href="/products" 
               class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Men's Watches Section -->
<section class="bg-white scroll-reveal">
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
                    <h2 class="md:text-5xl font-extrabold text-gray-900 uppercase tracking-wider roboto-condensed" style="font-size: 22px;">ĐỒNG HỒ NAM</h2>
                </div>
                
                <!-- Right line -->
                <div class="flex-1 h-px bg-gray-300 ml-4"></div>
            </div>
        </div>

        @php
        $womensWatches = [
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ],
        [
        'name' => 'Elan Lumine Silver DW00100716',
        'spec' => 'Nữ 22mm',
        'original_price' => '₫2.850.000',
        'price' => '₫1.850.000',
        'discount' => '-35%',
        'image' => 'DW00100699-247x296.webp'
        ]
        ];
        @endphp

        <!-- Products Grid with Navigation -->
        <div class="relative">
            <!-- Swiper Container -->
            <div class="swiper products-swiper">
                <div class="swiper-wrapper">
                    @foreach($womensWatches as $index => $product)
                        <div class="swiper-slide scroll-reveal" data-delay="{{ $index * 100 }}">
                            <x-product-card 
                                :name="$product['name'] ?? ''"
                                :spec="$product['spec'] ?? ''"
                                :original-price="$product['original_price'] ?? ''"
                                :price="$product['price'] ?? ''"
                                :discount="$product['discount'] ?? ''"
                                :image="$product['image'] ?? 'DW00100699-247x296.webp'"
                                :size="'normal'"
                            />
                        </div>
                    @endforeach
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
            <a href="/products" 
               class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Best Selling Section -->
<section class="py-6 bg-white">
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

        @php
        $bestSellingProducts = [
            [
                'name' => 'Dây Đồng Hồ DW Petite Bondi 12mm',
                'spec' => 'Dây da trắng - Khóa vàng',
                'original_price' => '₫700.000',
                'price' => '₫350.000',
                'discount' => '-50%',
                'image' => 'DW00100699-247x296.webp'
            ],
            [
                'name' => 'Dây Đồng Hồ DW Classic Sheffield 20mm Bạc',
                'spec' => 'Dây da đen - Khóa bạc',
                'original_price' => '₫800.000',
                'price' => '₫400.000',
                'discount' => '-50%',
                'image' => 'DW00100699-247x296.webp'
            ],
            [
                'name' => 'Dây Đồng Hồ DW Classic Sheffield 18mm Bạc',
                'spec' => 'Dây da đen - Khóa bạc',
                'original_price' => '₫750.000',
                'price' => '₫375.000',
                'discount' => '-50%',
                'image' => 'DW00100699-247x296.webp'
            ],
            [
                'name' => 'Dây Đồng Hồ DW Classic Sheffield 20mm',
                'spec' => 'Dây da đen - Khóa vàng',
                'original_price' => '₫800.000',
                'price' => '₫400.000',
                'discount' => '-50%',
                'image' => 'DW00100699-247x296.webp'
            ],
            [
                'name' => 'Dây Đồng Hồ DW Classic Sheffield 18mm',
                'spec' => 'Dây da đen - Khóa vàng',
                'original_price' => '₫750.000',
                'price' => '₫375.000',
                'discount' => '-50%',
                'image' => 'DW00100699-247x296.webp'
            ],
            [
                'name' => 'Dây Đồng Hồ DW Petite St Mawes 14mm Bạc',
                'spec' => 'Dây da nâu - Khóa bạc',
                'original_price' => '₫700.000',
                'price' => '₫350.000',
                'discount' => '-50%',
                'image' => 'DW00100699-247x296.webp'
            ],
            [
                'name' => 'Dây Đồng Hồ DW Petite St Mawes 12mm Bạc',
                'spec' => 'Dây da nâu - Khóa bạc',
                'original_price' => '₫650.000',
                'price' => '₫325.000',
                'discount' => '-50%',
                'image' => 'DW00100699-247x296.webp'
            ],
            [
                'name' => 'Dây Đồng Hồ DW Petite Sheffield 14mm Bạc',
                'spec' => 'Dây da đen - Khóa bạc',
                'original_price' => '₫700.000',
                'price' => '₫350.000',
                'discount' => '-50%',
                'image' => 'DW00100699-247x296.webp'
            ]
        ];
        @endphp

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            @foreach($bestSellingProducts as $index => $product)
                <div class="scroll-reveal" data-delay="{{ $index * 100 }}">
                    <x-product-card 
                        :name="$product['name'] ?? ''"
                        :spec="$product['spec'] ?? ''"
                        :original-price="$product['original_price'] ?? ''"
                        :price="$product['price'] ?? ''"
                        :discount="$product['discount'] ?? ''"
                        :image="$product['image'] ?? 'DW00100699-247x296.webp'"
                        :size="'normal'"
                    />
                </div>
            @endforeach
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
<!-- Toplist Section -->
<section class="py-16 bg-white scroll-reveal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-2xl font-extrabold text-blue-600 uppercase tracking-wider mb-4 roboto-condensed">
                CHUYÊN MỤC TOPLIST
            </h2>
        </div>

        <!-- Toplist Carousel -->
        <div class="swiper toplist-swiper">
            <div class="swiper-wrapper">
                <!-- Card 1: Rolex Perpetual 1908 Settimo -->
                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-w-16 aspect-h-12">
                            <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                                 alt="Rolex Perpetual 1908 Settimo" 
                                 class="w-full h-64 object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight roboto-condensed">
                                Rolex Perpetual 1908 Settimo có dây đeo sang trọng mới
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Patek Philippe Desk Clock -->
                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-w-16 aspect-h-12">
                            <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                                 alt="Patek Philippe Desk Clock" 
                                 class="w-full h-64 object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight roboto-condensed">
                                Chào đón sự trở lại của sự xa hoa với Đồng hồ để bàn phức tạp của Patek Philippe
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Tudor 2025 Prediction -->
                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-w-16 aspect-h-12">
                            <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                                 alt="Tudor 2025 Prediction" 
                                 class="w-full h-64 object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight roboto-condensed">
                                Dự đoán về Tudor 2025 - tại sao người em của Rolex có thể làm lu mờ người anh trong năm nay
                            </h3>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Citizen Premier Collection -->
                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="aspect-w-16 aspect-h-12">
                            <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                                 alt="Citizen Premier Collection" 
                                 class="w-full h-64 object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-gray-900 mb-3 leading-tight roboto-condensed">
                                Điều gì khiến bộ sưu tập Citizen Premier mới đủ tiêu chuẩn là đồng hồ xa xỉ?
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
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

    // Initialize Toplist Swiper
    const toplistSwiper = new Swiper('.toplist-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
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
});
</script>

@endsection