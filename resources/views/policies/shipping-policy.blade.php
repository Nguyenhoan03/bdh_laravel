@extends('layouts.app')

@section('title', 'Chính sách vận chuyển - Daniel Wellington Vietnam')

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
                <li class="text-slate-900 font-semibold">Chính sách vận chuyển</li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-2xl mb-8 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-900 via-teal-900 to-cyan-900 bg-clip-text text-transparent mb-6">
                Chính sách vận chuyển
            </h1>
            <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed text-lg">
                Giao hàng nhanh chóng, an toàn và miễn phí trên toàn quốc với dịch vụ vận chuyển chuyên nghiệp
            </p>
        </div>
    </div>
</div>

<!-- Content -->
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <!-- Shipping Overview -->
            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-2xl p-8 mb-8 border border-teal-100">
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                    <svg class="w-6 h-6 text-teal-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Tổng quan vận chuyển
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-teal-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Miễn phí</h3>
                        <p class="text-slate-600 text-sm">Đơn hàng từ 500.000đ</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-teal-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-white font-bold text-lg">24h</span>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Giao nhanh</h3>
                        <p class="text-slate-600 text-sm">TP.HCM & Hà Nội</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-teal-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-white font-bold text-lg">3-5</span>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Ngày</h3>
                        <p class="text-slate-600 text-sm">Các tỉnh khác</p>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <!-- Shipping Methods -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-teal-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                        Phương thức vận chuyển
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3 flex items-center">
                                <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                Giao hàng nhanh (24h)
                            </h3>
                            <ul class="space-y-2 text-slate-600">
                                <li>• Áp dụng cho TP.HCM và Hà Nội</li>
                                <li>• Giao hàng trong ngày nếu đặt trước 14h</li>
                                <li>• Phí vận chuyển: 30.000đ</li>
                                <li>• Miễn phí cho đơn từ 1.000.000đ</li>
                            </ul>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3 flex items-center">
                                <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                Giao hàng tiêu chuẩn (3-5 ngày)
                            </h3>
                            <ul class="space-y-2 text-slate-600">
                                <li>• Áp dụng cho toàn quốc</li>
                                <li>• Giao hàng trong 3-5 ngày làm việc</li>
                                <li>• Phí vận chuyển: 20.000đ</li>
                                <li>• Miễn phí cho đơn từ 500.000đ</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Shipping Areas -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Khu vực giao hàng
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="bg-blue-50 rounded-xl p-6 border border-blue-100">
                            <h3 class="text-lg font-semibold text-blue-800 mb-3">🏙️ Thành phố lớn</h3>
                            <ul class="space-y-1 text-slate-700 text-sm">
                                <li>• TP.HCM (24h)</li>
                                <li>• Hà Nội (24h)</li>
                                <li>• Đà Nẵng (2-3 ngày)</li>
                                <li>• Cần Thơ (2-3 ngày)</li>
                            </ul>
                        </div>
                        <div class="bg-green-50 rounded-xl p-6 border border-green-100">
                            <h3 class="text-lg font-semibold text-green-800 mb-3">🏘️ Tỉnh thành khác</h3>
                            <ul class="space-y-1 text-slate-700 text-sm">
                                <li>• Miền Bắc (3-4 ngày)</li>
                                <li>• Miền Trung (4-5 ngày)</li>
                                <li>• Miền Nam (3-4 ngày)</li>
                                <li>• Tây Nguyên (4-5 ngày)</li>
                            </ul>
                        </div>
                        <div class="bg-orange-50 rounded-xl p-6 border border-orange-100">
                            <h3 class="text-lg font-semibold text-orange-800 mb-3">🏝️ Vùng xa</h3>
                            <ul class="space-y-1 text-slate-700 text-sm">
                                <li>• Đảo Phú Quốc (5-7 ngày)</li>
                                <li>• Côn Đảo (5-7 ngày)</li>
                                <li>• Vùng biên giới (7-10 ngày)</li>
                                <li>• Liên hệ trước khi đặt</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Shipping Process -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Quy trình giao hàng
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">1</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Đặt hàng</h4>
                                <p class="text-sm text-slate-600">Xác nhận đơn hàng</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">2</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Chuẩn bị</h4>
                                <p class="text-sm text-slate-600">Đóng gói sản phẩm</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">3</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Vận chuyển</h4>
                                <p class="text-sm text-slate-600">Giao cho đơn vị vận chuyển</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">4</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Giao hàng</h4>
                                <p class="text-sm text-slate-600">Giao đến địa chỉ khách hàng</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">5</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Hoàn tất</h4>
                                <p class="text-sm text-slate-600">Xác nhận nhận hàng</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Shipping Fees -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                        Bảng phí vận chuyển
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr class="border-b border-slate-200">
                                        <th class="text-left py-3 px-4 font-semibold text-slate-900">Khu vực</th>
                                        <th class="text-left py-3 px-4 font-semibold text-slate-900">Thời gian</th>
                                        <th class="text-left py-3 px-4 font-semibold text-slate-900">Phí vận chuyển</th>
                                        <th class="text-left py-3 px-4 font-semibold text-slate-900">Miễn phí từ</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200">
                                    <tr>
                                        <td class="py-3 px-4 text-slate-700">TP.HCM, Hà Nội</td>
                                        <td class="py-3 px-4 text-slate-700">24 giờ</td>
                                        <td class="py-3 px-4 text-slate-700">30.000đ</td>
                                        <td class="py-3 px-4 text-slate-700">1.000.000đ</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 text-slate-700">Đà Nẵng, Cần Thơ</td>
                                        <td class="py-3 px-4 text-slate-700">2-3 ngày</td>
                                        <td class="py-3 px-4 text-slate-700">25.000đ</td>
                                        <td class="py-3 px-4 text-slate-700">800.000đ</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 text-slate-700">Các tỉnh khác</td>
                                        <td class="py-3 px-4 text-slate-700">3-5 ngày</td>
                                        <td class="py-3 px-4 text-slate-700">20.000đ</td>
                                        <td class="py-3 px-4 text-slate-700">500.000đ</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 text-slate-700">Vùng xa, đảo</td>
                                        <td class="py-3 px-4 text-slate-700">5-7 ngày</td>
                                        <td class="py-3 px-4 text-slate-700">50.000đ</td>
                                        <td class="py-3 px-4 text-slate-700">2.000.000đ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- Delivery Notes -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Lưu ý giao hàng
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <ul class="space-y-3 text-slate-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Kiểm tra kỹ thông tin địa chỉ giao hàng trước khi xác nhận đơn hàng</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Giữ liên lạc với số điện thoại đã đăng ký trong thời gian giao hàng</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Kiểm tra sản phẩm trước khi ký nhận</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Thời gian giao hàng có thể thay đổi do điều kiện thời tiết hoặc lễ tết</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Contact Info -->
            <div class="mt-12 bg-gradient-to-r from-teal-600 to-cyan-600 rounded-2xl p-8 text-white">
                <h3 class="text-xl font-bold mb-4">Cần hỗ trợ vận chuyển?</h3>
                <p class="mb-4">Liên hệ với chúng tôi để được tư vấn về phương thức vận chuyển phù hợp nhất.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="tel:1900123456" class="inline-flex items-center px-6 py-3 bg-white text-teal-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        1900 123 456
                    </a>
                    <a href="mailto:shipping@danielwellington.vn" class="inline-flex items-center px-6 py-3 bg-white text-teal-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        shipping@danielwellington.vn
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
