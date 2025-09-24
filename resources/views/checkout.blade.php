@extends('layouts.app')

@section('title', $meta['title'] ?? 'Thanh Toán - Daniel Wellington Vietnam')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 to-blue-50 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <div class="mb-8">
            <nav class="flex items-center space-x-2 text-sm">
                <a href="/gio-hang" class="text-blue-600 hover:text-blue-800">GIỎ HÀNG</a>
                <span class="text-gray-400">></span>
                <span class="text-gray-900 font-semibold">CHI TIẾT THANH TOÁN</span>
                <span class="text-gray-400">></span>
                <span class="text-gray-400">ĐƠN HÀNG HOÀN TẤT</span>
            </nav>
        </div>

        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 roboto-condensed">
                THANH TOÁN
            </h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Vui lòng điền thông tin để hoàn tất đơn hàng của bạn
            </p>
        </div>

        @if(session('cart') && count(session('cart')) > 0)
        <form id="checkout-form" action="/checkout/process" method="POST">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Checkout Form -->
                <div class="lg:col-span-2 space-y-8">
                    <!-- Customer Information -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            THÔNG TIN KHÁCH HÀNG
                        </h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="full_name" class="block text-sm font-medium text-gray-700 mb-2">
                                    Họ và tên <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="full_name" name="full_name" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                       placeholder="Nhập họ và tên">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                    Số điện thoại <span class="text-red-500">*</span>
                                </label>
                                <input type="tel" id="phone" name="phone" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                       placeholder="Nhập số điện thoại">
                            </div>
                            
                            <div class="md:col-span-2">
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                    Email
                                </label>
                                <input type="email" id="email" name="email"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                       placeholder="Nhập email (không bắt buộc)">
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Information -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            THÔNG TIN GIAO HÀNG
                        </h2>
                        
                        <div class="space-y-6">
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                                    Địa chỉ <span class="text-red-500">*</span>
                                </label>
                                <textarea id="address" name="address" rows="3" required
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                          placeholder="Nhập địa chỉ chi tiết"></textarea>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700 mb-2">
                                        Tỉnh/Thành phố <span class="text-red-500">*</span>
                                    </label>
                                    <select id="city" name="city" required
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                                        <option value="">Chọn tỉnh/thành phố</option>
                                        <option value="hanoi">Hà Nội</option>
                                        <option value="hcm">TP. Hồ Chí Minh</option>
                                        <option value="danang">Đà Nẵng</option>
                                        <option value="haiphong">Hải Phòng</option>
                                        <option value="cantho">Cần Thơ</option>
                                        <option value="other">Khác</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <label for="district" class="block text-sm font-medium text-gray-700 mb-2">
                                        Quận/Huyện <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="district" name="district" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                           placeholder="Nhập quận/huyện">
                                </div>
                                
                                <div>
                                    <label for="ward" class="block text-sm font-medium text-gray-700 mb-2">
                                        Phường/Xã <span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="ward" name="ward" required
                                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                           placeholder="Nhập phường/xã">
                                </div>
                            </div>
                            
                            <div>
                                <label for="note" class="block text-sm font-medium text-gray-700 mb-2">
                                    Ghi chú đơn hàng
                                </label>
                                <textarea id="note" name="note" rows="2"
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                                          placeholder="Ghi chú thêm cho đơn hàng (không bắt buộc)"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="bg-white rounded-2xl shadow-lg p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                            PHƯƠNG THỨC THANH TOÁN
                        </h2>
                        
                        <div class="space-y-4">
                            <div class="flex items-center p-4 border border-gray-200 rounded-lg hover:border-blue-500 transition-colors duration-200">
                                <input type="radio" id="cod" name="payment_method" value="cod" checked
                                       class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                <label for="cod" class="ml-3 flex items-center">
                                    <svg class="w-6 h-6 mr-3 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                    </svg>
                                    <div>
                                        <div class="font-medium text-gray-900">Thanh toán khi nhận hàng (COD)</div>
                                        <div class="text-sm text-gray-500">Thanh toán bằng tiền mặt khi nhận hàng</div>
                                    </div>
                                </label>
                            </div>
                            
                            <div class="flex items-center p-4 border border-gray-200 rounded-lg hover:border-blue-500 transition-colors duration-200">
                                <input type="radio" id="bank_transfer" name="payment_method" value="bank_transfer"
                                       class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                                <label for="bank_transfer" class="ml-3 flex items-center">
                                    <svg class="w-6 h-6 mr-3 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                    </svg>
                                    <div>
                                        <div class="font-medium text-gray-900">Chuyển khoản ngân hàng</div>
                                        <div class="text-sm text-gray-500">Chuyển khoản trước khi giao hàng</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-2xl shadow-lg p-6 sticky top-8">
                        <h2 class="text-xl font-bold text-gray-900 mb-6">TỔNG CỘNG GIỎ HÀNG</h2>
                        
                        <!-- Order Items -->
                        <div class="space-y-4 mb-6">
                            @foreach(session('cart') as $id => $item)
                            <div class="flex items-center space-x-3 p-3 bg-gray-50 rounded-lg">
                                <img src="{{ \App\Helpers\ImageHelper::getProductImageUrl($item['product'] ?? null, $item['image'] ?? null) }}" 
                                     alt="{{ $item['name'] }}" 
                                     class="w-12 h-12 object-contain rounded">
                                <div class="flex-1 min-w-0">
                                    <h4 class="text-sm font-medium text-gray-900 truncate">
                                        {{ $item['name'] }}
                                    </h4>
                                    <p class="text-xs text-gray-500">Số lượng: {{ $item['quantity'] }}</p>
                                </div>
                                <div class="text-sm font-semibold text-gray-900">
                                    {{ $item['price_formatted'] ?? number_format((float)$item['price'], 0, ',', '.') . '₫' }}
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- Order Summary -->
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tạm tính:</span>
                                <span class="font-semibold" id="subtotal">0₫</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Phí vận chuyển:</span>
                                <span class="font-semibold text-green-600">Miễn phí</span>
                            </div>
                            <div class="border-t border-gray-200 pt-3">
                                <div class="flex justify-between">
                                    <span class="text-lg font-bold text-gray-900">Tổng cộng:</span>
                                    <span class="text-lg font-bold text-blue-600" id="total">0₫</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Discount Code -->
                        <div class="mb-6">
                            <div class="flex items-center mb-3">
                                <svg class="w-5 h-5 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                <span class="text-sm font-medium text-gray-700">Mã ưu đãi</span>
                            </div>
                            <div class="flex space-x-2">
                                <input type="text" id="discount_code" name="discount_code"
                                       class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm"
                                       placeholder="Nhập mã giảm giá">
                                <button type="button" onclick="applyDiscount()"
                                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200 text-sm">
                                    Áp dụng
                                </button>
                            </div>
                        </div>
                        
                        <!-- Checkout Button -->
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-red-600 to-pink-600 text-white py-4 px-6 rounded-xl font-bold hover:from-red-700 hover:to-pink-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl group">
                            <span class="flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                                <span class="transition-all duration-300 group-hover:font-extrabold">TIẾN HÀNH THANH TOÁN</span>
                            </span>
                        </button>
                        
                        <!-- Back to Cart -->
                        <a href="/gio-hang" 
                           class="block w-full mt-4 text-center text-blue-600 hover:text-blue-800 font-medium transition-colors duration-200">
                            ← Quay lại giỏ hàng
                        </a>
                    </div>
                </div>
            </div>
        </form>
        
        @else
        <!-- Empty Cart -->
        <div class="text-center py-16">
            <div class="bg-white rounded-2xl shadow-lg p-12 max-w-md mx-auto">
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
    
    Object.values(cart).forEach(item => {
        // Use raw price directly (should be number now)
        let price = parseFloat(item.price) || 0;
        
        // Debug log
        console.log('Checkout item calculation:', {
            product: item.name,
            originalPrice: item.price,
            parsedPrice: price,
            quantity: item.quantity,
            subtotal: price * item.quantity
        });
        
        subtotal += price * item.quantity;
    });
    
    // Debug log
    console.log('Checkout total calculation:', {
        subtotal: subtotal,
        formattedSubtotal: formatPrice(subtotal),
        totalItems: Object.keys(cart).length
    });
    
    document.getElementById('subtotal').textContent = formatPrice(subtotal);
    document.getElementById('total').textContent = formatPrice(subtotal);
}

