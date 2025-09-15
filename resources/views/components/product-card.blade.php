<div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
    <!-- Discount Badge -->
    <div class="relative">
        <div class="absolute top-2 left-2 z-10">
            <span class="bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-md">-35%</span>
        </div>
        
        <!-- Product Image -->
        <div class="aspect-square bg-gray-50 flex items-center justify-center p-4">
            <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                 alt="{{ $product['name'] }}" 
                 class="max-w-full max-h-full object-contain">
        </div>
    </div>
    
    <!-- Product Details -->
    <div class="p-4 space-y-2">
        <!-- Product Name -->
        <h3 class="text-sm text-center font-medium text-gray-900 leading-tight">
            {{ $product['name'] ?? 'Elan Lumine Silver DW00100716' }}
        </h3>
        
        <!-- Product Specification -->
        <p class="text-xs text-center text-gray-600">
            {{ $product['spec'] ?? 'Nữ 22mm' }}
        </p>
        
        <!-- Pricing -->
        <div class="flex items-center justify-center space-x-2">
            <!-- Original Price (Crossed out) -->
            <span class="text-sm text-gray-400 line-through">
                {{ $product['original_price'] ?? '₫2.850.000' }}
            </span>
            
            <!-- Discounted Price -->
            <span class="text-lg font-bold text-orange-500">
                {{ $product['price'] ?? '₫1.850.000' }}
            </span>
        </div>
        
        <!-- Add to Cart Button -->
        <button class="w-full mt-3 px-4 py-2 border border-blue-300 bg-white text-blue-600 text-sm font-medium uppercase tracking-wide hover:bg-blue-50 transition-colors duration-200">
            THÊM VÀO GIỎ HÀNG
        </button>
    </div>
</div>