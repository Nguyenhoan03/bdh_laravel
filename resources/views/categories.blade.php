@extends('layouts.app')

@section('title', 'Danh mục sản phẩm - Daniel Wellington Vietnam')

@section('content')
<!-- Breadcrumb -->
<div class="bg-gray-50 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="/" class="text-gray-500 hover:text-gray-700 transition-colors">TRANG CHỦ</a>
                </li>
                <li class="text-gray-400">/</li>
                <li class="text-gray-900 font-medium">DANH MỤC SẢN PHẨM</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Categories Header -->
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl pt-2 font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 uppercase tracking-wide roboto-condensed mb-6">
                Danh mục sản phẩm
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Khám phá bộ sưu tập đồng hồ cao cấp từ Daniel Wellington. Thiết kế tối giản, đa dạng dây đeo và phong cách hiện đại phù hợp với mọi phong cách thời trang.
            </p>
        </div>

        <!-- Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($categories as $index => $category)
            <div class="group scroll-reveal" data-delay="{{ $index * 100 }}">
                <a href="/danh-muc/{{ $category->slug }}" class="block">
                    <div class="relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-100 h-80 flex flex-col">
                        <!-- Category Image Background -->
                        <div class="relative h-48 flex items-center justify-center overflow-hidden
                            @if(str_contains(strtolower($category->name), 'nữ')) bg-gradient-to-br from-pink-50 to-rose-50
                            @elseif(str_contains(strtolower($category->name), 'nam')) bg-gradient-to-br from-blue-50 to-indigo-50
                            @elseif(str_contains(strtolower($category->name), 'cặp')) bg-gradient-to-br from-red-50 to-pink-50
                            @elseif(str_contains(strtolower($category->name), 'dây')) bg-gradient-to-br from-purple-50 to-violet-50
                            @elseif(str_contains(strtolower($category->name), 'trang sức')) bg-gradient-to-br from-yellow-50 to-amber-50
                            @else bg-gradient-to-br from-blue-50 to-purple-50 @endif">
                            <!-- Decorative Pattern -->
                            <div class="absolute inset-0 opacity-10">
                                <svg class="w-full h-full" viewBox="0 0 100 100" fill="none">
                                    <circle cx="20" cy="20" r="2" fill="currentColor" 
                                        @if(str_contains(strtolower($category->name), 'nữ')) class="text-pink-600"
                                        @elseif(str_contains(strtolower($category->name), 'nam')) class="text-blue-600"
                                        @elseif(str_contains(strtolower($category->name), 'cặp')) class="text-red-600"
                                        @elseif(str_contains(strtolower($category->name), 'dây')) class="text-purple-600"
                                        @elseif(str_contains(strtolower($category->name), 'trang sức')) class="text-yellow-600"
                                        @else class="text-blue-600" @endif/>
                                    <circle cx="80" cy="20" r="2" fill="currentColor" 
                                        @if(str_contains(strtolower($category->name), 'nữ')) class="text-rose-600"
                                        @elseif(str_contains(strtolower($category->name), 'nam')) class="text-indigo-600"
                                        @elseif(str_contains(strtolower($category->name), 'cặp')) class="text-pink-600"
                                        @elseif(str_contains(strtolower($category->name), 'dây')) class="text-violet-600"
                                        @elseif(str_contains(strtolower($category->name), 'trang sức')) class="text-amber-600"
                                        @else class="text-purple-600" @endif/>
                                    <circle cx="20" cy="80" r="2" fill="currentColor" 
                                        @if(str_contains(strtolower($category->name), 'nữ')) class="text-rose-600"
                                        @elseif(str_contains(strtolower($category->name), 'nam')) class="text-indigo-600"
                                        @elseif(str_contains(strtolower($category->name), 'cặp')) class="text-pink-600"
                                        @elseif(str_contains(strtolower($category->name), 'dây')) class="text-violet-600"
                                        @elseif(str_contains(strtolower($category->name), 'trang sức')) class="text-amber-600"
                                        @else class="text-purple-600" @endif/>
                                    <circle cx="80" cy="80" r="2" fill="currentColor" 
                                        @if(str_contains(strtolower($category->name), 'nữ')) class="text-pink-600"
                                        @elseif(str_contains(strtolower($category->name), 'nam')) class="text-blue-600"
                                        @elseif(str_contains(strtolower($category->name), 'cặp')) class="text-red-600"
                                        @elseif(str_contains(strtolower($category->name), 'dây')) class="text-purple-600"
                                        @elseif(str_contains(strtolower($category->name), 'trang sức')) class="text-yellow-600"
                                        @else class="text-blue-600" @endif/>
                                    <circle cx="50" cy="50" r="3" fill="currentColor" 
                                        @if(str_contains(strtolower($category->name), 'nữ')) class="text-pink-400"
                                        @elseif(str_contains(strtolower($category->name), 'nam')) class="text-blue-400"
                                        @elseif(str_contains(strtolower($category->name), 'cặp')) class="text-red-400"
                                        @elseif(str_contains(strtolower($category->name), 'dây')) class="text-purple-400"
                                        @elseif(str_contains(strtolower($category->name), 'trang sức')) class="text-yellow-400"
                                        @else class="text-blue-400" @endif/>
                                </svg>
                            </div>
                            
                            <!-- Category Icon -->
                            <div class="relative z-10 text-5xl opacity-30">
                                @if(str_contains(strtolower($category->name), 'nữ'))
                                    <i class="fas fa-heart text-pink-400"></i>
                                @elseif(str_contains(strtolower($category->name), 'nam'))
                                    <i class="fas fa-user-tie text-blue-400"></i>
                                @elseif(str_contains(strtolower($category->name), 'cặp'))
                                    <i class="fas fa-heart text-red-400"></i>
                                @elseif(str_contains(strtolower($category->name), 'dây'))
                                    <i class="fas fa-link text-purple-400"></i>
                                @elseif(str_contains(strtolower($category->name), 'trang sức'))
                                    <i class="fas fa-gem text-yellow-400"></i>
                                @else
                                    <i class="fas fa-clock text-blue-400"></i>
                                @endif
                            </div>
                        </div>

                        <!-- Category Details -->
                        <div class="p-6 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                                    {{ $category->name }}
                                </h3>
                                <p class="text-gray-600 leading-relaxed">
                                    {{ $category->description ?? 'Khám phá bộ sưu tập đồng hồ cao cấp từ Daniel Wellington với thiết kế tối giản và phong cách hiện đại.' }}
                                </p>
                            </div>
                            
                            <!-- Product Count -->
                            <div class="mt-4 flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    <span class="text-sm text-gray-500">
                                        {{ \App\Models\Product::where('category_id', $category->id)->where('is_active', true)->count() }} sản phẩm
                                    </span>
                                </div>
                                <div class="text-blue-600 group-hover:text-blue-800 transition-colors">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Hover Effect Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Featured Products Section -->
