@extends('layouts.app')

@section('title', ($category->name ?? 'Danh mục') . ' - Daniel Wellington Vietnam')

@section('content')
<!-- Hero Section with Gradient Background -->
<div class="relative bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="/" class="text-slate-500 hover:text-slate-700 transition-colors duration-200 font-medium">TRANG CHỦ</a>
                </li>
                <li class="text-slate-400">/</li>
                <li class="text-slate-900 font-semibold">{{ $category->name ?? 'Danh mục' }}</li>
            </ol>
        </nav>

        <!-- Category Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl mb-6 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl pt-3 font-bold bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 bg-clip-text text-transparent mb-6">
                {{ $category->name ?? 'Danh mục sản phẩm' }}
            </h1>
            <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed text-lg">
                {{ $category->description ?? 'Khám phá bộ sưu tập đồng hồ cao cấp từ Daniel Wellington. Thiết kế tối giản, đa dạng dây đeo và phong cách hiện đại phù hợp với mọi phong cách thời trang.' }}
            </p>
        </div>

        <!-- Enhanced Filter and Sort Bar -->
        <div class="bg-white/90 backdrop-blur-md rounded-3xl p-8 shadow-xl border border-white/30">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6">
                <!-- Results Count with Enhanced Design -->
                <div class="flex items-center space-x-3">
                    <div class="flex items-center space-x-2 bg-gradient-to-r from-blue-50 to-indigo-50 px-4 py-2 rounded-2xl border border-blue-100">
                        <div class="w-3 h-3 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full animate-pulse"></div>
                        <span class="text-sm text-slate-700 font-semibold">
                            Hiển thị {{ $products->firstItem() ?? 0 }}-{{ $products->lastItem() ?? 0 }} của {{ $totalProducts }} kết quả
                        </span>
                    </div>
                </div>

                <!-- Enhanced Sort Section -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <div class="flex items-center space-x-3">
                        <svg class="w-5 h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                        </svg>
                        <label for="sort" class="text-sm font-bold text-slate-800">Sắp xếp theo:</label>
                    </div>
                    
                    <div class="relative group">
                        <select id="sort" name="sort" class="appearance-none bg-white border-2 border-slate-200 rounded-2xl px-6 py-3 text-sm font-semibold text-slate-700 focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-300 cursor-pointer pr-12 shadow-sm hover:shadow-md min-w-[200px]">
                            <option value="newest" {{ $sortBy == 'newest' ? 'selected' : '' }}>Mới nhất</option>
                            <option value="oldest" {{ $sortBy == 'oldest' ? 'selected' : '' }}>Cũ nhất</option>
                            <option value="price_asc" {{ $sortBy == 'price_asc' ? 'selected' : '' }}>Giá thấp đến cao</option>
                            <option value="price_desc" {{ $sortBy == 'price_desc' ? 'selected' : '' }}>Giá cao đến thấp</option>
                            <option value="name_asc" {{ $sortBy == 'name_asc' ? 'selected' : '' }}>Tên A-Z</option>
                            <option value="name_desc" {{ $sortBy == 'name_desc' ? 'selected' : '' }}>Tên Z-A</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                            <svg class="w-5 h-5 text-slate-500 group-hover:text-blue-500 transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products Grid -->
