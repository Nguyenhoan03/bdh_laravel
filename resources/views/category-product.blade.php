@extends('layouts.app')

@section('title', ($category->name ?? 'Danh mục') . ' - Daniel Wellington Vietnam')

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
                <li class="text-gray-900 font-medium">{{ $category->name ?? 'Danh mục' }}</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Category Header -->
<div class="bg-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 roboto-condensed">
                {{ $category->name ?? 'Danh mục sản phẩm' }}
            </h1>
            <p class="text-gray-600 max-w-3xl mx-auto leading-relaxed">
                {{ $category->description ?? 'Khám phá bộ sưu tập đồng hồ cao cấp từ Daniel Wellington. Thiết kế tối giản, đa dạng dây đeo và phong cách hiện đại phù hợp với mọi phong cách thời trang.' }}
            </p>
        </div>

        <!-- Filter and Sort Bar -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
            <!-- Results Count -->
            <div class="text-sm text-gray-600">
                Hiển thị {{ $products->firstItem() ?? 0 }}-{{ $products->lastItem() ?? 0 }} của {{ $totalProducts }} kết quả
            </div>

            <!-- Sort Dropdown -->
            <div class="flex items-center space-x-4">
                <label for="sort" class="text-sm font-medium text-gray-700">Sắp xếp theo:</label>
                <select id="sort" name="sort" class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="newest" {{ $sortBy == 'newest' ? 'selected' : '' }}>Mới nhất</option>
                    <option value="oldest" {{ $sortBy == 'oldest' ? 'selected' : '' }}>Cũ nhất</option>
                    <option value="price_asc" {{ $sortBy == 'price_asc' ? 'selected' : '' }}>Giá thấp đến cao</option>
                    <option value="price_desc" {{ $sortBy == 'price_desc' ? 'selected' : '' }}>Giá cao đến thấp</option>
                    <option value="name_asc" {{ $sortBy == 'name_asc' ? 'selected' : '' }}>Tên A-Z</option>
                    <option value="name_desc" {{ $sortBy == 'name_desc' ? 'selected' : '' }}>Tên Z-A</option>
                </select>
            </div>
        </div>
    </div>
</div>

<!-- Products Grid -->
<div class="bg-gray-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($products->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 gap-6">
            @foreach($products as $index => $product)
            <div class="group scroll-reveal" data-delay="{{ $index * 100 }}">
                <a href="/san-pham/{{ $product->slug ?? $product->id }}" class="block">
                    <div class="relative bg-white rounded-xl shadow-md hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1 overflow-hidden border border-gray-100 h-[480px] flex flex-col">
                        <!-- Discount Badge -->
                        @if($product->price > $product->sale_price && $product->sale_price > 0)
                        <div class="absolute top-4 left-4 z-20">
                            <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-bold px-3 py-1.5 rounded-full shadow-lg">
                                -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                            </div>
                        </div>
                        @endif

                        <!-- Category Badge -->
                        <div class="absolute top-4 right-4 z-20">
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg">
                                {{ $product->category->name ?? 'SẢN PHẨM' }}
                            </div>
                        </div>

                        <!-- Product Image Container -->
                        <div class="relative h-56 bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center p-6 overflow-hidden flex-shrink-0">
                            @php
                                $productImage = 'DW00100699-247x296.webp';
                                if ($product->images && is_array($product->images) && count($product->images) > 0) {
                                    $productImage = $product->images[0];
                                }
                            @endphp
                            <img src="{{ asset('img/' . $productImage) }}"
                                alt="{{ $product->name }}"
                                class="relative z-10 max-w-full max-h-full object-contain transform group-hover:scale-110 transition-transform duration-500"
                                onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                        </div>

                        <!-- Product Details -->
                        <div class="p-4 space-y-3 flex-1 flex flex-col justify-between">
                            <!-- Product Name -->
                            <h3 class="text-base font-bold text-gray-900 leading-tight group-hover:text-blue-600 transition-colors duration-300 h-14 overflow-hidden" title="{{ $product->name }}">
                                {{ Str::limit($product->name, 60) }}
                            </h3>
                            
                            <!-- Product Specification -->
                            @if(explode(' - ', $product->description)[1] ?? '')
                            <p class="text-sm text-gray-500 font-medium">
                                {{ explode(' - ', $product->description)[1] }}
                            </p>
                            @endif
                            
                            <!-- Pricing -->
                            <div class="flex items-center justify-between">
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
                                
                                <!-- Stock Indicator -->
                                <div class="flex items-center space-x-1">
                                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                    <span class="text-xs text-gray-500">Còn hàng</span>
                                </div>
                            </div>
                            
                            <!-- Add to Cart Button -->
                            <button class="w-full mt-auto px-4 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg text-sm">
                                <span class="flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                                    </svg>
                                    <span>THÊM GIỎ HÀNG</span>
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

        <!-- Pagination -->
        @if($products->hasPages())
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center space-x-2">
                <!-- Previous Page -->
                @if($products->onFirstPage())
                <span class="px-3 py-2 text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </span>
                @else
                <a href="{{ $products->previousPageUrl() }}" class="px-3 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                @endif

                <!-- Page Numbers -->
                @foreach($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                @if($page == $products->currentPage())
                <span class="px-4 py-2 bg-blue-600 text-white rounded-lg font-medium">{{ $page }}</span>
                @else
                <a href="{{ $url }}" class="px-4 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">{{ $page }}</a>
                @endif
                @endforeach

                <!-- Next Page -->
                @if($products->hasMorePages())
                <a href="{{ $products->nextPageUrl() }}" class="px-3 py-2 text-gray-600 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @else
                <span class="px-3 py-2 text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </span>
                @endif
            </nav>
        </div>
        @endif

        @else
        <!-- Empty State -->
        <div class="text-center py-16">
            <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
            </svg>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Không có sản phẩm nào</h3>
            <p class="text-gray-600 mb-6">Hiện tại chưa có sản phẩm nào trong danh mục này.</p>
            <a href="/" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-lg hover:from-blue-700 hover:to-purple-700 transition-all duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Về trang chủ
            </a>
        </div>
        @endif
    </div>
</div>
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
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sort functionality
    const sortSelect = document.getElementById('sort');
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            const currentUrl = new URL(window.location);
            currentUrl.searchParams.set('sort', this.value);
            window.location.href = currentUrl.toString();
        });
    }

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
