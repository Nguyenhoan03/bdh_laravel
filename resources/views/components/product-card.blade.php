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

<div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
    <!-- Discount Badge -->
    @if($discount)
    <div class="relative">
        <div class="absolute top-2 left-2 z-10">
            <span class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-2 py-1 rounded-md shadow-lg animate-pulse">{{ $discount }}</span>
        </div>
    @endif
        
        <!-- Product Image -->
        <div class="aspect-square bg-gray-50 flex items-center justify-center p-4">
            <img src="{{ asset('img/' . $image) }}" 
                 alt="{{ $name }}" 
                 class="max-w-full max-h-full object-contain">
        </div>
    @if($discount)
    </div>
    @endif
    
    <!-- Product Details -->
    <div class="p-4 space-y-2">
        <!-- Product Name -->
        <h3 class="text-sm text-center font-medium text-gray-900 leading-tight">
            {{ $name }}
        </h3>
        
        <!-- Product Specification -->
        @if($spec)
        <p class="text-xs text-center text-gray-600">
            {{ $spec }}
        </p>
        @endif
        
        <!-- Pricing -->
        <div class="flex items-center justify-center space-x-2">
            @if($originalPrice && $originalPrice !== $price)
            <!-- Original Price (Crossed out) -->
            <span class="text-sm text-gray-400 line-through font-medium">
                {{ $originalPrice }}
            </span>
            @endif
            
            <!-- Current Price -->
            <span class="text-lg font-bold text-orange-500">
                {{ $price }}
            </span>
        </div>
        
        <!-- Add to Cart Button -->
        @if($productId && $productId > 0)
        <button onclick="addToCart({{ $productId }})" 
                class="w-full mt-3 px-4 py-2 border border-blue-300 bg-white text-blue-600 text-sm font-medium uppercase tracking-wide hover:bg-blue-50 hover:border-blue-400 transition-all duration-300 transform hover:scale-105 hover:shadow-md group">
            <span class="flex items-center justify-center space-x-1">
                <svg class="w-4 h-4 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                </svg>
                <span class="transition-all duration-300 group-hover:font-semibold">THÊM VÀO GIỎ HÀNG</span>
            </span>
        </button>
        @else
        <a href="/san-pham/{{ $slug }}" 
           class="block w-full mt-3 px-4 py-2 border border-blue-300 bg-white text-blue-600 text-sm font-medium uppercase tracking-wide hover:bg-blue-50 hover:border-blue-400 transition-all duration-300 transform hover:scale-105 hover:shadow-md text-center group">
            <span class="flex items-center justify-center space-x-1">
                <svg class="w-4 h-4 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                <span class="transition-all duration-300 group-hover:font-semibold">XEM CHI TIẾT</span>
            </span>
        </a>
        @endif
    </div>
</div>