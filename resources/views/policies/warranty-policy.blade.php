@extends('layouts.app')

@section('title', $meta['title'] ?? 'Chính sách bảo hành - Daniel Wellington Vietnam')

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
                <li class="text-slate-900 font-semibold">Chính sách bảo hành</li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl mb-8 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-900 via-green-900 to-emerald-900 bg-clip-text text-transparent mb-6">
                Chính sách bảo hành
            </h1>
            <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed text-lg">
                Cam kết bảo hành chính hãng và dịch vụ hậu mãi tốt nhất cho mọi sản phẩm Daniel Wellington
            </p>
        </div>
    </div>
</div>

<!-- Content -->
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <!-- Warranty Overview -->
            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-8 mb-8 border border-green-100">
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                    <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Tổng quan bảo hành
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-green-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-white font-bold text-lg">2</span>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Năm bảo hành</h3>
                        <p class="text-slate-600 text-sm">Bảo hành chính hãng toàn cầu</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-green-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Miễn phí</h3>
                        <p class="text-slate-600 text-sm">Thay pin trọn đời</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-green-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Toàn cầu</h3>
                        <p class="text-slate-600 text-sm">Bảo hành tại mọi nơi</p>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <!-- Warranty Coverage -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-green-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Phạm vi bảo hành
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-green-50 rounded-xl p-6 border border-green-100">
                            <h3 class="text-lg font-semibold text-green-800 mb-3">✅ Được bảo hành</h3>
                            <ul class="space-y-2 text-slate-700">
                                <li>• Lỗi kỹ thuật từ nhà sản xuất</li>
                                <li>• Hỏng hóc do chất lượng vật liệu</li>
                                <li>• Lỗi hiển thị hoặc chức năng</li>
                                <li>• Hư hỏng do lỗi sản xuất</li>
                                <li>• Thay pin miễn phí trọn đời</li>
                                <li>• Điều chỉnh dây đeo miễn phí</li>
                            </ul>
                        </div>
                        <div class="bg-red-50 rounded-xl p-6 border border-red-100">
                            <h3 class="text-lg font-semibold text-red-800 mb-3">❌ Không được bảo hành</h3>
                            <ul class="space-y-2 text-slate-700">
                                <li>• Hư hỏng do va đập, rơi rớt</li>
                                <li>• Tiếp xúc với nước quá mức cho phép</li>
                                <li>• Hư hỏng do sử dụng sai cách</li>
                                <li>• Mất mát, thất lạc</li>
                                <li>• Hư hỏng do sửa chữa không chính hãng</li>
                                <li>• Hư hỏng do thiên tai, hỏa hoạn</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Warranty Process -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Quy trình bảo hành
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">1</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Liên hệ</h4>
                                <p class="text-sm text-slate-600">Gọi hotline hoặc đến cửa hàng</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">2</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Kiểm tra</h4>
                                <p class="text-sm text-slate-600">Kỹ thuật viên kiểm tra sản phẩm</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">3</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Sửa chữa</h4>
                                <p class="text-sm text-slate-600">Thực hiện bảo hành/sửa chữa</p>
                            </div>
                            <div class="text-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <span class="text-white font-bold">4</span>
                                </div>
                                <h4 class="font-semibold text-slate-900 mb-2">Hoàn trả</h4>
                                <p class="text-sm text-slate-600">Giao trả sản phẩm cho khách hàng</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Warranty Terms -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                        Điều kiện bảo hành
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <ul class="space-y-3 text-slate-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Sản phẩm phải còn trong thời hạn bảo hành (2 năm từ ngày mua)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Có hóa đơn mua hàng hoặc phiếu bảo hành chính hãng</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Sản phẩm chưa được sửa chữa bởi bên thứ ba</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Không có dấu hiệu cố ý làm hỏng hoặc sử dụng sai mục đích</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Service Centers -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Trung tâm bảo hành
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3">🏢 Hà Nội</h3>
                            <div class="space-y-2 text-slate-600">
                                <p><strong>Địa chỉ:</strong> 590 Cách Mạng Tháng 8, Phường Nhiêu Lộc, Hồ Chí Minh. Số nhà 04 Lô B</p>
                                <p><strong>Điện thoại:</strong> 024 1234 5678</p>
                                <p><strong>Giờ làm việc:</strong> 8:00 - 20:00 (T2-CN)</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3">🏢 TP.HCM</h3>
                            <div class="space-y-2 text-slate-600">
                                <p><strong>Địa chỉ:</strong> 590 Cách Mạng Tháng 8, Phường Nhiêu Lộc, Hồ Chí Minh. Số nhà 04 Lô B</p>
                                <p><strong>Điện thoại:</strong> 028 8765 4321</p>
                                <p><strong>Giờ làm việc:</strong> 8:00 - 20:00 (T2-CN)</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Contact Info -->
            <div class="mt-12 bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl p-8 text-white">
                <h3 class="text-xl font-bold mb-4">Cần hỗ trợ bảo hành?</h3>
                <p class="mb-4">Liên hệ với chúng tôi để được tư vấn và hỗ trợ bảo hành nhanh chóng.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="tel:1900123456" class="inline-flex items-center px-6 py-3 bg-white text-green-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        0978187088
                    </a>
                    <a href="mailto:warranty@danielwellington.vn" class="inline-flex items-center px-6 py-3 bg-white text-green-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        warranty@danielwellington.vn
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