<div class="bg-gradient-to-br from-slate-50 to-blue-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($products->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4 gap-10">
            @foreach($products as $index => $product)
            <div class="group scroll-reveal" data-delay="{{ $index * 100 }}">
                <a href="/san-pham/{{ $product->slug ?? $product->id }}" class="block">
                    <div class="relative bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-slate-100 h-[580px] flex flex-col backdrop-blur-sm">
                        <!-- Discount Badge -->
                        @if($product->price > $product->sale_price && $product->sale_price > 0)
                        <div class="absolute top-5 left-5 z-20">
                            <div class="bg-gradient-to-r from-red-500 via-pink-500 to-rose-500 text-white text-sm font-bold px-4 py-2 rounded-2xl shadow-xl animate-pulse">
                                -{{ round((($product->price - $product->sale_price) / $product->price) * 100) }}%
                            </div>
                        </div>
                        @endif

                        <!-- Category Badge -->
                        <div class="absolute top-5 right-5 z-20">
                            <div class="bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 text-white text-xs font-bold px-3 py-1.5 rounded-xl shadow-lg">
                                {{ $product->category->name ?? 'SẢN PHẨM' }}
                            </div>
                        </div>

                        <!-- Product Image Container -->
                        <div class="relative h-72 bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 flex items-center justify-center p-10 overflow-hidden flex-shrink-0">
                            <!-- Background Pattern -->
                            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%23E2E8F0" fill-opacity="0.3"%3E%3Ccircle cx="20" cy="20" r="1"/%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
                            
                            @php
                                $productImage = 'DW00100699-247x296.webp';
                                if ($product->images && is_array($product->images) && count($product->images) > 0) {
                                    $productImage = $product->images[0];
                                }
                            @endphp
                            <img src="{{ asset('img/' . $productImage) }}"
                                alt="{{ $product->name }}"
                                class="relative z-10 max-w-full max-h-full object-contain transform group-hover:scale-110 transition-all duration-700 ease-out"
                                onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                            
                            <!-- Hover Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-600/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>

                        <!-- Product Details -->
                        <div class="p-6 space-y-4 flex-1 flex flex-col justify-between">
                            <!-- Product Name -->
                            <div>
                                <h3 class="text-lg font-bold text-slate-900 leading-tight group-hover:text-blue-600 transition-colors duration-300 mb-2" title="{{ $product->name }}">
                                    {{ Str::limit($product->name, 50) }}
                                </h3>
                                
                                <!-- Product Specification and Stock -->
                                <div class="flex items-center justify-between">
                                    @if(explode(' - ', $product->description)[1] ?? '')
                                    <p class="text-sm text-slate-500 font-medium bg-slate-50 px-3 py-1.5 rounded-lg">
                                        {{ explode(' - ', $product->description)[1] }}
                                    </p>
                                    @endif
                                    
                                    <!-- Stock Indicator -->
                                    <div class="flex items-center space-x-2 bg-green-50 px-3 py-1.5 rounded-full">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="text-xs text-green-700 font-medium">Còn hàng</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Pricing -->
                            <div class="flex items-center space-x-2">
                                @if($product->price > $product->sale_price && $product->sale_price > 0)
                                <span class="text-sm text-slate-400 line-through font-medium">
                                    {{ number_format($product->price, 0, ',', '.') }}₫
                                </span>
                                @endif
                                <span class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600">
                                    {{ number_format($product->sale_price > 0 ? $product->sale_price : $product->price, 0, ',', '.') }}₫
                                </span>
                            </div>
                            
                            <!-- Add to Cart Button -->
                            <button onclick="addToCart({{ $product->id }})" class="w-full mt-auto px-6 py-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white font-bold rounded-2xl hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-sm relative overflow-hidden group/btn">
                                <!-- Button Background Animation -->
                                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-blue-600 to-indigo-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-300"></div>
                                
                                <span class="relative flex items-center justify-center space-x-2">
                                    <svg class="w-5 h-5 transition-transform duration-300 group-hover/btn:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                                    </svg>
                                    <span>THÊM VÀO GIỎ HÀNG</span>
                                </span>
                            </button>
                        </div>

                        <!-- Card Border Glow Effect -->
                        <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-blue-500/20 via-indigo-500/20 to-purple-500/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($products->hasPages())
        <div class="mt-16 flex justify-center">
            <nav class="flex items-center space-x-3 bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg border border-white/20">
                <!-- Previous Page -->
                @if($products->onFirstPage())
                <span class="px-4 py-3 text-slate-400 bg-slate-100 rounded-xl cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </span>
                @else
                <a href="{{ $products->previousPageUrl() }}" class="px-4 py-3 text-slate-600 bg-white border-2 border-slate-200 rounded-xl hover:bg-slate-50 hover:border-blue-300 transition-all duration-200 shadow-sm hover:shadow-md">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
                @endif

                <!-- Page Numbers -->
                @foreach($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                @if($page == $products->currentPage())
                <span class="px-5 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-bold shadow-lg">{{ $page }}</span>
                @else
                <a href="{{ $url }}" class="px-5 py-3 text-slate-600 bg-white border-2 border-slate-200 rounded-xl hover:bg-slate-50 hover:border-blue-300 transition-all duration-200 shadow-sm hover:shadow-md font-medium">{{ $page }}</a>
                @endif
                @endforeach

                <!-- Next Page -->
                @if($products->hasMorePages())
                <a href="{{ $products->nextPageUrl() }}" class="px-4 py-3 text-slate-600 bg-white border-2 border-slate-200 rounded-xl hover:bg-slate-50 hover:border-blue-300 transition-all duration-200 shadow-sm hover:shadow-md">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
                @else
                <span class="px-4 py-3 text-slate-400 bg-slate-100 rounded-xl cursor-not-allowed">
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
        <div class="text-center py-20">
            <div class="relative">
                <!-- Background Decoration -->
                <div class="absolute inset-0 bg-gradient-to-r from-blue-100 via-indigo-100 to-purple-100 rounded-3xl opacity-50"></div>
                
                <div class="relative bg-white/80 backdrop-blur-sm rounded-3xl p-12 shadow-xl border border-white/20 max-w-md mx-auto">
                    <!-- Icon -->
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl mb-8 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Không có sản phẩm nào</h3>
                    <p class="text-slate-600 mb-8 leading-relaxed">Hiện tại chưa có sản phẩm nào trong danh mục này. Hãy quay lại sau để xem các sản phẩm mới!</p>
                    
                    <a href="/" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white font-bold rounded-2xl hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Về trang chủ
                    </a>
                </div>
            </div>
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
    transform: translateY(40px) scale(0.95);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

.scroll-reveal.revealed {
    opacity: 1;
    transform: translateY(0) scale(1);
}

/* Line clamp utility */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Enhanced hover effects */
.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}

/* Smooth transitions */
.transition-all {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
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

/* Custom gradient animations */
@keyframes gradient-shift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.animate-gradient {
    background-size: 200% 200%;
    animation: gradient-shift 3s ease infinite;
}

/* Glass morphism effect */
.glass {
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.18);
}

/* Floating animation */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

.animate-float {
    animation: float 3s ease-in-out infinite;
}

/* Pulse glow effect */
@keyframes pulse-glow {
    0%, 100% { box-shadow: 0 0 5px rgba(59, 130, 246, 0.5); }
    50% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.8), 0 0 30px rgba(59, 130, 246, 0.6); }
}

.animate-pulse-glow {
    animation: pulse-glow 2s ease-in-out infinite;
}

/* Custom scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 4px;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, #3b82f6, #6366f1);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, #2563eb, #4f46e5);
}

/* Text gradient */
.text-gradient {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

/* Button hover effects */
.btn-hover-lift {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.btn-hover-lift:hover {
    transform: translateY(-2px);
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

/* Card hover effects */
.card-hover {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.card-hover:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Loading shimmer effect */
@keyframes shimmer {
    0% { background-position: -200px 0; }
    100% { background-position: calc(200px + 100%) 0; }
}

.shimmer {
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200px 100%;
    animation: shimmer 1.5s infinite;
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
