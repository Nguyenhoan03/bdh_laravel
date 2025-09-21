@props([
    'name' => '',
    'spec' => '',
    'originalPrice' => '',
    'price' => '',
    'discount' => '',
    'image' => 'DW00100699-247x296.webp',
    'size' => 'normal'
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
        <button class="w-full mt-3 px-4 py-2 border border-blue-300 bg-white text-blue-600 text-sm font-medium uppercase tracking-wide hover:bg-blue-50 transition-colors duration-200">
            THÊM VÀO GIỎ HÀNG
        </button>
    </div>
</div>