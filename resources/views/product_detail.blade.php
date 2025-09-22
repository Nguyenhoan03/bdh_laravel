@extends('layouts.app')

@section('title', ($product->name ?? 'Sản phẩm') . ' - Daniel Wellington Vietnam')

@section('content')

<!-- Product Detail Header -->
<section class="py-4 bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <div class="mb-4">
            <nav class="text-sm text-gray-600">
                <a href="/" class="hover:text-blue-600">Trang chủ</a> / 
                <a href="/danh-muc/{{ $category->slug ?? 'products' }}" class="hover:text-blue-600">{{ $category->name ?? 'Sản phẩm' }}</a>
            </nav>
        </div>
    </div>
</section>

<!-- Product Detail Content -->
<section class="py-8 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Product Image -->
                <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden relative">
                    @if($discount > 0)
                    <div class="absolute top-4 left-4 z-20">
                        <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow-lg">
                            -{{ $discount }}%
                        </div>
                    </div>
                    @endif
                    <img src="{{ $product->first_image_url }}" 
                         alt="{{ $product->name }}" 
                         class="w-full h-full object-cover" id="mainImage"
                         onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                </div>
                
                <!-- Product Gallery Thumbnails -->
                <div class="grid grid-cols-4 gap-2">
                    @if($product->image_urls && count($product->image_urls) > 0)
                        @foreach($product->image_urls as $index => $imageUrl)
                        <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer border-2 {{ $index === 0 ? 'border-blue-500' : 'border-gray-200' }} hover:border-blue-500 transition-colors" 
                             onclick="changeMainImage('{{ $imageUrl }}', this)">
                            <img src="{{ $imageUrl }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover"
                                 onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                        </div>
                        @endforeach
                        @if(count($product->image_urls) < 4)
                            @for($i = count($product->image_urls); $i < 4; $i++)
                            <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer border-2 border-gray-200 hover:border-blue-500 transition-colors" 
                                 onclick="changeMainImage('{{ asset('img/DW00100699-247x296.webp') }}', this)">
                                <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                                     alt="{{ $product->name }}" 
                                     class="w-full h-full object-cover">
                            </div>
                            @endfor
                        @endif
                    @else
                        @for($i = 0; $i < 4; $i++)
                        <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer border-2 {{ $i === 0 ? 'border-blue-500' : 'border-gray-200' }} hover:border-blue-500 transition-colors" 
                             onclick="changeMainImage('{{ asset('img/DW00100699-247x296.webp') }}', this)">
                            <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover">
                        </div>
                        @endfor
                    @endif
                </div>
                
                <!-- Zoom Button -->
                <button class="w-full bg-gray-800 text-white py-2 px-4 rounded-lg font-medium hover:bg-gray-900 transition-colors flex items-center justify-center space-x-2" onclick="openImageModal()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                    </svg>
                    <span>Phóng to</span>
                </button>
        </div>
        
            <!-- Product Information -->
            <div class="space-y-6">
                <!-- Product Title -->
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2 roboto-condensed">
                        {{ $product->name }}
                    </h1>
                    <div class="flex items-center space-x-2 text-sm text-gray-600">
                        <span>{{ $product->sku ?? 'N/A' }}</span>
                        @if(explode(' - ', $product->description)[1] ?? '')
                        <span>•</span>
                        <span>{{ explode(' - ', $product->description)[1] }}</span>
                        @endif
                    </div>
                </div>

                <!-- Price Section -->
                <div class="space-y-2">
                    <div class="flex items-center space-x-3">
                        <span class="text-2xl font-bold text-red-600">
                            {{ number_format($product->sale_price > 0 ? $product->sale_price : $product->price, 0, ',', '.') }}₫
                        </span>
                        @if($product->price > $product->sale_price && $product->sale_price > 0)
                        <span class="text-lg text-gray-500 line-through">
                            {{ number_format($product->price, 0, ',', '.') }}₫
                        </span>
                        <span class="bg-red-100 text-red-800 text-sm font-semibold px-2 py-1 rounded">-{{ $discount }}%</span>
                        @endif
                    </div>
                    @if($product->price > $product->sale_price && $product->sale_price > 0)
                    <p class="text-sm text-gray-600">
                        <span class="text-gray-500">Giá gốc là:</span> {{ number_format($product->price, 0, ',', '.') }}₫.
                        <span class="text-gray-500">Giá hiện tại là:</span> {{ number_format($product->sale_price, 0, ',', '.') }}₫.
                    </p>
                    @endif
                </div>

                <!-- Promotion Programs -->
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h3 class="text-sm font-bold text-blue-900 mb-3">CHƯƠNG TRÌNH KHUYẾN MÃI</h3>
                    <ul class="space-y-2 text-sm text-blue-800">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            KIỂM HÀNG TRƯỚC KHI THANH TOÁN
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            MIỄN PHÍ THAY PIN TRỌN ĐỜI
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            TẶNG GÓI BẢO HÀNH 5 NĂM
                        </li>
                    </ul>
                </div>

                <!-- Quantity and Add to Cart -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <label class="text-sm font-medium text-gray-700">Số lượng:</label>
                        <div class="flex items-center border border-gray-300 rounded-md">
                            <button type="button" class="px-3 py-2 text-gray-600 hover:text-gray-800" onclick="decreaseQuantity()">-</button>
                            <input type="number" id="quantity" value="1" min="1" max="10" class="w-16 text-center border-0 focus:ring-0">
                            <button type="button" class="px-3 py-2 text-gray-600 hover:text-gray-800" onclick="increaseQuantity()">+</button>
                        </div>
                    </div>
                    
                    <button id="addToCartBtn" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-3 px-6 rounded-lg font-semibold hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl group" onclick="addToCart({{ $product->id }})">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                            </svg>
                            <span class="transition-all duration-300 group-hover:font-bold">THÊM VÀO GIỎ HÀNG</span>
                        </span>
                    </button>
                </div>

                <!-- Product Meta -->
                <div class="text-sm text-gray-600 space-y-1">
                    <p><span class="font-medium">Danh mục:</span> {{ $category->name ?? 'N/A' }}</p>
                    @if($product->tags)
                    <p><span class="font-medium">Thẻ:</span> 
                        @foreach(explode(',', $product->tags) as $tag)
                        <span class="text-blue-600 hover:underline cursor-pointer">{{ trim($tag) }}</span>{{ !$loop->last ? ', ' : '' }}
                        @endforeach
                    </p>
                    @endif
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Description -->
<section class="py-8 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Description -->
            <div class="lg:col-span-2">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 roboto-condensed">Mô tả</h2>
                    
                    <!-- Product Rating -->
                    <div class="flex items-center mb-4">
                        <div class="flex items-center">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star text-yellow-400"></i>
                            @endfor
                        </div>
                        <span class="ml-2 text-sm text-gray-600">5/5 - (1 bình chọn)</span>
                    </div>

                    <!-- Product Specifications -->
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Thương hiệu:</span>
                            <span class="text-gray-900">Daniel Wellington (DW)</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Xuất xứ:</span>
                            <span class="text-gray-900">Thụy Điển</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Danh mục:</span>
                            <span class="text-gray-900">{{ $category->name ?? 'N/A' }}</span>
                        </div>
                        @if($product->specifications)
                        @foreach(json_decode($product->specifications, true) ?? [] as $key => $value)
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">{{ $key }}:</span>
                            <span class="text-gray-900">{{ $value }}</span>
                        </div>
                        @endforeach
                        @endif
                </div>

                    <!-- Detailed Description -->
                    <div class="prose prose-sm max-w-none overflow-hidden">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Đánh giá chi tiết: {{ $product->name }}</h3>
                        
                        @if($product->description)
                        <div class="text-gray-700 mb-4 break-words overflow-hidden">
                            {!! \App\Helpers\ImageHelper::cleanDescription($product->description) !!}
                        </div>
                        @else
                        <p class="text-gray-700 mb-4">
                            {{ $product->name }} là một sản phẩm cao cấp từ thương hiệu Daniel Wellington, kết hợp giữa thiết kế hiện đại với chất liệu cao cấp.
                        </p>
                        @endif

                        <h4 class="text-md font-semibold text-gray-800 mb-2">Thông tin sản phẩm</h4>
                        <ul class="list-disc list-inside text-gray-700 mb-4 space-y-1">
                            <li><strong>Tên sản phẩm:</strong> {{ $product->name }}</li>
                            <li><strong>Danh mục:</strong> {{ $category->name ?? 'N/A' }}</li>
                            <li><strong>Giá gốc:</strong> {{ number_format($product->price, 0, ',', '.') }}₫</li>
                            @if($product->sale_price > 0)
                            <li><strong>Giá khuyến mãi:</strong> {{ number_format($product->sale_price, 0, ',', '.') }}₫</li>
                            <li><strong>Tiết kiệm:</strong> {{ number_format($product->price - $product->sale_price, 0, ',', '.') }}₫ ({{ $discount }}%)</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Shop Information -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 roboto-condensed border-b border-gray-200 pb-2">Địa chỉ Shop</h3>
                    <div class="space-y-3 text-sm">
                        <div>
                            <span class="font-medium text-gray-700">Thương hiệu:</span>
                            <span class="text-gray-900">Daniel Wellington</span>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Website:</span>
                            <a href="https://donghodanielwellington.vn/" class="text-blue-600 hover:underline">donghodanielwellington.vn</a>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Email:</span>
                            <span class="text-gray-900">cskh@donghodanielwellington.vn</span>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Hotline:</span>
                            <span class="text-gray-900">0978187088</span>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Địa chỉ:</span>
                            <span class="text-gray-900">590 Cách Mạng Tháng 8, Phường Nhiêu Lộc, Hồ Chí Minh. Số nhà 04 Lô B</span>
                            </div>
                            </div>
                        </div>

                <!-- Best Selling Products -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 roboto-condensed border-b border-gray-200 pb-2">Sản phẩm bán chạy</h3>
                    <div class="space-y-4">
                        @forelse($bestSellingProducts as $bestProduct)
                        <div class="group flex space-x-3 p-3 rounded-lg hover:bg-gray-50 transition-colors">
                            <a href="/san-pham/{{ $bestProduct->slug ?? $bestProduct->id }}" class="flex-shrink-0">
                                <div class="relative w-20 h-20 bg-gray-100 rounded-lg overflow-hidden">
                                    <img src="{{ $bestProduct->first_image_url }}" 
                                         alt="{{ $bestProduct->name }}" 
                                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                                         onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                                    @if($bestProduct->price > $bestProduct->sale_price && $bestProduct->sale_price > 0)
                                    <div class="absolute top-1 left-1 bg-red-500 text-white text-xs px-1 py-0.5 rounded">
                                        -{{ round((($bestProduct->price - $bestProduct->sale_price) / $bestProduct->price) * 100) }}%
                                    </div>
                                    @endif
                                    <div class="absolute top-1 right-1 bg-green-500 text-white text-xs px-1 py-0.5 rounded">
                                        HOT
                                    </div>
                                </div>
                            </a>
                            <div class="flex-1 min-w-0">
                                <a href="/san-pham/{{ $bestProduct->slug ?? $bestProduct->id }}" class="block">
                                    <h4 class="text-sm font-medium text-gray-900 mb-1 hover:text-blue-600 transition-colors line-clamp-2">
                                        {{ Str::limit($bestProduct->name, 60) }}
                                    </h4>
                                </a>
                                <div class="flex items-center space-x-2 mb-1">
                                    <span class="text-sm font-bold text-red-600">
                                        {{ number_format($bestProduct->sale_price > 0 ? $bestProduct->sale_price : $bestProduct->price, 0, ',', '.') }}₫
                                    </span>
                                    @if($bestProduct->price > $bestProduct->sale_price && $bestProduct->sale_price > 0)
                                    <span class="text-xs text-gray-500 line-through">
                                        {{ number_format($bestProduct->price, 0, ',', '.') }}₫
                                    </span>
                                    @endif
                                </div>
                                <div class="flex items-center space-x-1">
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    <span class="text-xs text-gray-500">Còn hàng</span>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="text-center py-8">
                            <svg class="w-12 h-12 text-gray-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                            <p class="text-gray-500 text-sm">Không có sản phẩm bán chạy</p>
                            <a href="/" class="text-blue-600 hover:text-blue-800 text-sm mt-2 inline-block">Xem tất cả sản phẩm</a>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products Section -->
