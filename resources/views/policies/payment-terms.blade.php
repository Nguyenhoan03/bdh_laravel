@extends('layouts.app')

@section('title', 'Điều khoản thanh toán - Daniel Wellington Vietnam')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 overflow-hidden">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="/" class="text-slate-500 hover:text-slate-700 transition-colors duration-200 font-medium">Trang chủ</a></li>
                <li class="text-slate-400">/</li>
                <li class="text-slate-900 font-semibold">Điều khoản thanh toán</li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl mb-8 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 bg-clip-text text-transparent mb-6">
                Điều khoản thanh toán
            </h1>
            <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed text-lg">
                Thông tin chi tiết về các phương thức thanh toán và điều khoản giao dịch tại Daniel Wellington Vietnam
            </p>
        </div>
    </div>
</div>

<!-- Content -->
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8 border border-blue-100">
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                    <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Phương thức thanh toán
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-blue-100">
                        <h3 class="text-lg font-semibold text-slate-900 mb-3">💳 Thanh toán online</h3>
                        <ul class="space-y-2 text-slate-600">
                            <li>• Thẻ tín dụng/ghi nợ (Visa, Mastercard)</li>
                            <li>• Ví điện tử (MoMo, ZaloPay, VNPay)</li>
                            <li>• Chuyển khoản ngân hàng</li>
                            <li>• Thanh toán qua QR Code</li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-blue-100">
                        <h3 class="text-lg font-semibold text-slate-900 mb-3">💰 Thanh toán khi nhận hàng</h3>
                        <ul class="space-y-2 text-slate-600">
                            <li>• COD (Cash on Delivery)</li>
                            <li>• Thanh toán tại cửa hàng</li>
                            <li>• Trả góp 0% lãi suất</li>
                            <li>• Thanh toán qua thẻ tại nhà</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Điều kiện thanh toán
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <ul class="space-y-3 text-slate-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Khách hàng có thể thanh toán trước 100% hoặc đặt cọc 30% giá trị đơn hàng</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Đơn hàng trên 5 triệu đồng được miễn phí vận chuyển toàn quốc</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Hỗ trợ trả góp 0% lãi suất trong 6-12 tháng</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Thanh toán an toàn với mã OTP xác thực</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                        Chính sách hoàn tiền
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <ul class="space-y-3 text-slate-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Hoàn tiền 100% trong vòng 7 ngày nếu sản phẩm không đúng mô tả</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Hoàn tiền qua cùng phương thức thanh toán ban đầu</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Thời gian xử lý hoàn tiền: 3-5 ngày làm việc</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        Bảo mật thông tin
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <p class="text-slate-700 mb-4">Chúng tôi cam kết bảo vệ thông tin cá nhân và thanh toán của khách hàng:</p>
                        <ul class="space-y-3 text-slate-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Mã hóa SSL 256-bit cho mọi giao dịch</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Không lưu trữ thông tin thẻ tín dụng</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Tuân thủ tiêu chuẩn PCI DSS</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Contact Info -->
            <div class="mt-12 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 text-white">
                <h3 class="text-xl font-bold mb-4">Cần hỗ trợ về thanh toán?</h3>
                <p class="mb-4">Liên hệ với chúng tôi để được tư vấn chi tiết về các phương thức thanh toán phù hợp.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="tel:1900123456" class="inline-flex items-center px-6 py-3 bg-white text-blue-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        1900 123 456
                    </a>
                    <a href="mailto:support@danielwellington.vn" class="inline-flex items-center px-6 py-3 bg-white text-blue-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        support@danielwellington.vn
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
