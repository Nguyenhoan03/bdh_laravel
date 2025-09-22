@extends('layouts.app')

@section('title', 'Giỏ Hàng - Daniel Wellington Vietnam')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 roboto-condensed">
                GIỎ HÀNG CỦA BẠN
            </h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Kiểm tra và điều chỉnh sản phẩm trong giỏ hàng trước khi thanh toán
            </p>
        </div>

        @if(session('cart') && count(session('cart')) > 0)
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-lg p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Sản phẩm trong giỏ hàng</h2>
                    
                    <div class="space-y-4">
                        @foreach(session('cart') as $id => $item)
                        <div class="flex items-center space-x-4 p-4 border border-gray-200 rounded-xl hover:shadow-md transition-shadow duration-300">
                            <!-- Product Image -->
                            <div class="flex-shrink-0">
                                <img src="{{ \App\Helpers\ImageHelper::getProductImageUrl($item['product'] ?? null, $item['image'] ?? null) }}" 
                                     alt="{{ $item['name'] }}" 
                                     class="w-20 h-20 object-contain rounded-lg">
                            </div>
                            
                            <!-- Product Info -->
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">
                                    {{ $item['name'] }}
                                </h3>
                                <p class="text-sm text-gray-500 mb-2">
                                    {{ $item['spec'] ?? '' }}
                                </p>
                                
                                <!-- Price -->
                                <div class="flex items-center space-x-2">
                                    @if(isset($item['original_price']) && $item['original_price'] != $item['price'])
                                      <span class="text-sm text-gray-400 line-through font-medium">
                                         {{ $item['original_price_formatted'] ?? number_format((float)$item['original_price'], 0, ',', '.') . '₫' }}
                                      </span>
                                      @endif
                                      <span class="text-lg font-bold text-blue-600">
                                         {{ $item['price_formatted'] ?? number_format((float)$item['price'], 0, ',', '.') . '₫' }}
                                      </span>
                                </div>
                            </div>
                            
                            <!-- Quantity Controls -->
                            <div class="flex items-center space-x-3">
                                <button onclick="updateQuantity({{ $id ?? 0 }}, -1)" 
                                        class="w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center transition-colors duration-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                    </svg>
                                </button>
                                
                                <span class="w-12 text-center font-semibold text-gray-900">
                                    {{ $item['quantity'] }}
                                </span>
                                
                                <button onclick="updateQuantity({{ $id ?? 0 }}, 1)" 
                                        class="w-8 h-8 bg-gray-200 hover:bg-gray-300 rounded-full flex items-center justify-center transition-colors duration-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                </button>
                            </div>
                            
                            <!-- Remove Button -->
                            <button onclick="removeFromCart({{ $id ?? 0 }})" 
                                    class="text-red-500 hover:text-red-700 transition-colors duration-200">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>
                        @endforeach
                    </div>
                    
                    <!-- Clear Cart Button -->
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <button onclick="clearCart()" 
                                class="text-red-500 hover:text-red-700 font-medium transition-colors duration-200">
                            <svg class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                            Xóa tất cả sản phẩm
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-8">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Tóm tắt đơn hàng</h2>
                    
                    <!-- Order Details -->
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Tạm tính:</span>
                            <span class="font-semibold" id="subtotal">0₫</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Phí vận chuyển:</span>
                            <span class="font-semibold text-green-600">Miễn phí</span>
                        </div>
                        <div class="border-t border-gray-200 pt-4">
                            <div class="flex justify-between">
                                <span class="text-lg font-bold text-gray-900">Tổng cộng:</span>
                                <span class="text-lg font-bold text-blue-600" id="total">0₫</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Checkout Button -->
                    <a href="/checkout" 
                       class="block w-full bg-gradient-to-r from-red-600 to-pink-600 text-white py-3 px-6 rounded-xl font-semibold hover:from-red-700 hover:to-pink-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-center group">
                        <span class="flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                            <span class="transition-all duration-300 group-hover:font-bold">TIẾN HÀNH THANH TOÁN</span>
                        </span>
                    </a>
                    
                    <!-- Continue Shopping -->
                    <a href="/" 
                       class="block w-full mt-4 text-center text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200">
                        ← Tiếp tục mua sắm
                    </a>
                </div>
            </div>
        </div>
        
        @else
        <!-- Empty Cart -->
        <div class="text-center py-16">
            <div class="bg-white rounded-2xl shadow-lg p-12 max-w-md mx-auto">
                <!-- Empty Cart Icon -->
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                    </svg>
                </div>
                
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Giỏ hàng trống</h3>
                <p class="text-gray-600 mb-8">Bạn chưa có sản phẩm nào trong giỏ hàng. Hãy bắt đầu mua sắm!</p>
                
                <a href="/" 
                   class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Bắt đầu mua sắm
                </a>
            </div>
        </div>
        @endif
    </div>