@if($relatedProducts->isNotEmpty())
<section class="py-12 bg-gradient-to-br from-blue-50 to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 roboto-condensed">
                SẢN PHẨM TƯƠNG TỰ
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Khám phá thêm những sản phẩm đồng hồ cao cấp khác từ Daniel Wellington
            </p>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
            <div class="swiper related-products-swiper">
                <div class="swiper-wrapper">
                    @foreach($relatedProducts as $index => $relatedProduct)
                    <div class="swiper-slide">
                        <div class="group">
                            <a href="/san-pham/{{ $relatedProduct->slug ?? $relatedProduct->id }}" class="block">
                                <div class="relative bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 overflow-hidden border border-gray-100 h-[380px] flex flex-col">
                                    <!-- Discount Badge -->
                                    @if($relatedProduct->price > $relatedProduct->sale_price && $relatedProduct->sale_price > 0)
                                    <div class="absolute top-4 left-4 z-20">
                                        <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow-lg">
                                            -{{ round((($relatedProduct->price - $relatedProduct->sale_price) / $relatedProduct->price) * 100) }}%
                                        </div>
                                    </div>
                                    @endif

                                    <!-- Related Badge -->
                                    <div class="absolute top-4 right-4 z-20">
                                        <div class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg">
                                            LIÊN QUAN
                                        </div>
                                    </div>

                                    <!-- Product Image Container -->
                                    <div class="relative h-44 bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center p-4 overflow-hidden flex-shrink-0">
                                        <img src="{{ $relatedProduct->first_image_url }}"
                                            alt="{{ $relatedProduct->name }}"
                                            class="relative z-10 max-w-full max-h-full object-contain transform group-hover:scale-110 transition-transform duration-500"
                                            onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                                    </div>

                                    <!-- Product Details -->
                                    <div class="p-3 space-y-2 flex-1 flex flex-col justify-between">
                                        <!-- Product Name -->
                                        <h3 class="text-sm font-bold text-gray-900 leading-tight group-hover:text-blue-600 transition-colors duration-300 h-10 overflow-hidden" title="{{ $relatedProduct->name }}">
                                            {{ Str::limit($relatedProduct->name, 35) }}
                                        </h3>
                                        
                                        <!-- Product Specification -->
                                        @if(explode(' - ', $relatedProduct->description)[1] ?? '')
                                        <p class="text-xs text-gray-500 font-medium">
                                            {{ explode(' - ', $relatedProduct->description)[1] }}
                                        </p>
                                        @endif
                                        
                                        <!-- Pricing -->
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                @if($relatedProduct->price > $relatedProduct->sale_price && $relatedProduct->sale_price > 0)
                                                <span class="text-sm text-gray-400 line-through">
                                                    {{ number_format($relatedProduct->price, 0, ',', '.') }}₫
                                                </span>
                                                @endif
                                                <span class="text-lg font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                                                    {{ number_format($relatedProduct->sale_price > 0 ? $relatedProduct->sale_price : $relatedProduct->price, 0, ',', '.') }}₫
                                                </span>
                                            </div>
                                            
                                            <!-- Stock Indicator -->
                                            <div class="flex items-center space-x-1">
                                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                                <span class="text-xs text-gray-500">Còn hàng</span>
                                            </div>
                                        </div>
                                        
                                        <!-- Add to Cart Button -->
                                        <button onclick="addToCart({{ $relatedProduct->id }})" class="w-full mt-auto px-3 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg text-xs">
                                            <span class="flex items-center justify-center space-x-2">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-8">
            <a href="/"
                class="inline-flex items-center space-x-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-lg font-semibold text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <span>Xem tất cả sản phẩm</span>
                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
            </a>
        </div>
    </div>
