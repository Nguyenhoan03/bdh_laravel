@props([
    'products' => [],
    'columns' => 4, // Default 4 columns, can be 4 or 5
    'showViewMore' => true,
    'viewMoreText' => 'Xem thêm sản phẩm giảm giá',
    'viewMoreUrl' => '/products',
    'size' => 'normal' // 'normal' or 'compact'
])

@php
    // Determine grid classes based on columns
    $gridClasses = match($columns) {
        5 => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-5',
        4 => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-4',
        3 => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-3',
        2 => 'grid-cols-1 sm:grid-cols-2',
        default => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-4'
    };
    
    // Adjust gap for compact size
    $gapClasses = $size === 'compact' ? 'gap-4' : 'gap-6';
@endphp

<div class="grid {{ $gridClasses }} {{ $gapClasses }} mb-8 p-3 scroll-reveal">
    @foreach($products as $index => $product)
        <x-product-card 
            :name="$product['name'] ?? ''"
            :spec="$product['spec'] ?? ''"
            :original-price="$product['original_price'] ?? ''"
            :price="$product['price'] ?? ''"
            :discount="$product['discount'] ?? ''"
            :image="$product['image'] ?? 'DWr00100699-247x296.webp'"
            :size="$size"
            :product-id="$product['id'] ?? null"
            :slug="$product['slug'] ?? $product['id'] ?? ''"
            :loop="$loop"
        />
    @endforeach
</div>

@if($showViewMore)
    <div class="text-center scroll-reveal" data-delay="500">
        <a href="{{ $viewMoreUrl }}" 
           class="inline-block bg-blue-600 text-white px-6 py-2 rounded-md font-semibold hover:bg-blue-700 transition-all duration-300 text-sm mb-3">
            {{ $viewMoreText }} <i class="fas fa-arrow-right ml-1"></i>
        </a>
    </div>
@endif