</div>

<!-- JavaScript -->
<script>
// Update cart totals
function updateCartTotals() {
    const cart = {!! json_encode(session('cart', [])) !!};
    let subtotal = 0;
    let totalItems = 0;
    
    Object.values(cart).forEach(item => {
        // Use raw price if available, otherwise parse formatted price
        let price;
        if (typeof item.price === 'number') {
            price = item.price;
        } else {
            // Parse formatted price string
            let priceString = item.price.replace(/[^\d.]/g, '').replace(/,/g, '');
            priceString = priceString.replace(/\./g, '');
            price = parseFloat(priceString);
        }
        
        // Debug log
        console.log('Cart item calculation:', {
            product: item.name,
            originalPrice: item.price,
            priceString: priceString,
            parsedPrice: price,
            quantity: item.quantity,
            subtotal: price * item.quantity
        });
        subtotal += price * item.quantity;
    });
    
    // Count unique products, not total quantity
    totalItems = Object.keys(cart).length;
    
    // Debug log
    console.log('Total calculation:', {
        subtotal: subtotal,
        formattedSubtotal: formatPrice(subtotal),
        totalItems: totalItems
    });
    
    document.getElementById('subtotal').textContent = formatPrice(subtotal);
    document.getElementById('total').textContent = formatPrice(subtotal);
    
    // Update cart count in header
    const cartCount = document.querySelector('.cart-count');
    if (cartCount) {
        cartCount.textContent = totalItems;
    }
}

// Format price
function formatPrice(price) {
    return new Intl.NumberFormat('vi-VN').format(price) + '₫';
}

// Update quantity
function updateQuantity(productId, change) {
    fetch('/cart/update', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            product_id: productId,
            quantity_change: change
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            showNotification(data.message || 'Có lỗi xảy ra!', 'error');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Có lỗi xảy ra khi cập nhật giỏ hàng!', 'error');
    });
}

// Remove from cart
function removeFromCart(productId) {
    if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?')) {
        fetch('/cart/remove', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                product_id: productId
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                showNotification(data.message || 'Có lỗi xảy ra!', 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showNotification('Có lỗi xảy ra khi xóa sản phẩm!', 'error');
        });
    }
}

// Clear cart
function clearCart() {
    if (confirm('Bạn có chắc chắn muốn xóa tất cả sản phẩm khỏi giỏ hàng?')) {
        fetch('/cart/clear', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                showNotification(data.message || 'Có lỗi xảy ra!', 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showNotification('Có lỗi xảy ra khi xóa giỏ hàng!', 'error');
        });
    }
}

// Checkout
function checkout() {
    const cart = {!! json_encode(session('cart', [])) !!};
    if (Object.keys(cart).length === 0) {
        showNotification('Giỏ hàng trống!', 'error');
        return;
    }
    
    // For now, just show a message
    showNotification('Chức năng thanh toán đang được phát triển!', 'info');
}

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

// Initialize cart totals on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCartTotals();
});
</script>
@endsection
