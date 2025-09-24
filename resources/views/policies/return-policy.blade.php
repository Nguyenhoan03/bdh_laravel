@extends('layouts.app')

@section('title', $meta['title'] ?? 'Chính sách đổi trả - Daniel Wellington Vietnam')

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
                <li class="text-slate-900 font-semibold">Chính sách đổi trả</li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-orange-500 to-red-600 rounded-2xl mb-8 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m5 14v-5a2 2 0 00-2-2H6a2 2 0 00-2 2v5a2 2 0 002 2h8a2 2 0 002-2z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-900 via-orange-900 to-red-900 bg-clip-text text-transparent mb-6">
                Chính sách đổi trả
            </h1>
            <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed text-lg">
                Cam kết đổi trả miễn phí trong 30 ngày để đảm bảo sự hài lòng tuyệt đối của khách hàng
            </p>
        </div>
    </div>
</div>

<!-- Content -->
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <!-- Return Overview -->
            <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-2xl p-8 mb-8 border border-orange-100">
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                    <svg class="w-6 h-6 text-orange-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Tổng quan đổi trả
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-orange-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-white font-bold text-lg">30</span>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Ngày đổi trả</h3>
                        <p class="text-slate-600 text-sm">Miễn phí trong 30 ngày</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-orange-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Miễn phí</h3>
                        <p class="text-slate-600 text-sm">Đổi trả hoàn toàn miễn phí</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-orange-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Nhanh chóng</h3>
                        <p class="text-slate-600 text-sm">Xử lý trong 3-5 ngày</p>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <!-- Return Conditions -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-orange-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Điều kiện đổi trả
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-green-50 rounded-xl p-6 border border-green-100">
                            <h3 class="text-lg font-semibold text-green-800 mb-3">✅ Có thể đổi trả</h3>
                            <ul class="space-y-2 text-slate-700">
                                <li>• Sản phẩm không vừa ý</li>
                                <li>• Không đúng mô tả trên website</li>
                                <li>• Lỗi từ nhà sản xuất</li>
                                <li>• Sản phẩm bị hỏng khi giao hàng</li>
                                <li>• Đổi size, màu sắc khác</li>
                                <li>• Thay đổi ý định mua hàng</li>
                            </ul>
                        </div>
                        <div class="bg-red-50 rounded-xl p-6 border border-red-100">
                            <h3 class="text-lg font-semibold text-red-800 mb-3">❌ Không thể đổi trả</h3>
                            <ul class="space-y-2 text-slate-700">
                                <li>• Sản phẩm đã sử dụng, có dấu hiệu hao mòn</li>
                                <li>• Mất hộp, phiếu bảo hành gốc</li>
                                <li>• Hư hỏng do sử dụng sai cách</li>
                                <li>• Quá 30 ngày kể từ ngày mua</li>
                                <li>• Sản phẩm đã được tùy chỉnh</li>
                                <li>• Đồng hồ đã được điều chỉnh dây</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Return Process -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Quy trình đổi trả
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">1</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Liên hệ</h4>
                                <p class="text-sm text-slate-600">Gọi hotline hoặc email</p>
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
                                <h4 class="font-semibold text-slate-900 mb-2">Gửi hàng</h4>
                                <p class="text-sm text-slate-600">Gửi về trung tâm</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">4</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Kiểm tra</h4>
                                <p class="text-sm text-slate-600">Xác nhận điều kiện</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">5</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Hoàn tiền</h4>
                                <p class="text-sm text-slate-600">Hoàn tiền/đổi sản phẩm</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Return Methods -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                        Phương thức đổi trả
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3 flex items-center">
                                <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                Đổi trả tại cửa hàng
                            </h3>
                            <ul class="space-y-2 text-slate-600">
                                <li>• Mang sản phẩm đến cửa hàng gần nhất</li>
                                <li>• Mang theo hóa đơn và phiếu bảo hành</li>
                                <li>• Được xử lý ngay trong ngày</li>
                                <li>• Tư vấn sản phẩm thay thế</li>
                            </ul>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3 flex items-center">
                                <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                </svg>
                                Đổi trả qua bưu điện
                            </h3>
                            <ul class="space-y-2 text-slate-600">
                                <li>• Gửi sản phẩm về địa chỉ trung tâm</li>
                                <li>• Miễn phí vận chuyển đổi trả</li>
                                <li>• Xử lý trong 3-5 ngày làm việc</li>
                                <li>• Nhận thông báo qua email/SMS</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Refund Policy -->
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
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Hoàn tiền 100% giá trị sản phẩm nếu đáp ứng điều kiện đổi trả</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Hoàn tiền qua cùng phương thức thanh toán ban đầu</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Thời gian xử lý hoàn tiền: 3-5 ngày làm việc</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Miễn phí vận chuyển đổi trả cho đơn hàng trên 500.000đ</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Exchange Policy -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                        </svg>
                        Chính sách đổi hàng
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <ul class="space-y-3 text-slate-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Đổi size, màu sắc trong vòng 30 ngày</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Đổi sang sản phẩm khác cùng giá trị hoặc cao hơn</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Bù thêm tiền nếu đổi sang sản phẩm giá cao hơn</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Hoàn tiền thừa nếu đổi sang sản phẩm giá thấp hơn</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Contact Info -->
            <div class="mt-12 bg-gradient-to-r from-orange-600 to-red-600 rounded-2xl p-8 text-white">
                <h3 class="text-xl font-bold mb-4">Cần hỗ trợ đổi trả?</h3>
                <p class="mb-4">Liên hệ với chúng tôi để được tư vấn và hỗ trợ đổi trả nhanh chóng.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="tel:1900123456" class="inline-flex items-center px-6 py-3 bg-white text-orange-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        0978187088
                    </a>
                    <a href="mailto:returns@danielwellington.vn" class="inline-flex items-center px-6 py-3 bg-white text-orange-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        returns@danielwellington.vn
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
