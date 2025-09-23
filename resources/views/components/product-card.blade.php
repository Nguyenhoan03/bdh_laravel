@props([
    'name' => '',
    'spec' => '',
    'originalPrice' => '',
    'price' => '',
    'discount' => '',
    'image' => 'DW00100699-247x296.webp',
    'size' => 'normal',
    'productId' => null,
    'slug' => ''
])

<div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 h-full flex flex-col hover:-translate-y-1 hover:shadow-lg">
    <!-- Discount Badge -->
    @if($discount)
    <div class="relative">
        <div class="absolute top-2 left-2 z-10">
            <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-2 py-1 rounded-md shadow-lg animate-pulse">{{ $discount }}</span>
        </div>
    @endif
        
        <!-- Product Image -->
        <div class="aspect-square bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center p-4 relative overflow-hidden">
            <img src="{{ $image }}" 
                 alt="{{ $name }}" 
                 class="max-w-full max-h-full object-contain transition-transform duration-300 hover:scale-105"
                 onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
            <!-- Hover overlay -->
            <div class="absolute inset-0 bg-gradient-to-t from-blue-600/10 via-transparent to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
        </div>
    @if($discount)
    </div>
    @endif
    
    <!-- Product Details -->
    <div class="p-4 space-y-3 flex-1 flex flex-col justify-between">
        <!-- Product Info Section -->
        <div class="space-y-2">
            <!-- Product Name -->
            @php
                $nameParts = explode(' - ', $name);
                $mainName = $nameParts[0] ?? $name;
                $subName = isset($nameParts[1]) ? $nameParts[1] : '';
            @endphp
            <h3 class="text-sm text-center font-medium text-gray-900 leading-tight hover:text-blue-600 transition-colors duration-300" title="{{ $name }}">
                {{ Str::limit($mainName, 30) }}
            </h3>
            
            <!-- Sub Name and Stock Indicator -->
            <div class="flex items-center justify-between pt-2">
                @if($subName)
                <p class="text-xs text-gray-600 font-medium">
                    {{ Str::limit($subName, 20) }}
                </p>
                @endif
                
                <!-- Stock Indicator -->
                <div class="flex items-center space-x-2 bg-green-50 px-3 py-1.5 rounded-full">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="text-xs text-green-700 font-medium">Còn hàng</span>
                </div>
            </div>
        </div>
        
        <!-- Pricing Section -->
        <div class="flex items-center justify-center space-x-2 min-h-[2rem]">
            @if($originalPrice && $originalPrice !== $price)
            <!-- Original Price (Crossed out) -->
            <span class="text-sm text-gray-400 line-through font-medium">
                {{ $originalPrice }}
            </span>
            @endif
            
            <!-- Current Price -->
            <span class="text-lg font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-red-500">
                {{ $price }}
            </span>
        </div>
        
        <!-- Add to Cart Button -->
        @if($productId && $productId > 0)
        <button onclick="addToCart({{ $productId }})" 
                class="w-full mt-auto px-4 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-sm font-bold uppercase tracking-wide hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 hover:shadow-lg rounded-lg group relative overflow-hidden">
            <!-- Button background animation -->
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <span class="relative flex items-center justify-center space-x-2">
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                </svg>
                <span>THÊM VÀO GIỎ</span>
            </span>
        </button>
        @else
        <a href="/san-pham/{{ $slug }}" 
           class="block w-full mt-auto px-4 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-sm font-bold uppercase tracking-wide hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 hover:shadow-lg rounded-lg text-center group relative overflow-hidden">
            <!-- Button background animation -->
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <span class="relative flex items-center justify-center space-x-2">
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                <span>XEM CHI TIẾT</span>
            </span>
        </a>
        @endif
    </div>
</div>