@if($featuredProducts->count() > 0)
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 roboto-condensed">
                Sản phẩm nổi bật
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Những sản phẩm được yêu thích nhất từ bộ sưu tập Daniel Wellington
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @foreach($featuredProducts as $index => $product)
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
                        @endif

                        <!-- Featured Badge -->
                        <div class="absolute top-4 right-4 z-20">
                            <div class="bg-gradient-to-r from-yellow-500 to-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg">
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
                            <div class="h-12 overflow-hidden">
                                <h3 class="text-base font-bold text-gray-900 leading-tight group-hover:text-blue-600 transition-colors duration-300 mb-1" title="{{ $product->name }}">
                                    {{ Str::limit($mainName, 30) }}
                                </h3>
                                @if($subName)
                                <p class="text-sm text-gray-600 font-medium">
                                    {{ Str::limit($subName, 25) }}
                                </p>
                                @endif
                            </div>
                            
                            <!-- Stock Indicator -->
                            <div class="flex items-center justify-end">
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
            @endforeach
        </div>
    </div>
</div>
@endif
@endsection

@push('styles')
<style>
/* Scroll reveal animation */
.scroll-reveal {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
}

.scroll-reveal.revealed {
    opacity: 1;
    transform: translateY(0);
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

.shadow-2xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll reveal animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.scroll-reveal').forEach(el => {
        observer.observe(el);
    });
});
</script>
@endpush