</section>
@endif

@endsection

@push('styles')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
/* Fix for Filament content overflow */
.prose {
    max-width: 100% !important;
}

.prose img {
    max-width: 100% !important;
    height: auto !important;
    border-radius: 8px;
    margin: 1rem 0;
}

.prose p {
    word-wrap: break-word;
    overflow-wrap: break-word;
    hyphens: auto;
}

.prose pre {
    white-space: pre-wrap;
    word-wrap: break-word;
    overflow-x: auto;
    max-width: 100%;
}

.prose code {
    word-wrap: break-word;
    overflow-wrap: break-word;
}

/* Ensure content doesn't overflow */
.prose * {
    max-width: 100% !important;
}

/* Fix for base64 images */
.prose img[src^="data:image"] {
    max-width: 100% !important;
    height: auto !important;
    display: block;
    margin: 1rem auto;
}

/* Responsive layout fixes */
@media (max-width: 768px) {
    .prose {
        font-size: 14px;
    }
    
    .prose h3 {
        font-size: 18px;
    }
    
    .prose h4 {
        font-size: 16px;
    }
    
    .prose img {
        max-width: 100% !important;
        height: auto !important;
    }
}

/* Ensure no horizontal scroll but keep container */
body {
    overflow-x: hidden;
}

/* Keep container width but prevent overflow */
.max-w-7xl {
    max-width: 80rem; /* Keep original max-width */
    overflow-x: hidden;
}