// Format price
function formatPrice(price) {
    return new Intl.NumberFormat('vi-VN').format(price) + '₫';
}

// Apply discount code
function applyDiscount() {
    const discountCode = document.getElementById('discount_code').value.trim();
    
    if (!discountCode) {
        showNotification('Vui lòng nhập mã giảm giá!', 'error');
        return;
    }
    
    // Simulate discount application
    if (discountCode.toUpperCase() === 'WELCOME10') {
        showNotification('Áp dụng mã giảm giá 10% thành công!', 'success');
        // Here you would update the total with discount
    } else {
        showNotification('Mã giảm giá không hợp lệ!', 'error');
    }
}

// Form validation and submission
document.getElementById('checkout-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Basic validation
    const requiredFields = ['full_name', 'phone', 'address', 'city', 'district', 'ward'];
    let isValid = true;
    
    requiredFields.forEach(field => {
        const input = document.getElementById(field);
        if (!input || !input.value.trim()) {
            if (input) input.classList.add('border-red-500');
            isValid = false;
        } else {
            input.classList.remove('border-red-500');
        }
    });
    
    // Check payment method
    const paymentMethod = document.querySelector('input[name="payment_method"]:checked');
    if (!paymentMethod) {
        showNotification('Vui lòng chọn phương thức thanh toán!', 'error');
        isValid = false;
    }
    
    if (!isValid) {
        showNotification('Vui lòng điền đầy đủ thông tin bắt buộc!', 'error');
        return;
    }
    
    // Show loading state
    const submitBtn = document.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span class="flex items-center justify-center space-x-2"><svg class="animate-spin w-5 h-5" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg><span>ĐANG XỬ LÝ...</span></span>';
    submitBtn.disabled = true;
    
    // Submit form via AJAX
    const form = document.getElementById('checkout-form');
    const formData = new FormData(form);
    
    fetch('/checkout/process', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showNotification(data.message, 'success');
            
            // Redirect to success page with order info
            setTimeout(() => {
                window.location.href = `/checkout/success?order_number=${data.order_number}&order_id=${data.order_id}`;
            }, 1500);
        } else {
            showNotification(data.message, 'error');
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        showNotification('Có lỗi xảy ra khi xử lý đơn hàng!', 'error');
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    });
});

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
            if (document.body.contains(notification)) {
                document.body.removeChild(notification);
            }
        }, 300);
    }, 3000);
}

// Initialize cart totals on page load
document.addEventListener('DOMContentLoaded', function() {
    updateCartTotals();
});
</script>
@endsection
