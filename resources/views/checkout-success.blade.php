@extends('layouts.app')

@section('title', $meta['title'] ?? 'Đặt Hàng Thành Công - Daniel Wellington Vietnam')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-green-50 to-blue-50 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Success Header -->
        <div class="text-center mb-8">
            <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                <svg class="w-12 h-12 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4 roboto-condensed">
                ĐẶT HÀNG THÀNH CÔNG!
            </h1>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Cảm ơn bạn đã đặt hàng. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất để xác nhận đơn hàng.
            </p>
        </div>

        @if($order)
        <!-- Order Information -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">THÔNG TIN ĐƠN HÀNG</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Order Details -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Chi tiết đơn hàng</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Mã đơn hàng:</span>
                            <span class="font-semibold text-blue-600">{{ $order->order_number }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Ngày đặt:</span>
                            <span class="font-semibold">{{ $order->created_at->format('d/m/Y H:i') }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Trạng thái:</span>
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm font-medium">
                                {{ ucfirst($order->status) }}
                            </span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Phương thức thanh toán:</span>
                            <span class="font-semibold">
                                {{ $order->payment_method === 'cod' ? 'Thanh toán khi nhận hàng' : 'Chuyển khoản ngân hàng' }}
                            </span>
                        </div>
                        <div class="flex justify-betweenn">
                            <span class="text-gray-600">Tổng tiền:</span>
                            <span class="font-bold text-lg text-red-600 whitespace-nowrap pl-3 pb-2">
                                {{ number_format($order->orderItems->sum('subtotal'), 0, ',', '.') }}₫
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Customer Information -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Thông tin giao hàng</h3>
                    <div class="space-y-3">
                        <div>
                            <span class="text-gray-600">Họ tên:</span>
                            <span class="font-semibold ml-2">{{ $order->customer_name }}</span>
                        </div>
                        <div>
                            <span class="text-gray-600">Số điện thoại:</span>
                            <span class="font-semibold ml-2">{{ $order->customer_phone }}</span>
                        </div>
                        @if($order->customer_email)
                        <div>
                            <span class="text-gray-600">Email:</span>
                            <span class="font-semibold ml-2">{{ $order->customer_email }}</span>
                        </div>
                        @endif
                        <div>
                            <span class="text-gray-600">Địa chỉ:</span>
                            <span class="font-semibold ml-2">{{ $order->customer_address }}, {{ $order->customer_ward }}, {{ $order->customer_district }}, {{ $order->customer_city }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Items -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-8">
            <h3 class="text-xl font-bold text-gray-900 mb-6">Sản phẩm đã đặt</h3>
            
            <div class="space-y-4">
                @if($order->orderItems && $order->orderItems->count() > 0)
                @foreach($order->orderItems as $item)
                <div class="flex items-center space-x-4 p-4 border border-gray-200 rounded-lg">
                    <div class="flex-shrink-0">
                        <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="flex-1 min-w-0">
                        <h4 class="text-lg font-semibold text-gray-900">
                            {{ $item->product_name }}
                        </h4>
                        <p class="text-sm text-gray-500">Số lượng: {{ $item->quantity }}</p>
                    </div>
                    
                    <div class="text-right min-w-0">
                        <div class="text-lg font-bold text-gray-900 whitespace-nowrap">
                            {{ number_format((float)$item->subtotal, 0, ',', '.') }}₫
                        </div>
                        <div class="text-sm text-gray-500 whitespace-nowrap">
                            {{ number_format((float)$item->price, 0, ',', '.') }}₫ × {{ $item->quantity }}
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="text-center py-8">
                    <p class="text-gray-500">Không có sản phẩm nào trong đơn hàng này.</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Next Steps -->
        <div class="bg-blue-50 rounded-2xl p-8 mb-8">
            <h3 class="text-xl font-bold text-gray-900 mb-4">Bước tiếp theo</h3>
            <div class="space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold">1</div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Xác nhận đơn hàng</h4>
                        <p class="text-gray-600">Chúng tôi sẽ gọi điện xác nhận đơn hàng trong vòng 30 phút</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold">2</div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Chuẩn bị hàng</h4>
                        <p class="text-gray-600">Đơn hàng sẽ được chuẩn bị và đóng gói cẩn thận</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <div class="w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-bold">3</div>
                    <div>
                        <h4 class="font-semibold text-gray-900">Giao hàng</h4>
                        <p class="text-gray-600">Đơn hàng sẽ được giao trong 1-3 ngày làm việc</p>
                    </div>
                </div>
            </div>
        </div>

        @else
        <!-- No Order Found -->
        <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
            <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-2">Không tìm thấy đơn hàng</h3>
            <p class="text-gray-600 mb-6">Có thể đơn hàng không tồn tại hoặc đã bị xóa.</p>
        </div>
        @endif

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/" 
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Tiếp tục mua sắm
            </a>
            
            @if($order)
            <button onclick="printOrder()" 
                    class="inline-flex items-center px-8 py-4 bg-white border-2 border-gray-300 text-gray-700 font-bold rounded-2xl hover:border-gray-400 hover:bg-gray-50 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                </svg>
                In đơn hàng
            </button>
            @endif
        </div>

        <!-- Contact Information -->
        <div class="mt-12 text-center">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Cần hỗ trợ?</h3>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center text-gray-600">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span>Hotline: 1900 1234</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>Email: support@danielwellington.vn</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
function printOrder() {
    window.print();
}

// Auto redirect to home after 30 seconds if no interaction
let redirectTimer = setTimeout(() => {
    if (confirm('Bạn có muốn tiếp tục mua sắm không?')) {
        window.location.href = '/';
    } else {
        // Reset timer
        redirectTimer = setTimeout(arguments.callee, 30000);
    }
}, 30000);

// Clear timer if user interacts with page
document.addEventListener('click', () => {
    clearTimeout(redirectTimer);
});
</script>
@endsection