/* Ensure content within container doesn't overflow */
.prose {
    max-width: 100%;
    overflow-x: hidden;
}

/* Line clamp utility */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Enhanced hover effects */
.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}

/* Smooth transitions */
.transition-all {
    transition: all 0.3s ease;
}

/* Enhanced shadows */
.shadow-md {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.shadow-lg {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.shadow-xl {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Ensure container is visible and properly sized */
.max-w-7xl {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 1rem;
    padding-right: 1rem;
}

@media (min-width: 640px) {
    .max-w-7xl {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
}

@media (min-width: 1024px) {
    .max-w-7xl {
        padding-left: 2rem;
        padding-right: 2rem;
    }
}

/* Swiper Related Products Styles */
.related-products-swiper {
    width: 100%;
    height: auto;
    padding: 0 20px;
}

.related-products-swiper .swiper-slide {
    height: auto;
    display: flex;
    align-items: stretch;
}

.related-products-swiper .swiper-slide > div {
    width: 100%;
    height: 100%;
}

/* Navigation buttons */
.swiper-button-prev,
.swiper-button-next {
    color: #3b82f6 !important;
    background: white;
    border-radius: 50%;
    width: 50px !important;
    height: 50px !important;
    margin-top: -25px !important;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.swiper-button-prev:hover,
.swiper-button-next:hover {
    background: #f8fafc;
    transform: scale(1.1);
}

.swiper-button-prev:after,
.swiper-button-next:after {
    font-size: 20px !important;
    font-weight: bold;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .related-products-swiper {
        padding: 0 10px;
    }
    
    .swiper-button-prev,
    .swiper-button-next {
        width: 40px !important;
        height: 40px !important;
        margin-top: -20px !important;
    }
    
    .swiper-button-prev:after,
    .swiper-button-next:after {
        font-size: 16px !important;
    }
}
</style>
@endpush

@push('scripts')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
// Product ID for cart functionality
const productId = {{ $product->id ?? 0 }};
console.log('Product data:', { 
    id: {{ $product->id ?? 'null' }}, 
    name: '{{ $product->name ?? 'null' }}', 
    slug: '{{ $product->slug ?? 'null' }}',
    idType: typeof {{ $product->id ?? 'null' }}
});
console.log('ProductId for cart:', productId, 'type:', typeof productId);
console.log('ProductId validation:', { 
    isNull: productId === null, 
    isUndefined: productId === undefined, 
    isZero: productId === 0,
    isNaN: isNaN(productId),
    isFalsy: !productId
});
// Initialize Related Products Swiper
document.addEventListener('DOMContentLoaded', function() {
    // Wait a bit to ensure DOM is fully loaded
    setTimeout(function() {
        const swiperContainer = document.querySelector('.related-products-swiper');
        if (swiperContainer) {
            console.log('Initializing Related Products Swiper...');
            
            const relatedProductsSwiper = new Swiper('.related-products-swiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 15,
                    },
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 20,
                    },
                },
                on: {
                    init: function () {
                        console.log('Swiper initialized with', this.slides.length, 'slides');
                        console.log('Current slidesPerView:', this.params.slidesPerView);
                    },
                    breakpoint: function (swiper, breakpointParams) {
                        console.log('Breakpoint changed:', breakpointParams);
                    }
                }
            });
            
            console.log('Related Products Swiper created:', relatedProductsSwiper);
        } else {
            console.error('Swiper container not found!');
        }
    }, 100);
});

// Quantity management
function increaseQuantity() {
    const quantityInput = document.getElementById('quantity');
    const currentValue = parseInt(quantityInput.value);
    if (currentValue < 10) {
        quantityInput.value = currentValue + 1;
    }
}

function decreaseQuantity() {
    const quantityInput = document.getElementById('quantity');
    const currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
}

// Image gallery functionality
function changeMainImage(imageSrc, thumbnail) {
    const mainImage = document.getElementById('mainImage');
    mainImage.src = imageSrc;
    
    // Update thumbnail borders
    const thumbnails = document.querySelectorAll('.aspect-square');
    thumbnails.forEach(thumb => thumb.classList.remove('border-blue-500'));
    thumbnails.forEach(thumb => thumb.classList.add('border-gray-200'));
    
    thumbnail.classList.remove('border-gray-200');
    thumbnail.classList.add('border-blue-500');
}

// Add to cart functionality is handled by global function in app.blade.php

// Notification system
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full ${
        type === 'success' ? 'bg-green-500 text-white' : 
        type === 'error' ? 'bg-red-500 text-white' : 
        'bg-blue-500 text-white'
    }`;
    notification.innerHTML = `
        <div class="flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>${message}</span>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.classList.remove('translate-x-full');
    }, 100);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        notification.classList.add('translate-x-full');
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 300);
    }, 3000);
}

// Image modal functionality
function openImageModal() {
    const mainImage = document.getElementById('mainImage');
    const modal = document.createElement('div');
    modal.className = 'fixed inset-0 z-50 bg-black bg-opacity-75 flex items-center justify-center p-4';
    modal.innerHTML = `
        <div class="relative max-w-4xl max-h-full">
            <img src="${mainImage.src}" alt="${mainImage.alt}" class="max-w-full max-h-full object-contain">
            <button onclick="this.parentElement.parentElement.remove()" class="absolute top-4 right-4 text-white bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    `;
    
    document.body.appendChild(modal);
    
    // Close on click outside
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.remove();
        }
    });
    
    // Close on escape key
    document.addEventListener('keydown', function escapeHandler(e) {
        if (e.key === 'Escape') {
            modal.remove();
            document.removeEventListener('keydown', escapeHandler);
        }
    });
}
</script>
@endpush
