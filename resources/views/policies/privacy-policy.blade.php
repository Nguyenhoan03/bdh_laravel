@extends('layouts.app')

@section('title', 'Chính sách bảo mật - Daniel Wellington Vietnam')

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
                <li class="text-slate-900 font-semibold">Chính sách bảo mật</li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-600 rounded-2xl mb-8 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-900 via-purple-900 to-pink-900 bg-clip-text text-transparent mb-6">
                Chính sách bảo mật
            </h1>
            <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed text-lg">
                Cam kết bảo vệ thông tin cá nhân và quyền riêng tư của khách hàng với các biện pháp bảo mật tiên tiến
            </p>
        </div>
    </div>
</div>

<!-- Content -->
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <!-- Privacy Overview -->
            <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl p-8 mb-8 border border-purple-100">
                <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                    <svg class="w-6 h-6 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Cam kết bảo mật
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-purple-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Bảo mật tuyệt đối</h3>
                        <p class="text-slate-600 text-sm">Mã hóa SSL 256-bit</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-purple-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">Không chia sẻ</h3>
                        <p class="text-slate-600 text-sm">Thông tin cá nhân</p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-purple-100 text-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2">24/7</h3>
                        <p class="text-slate-600 text-sm">Giám sát bảo mật</p>
                    </div>
                </div>
            </div>

            <div class="space-y-8">
                <!-- Information Collection -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-purple-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Thông tin chúng tôi thu thập
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3">📝 Thông tin cá nhân</h3>
                            <ul class="space-y-2 text-slate-600">
                                <li>• Họ tên, địa chỉ email</li>
                                <li>• Số điện thoại liên lạc</li>
                                <li>• Địa chỉ giao hàng</li>
                                <li>• Thông tin thanh toán</li>
                                <li>• Ngày sinh (tùy chọn)</li>
                            </ul>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm border border-slate-200">
                            <h3 class="text-lg font-semibold text-slate-900 mb-3">📊 Thông tin sử dụng</h3>
                            <ul class="space-y-2 text-slate-600">
                                <li>• Lịch sử mua hàng</li>
                                <li>• Sở thích sản phẩm</li>
                                <li>• Thời gian truy cập website</li>
                                <li>• Địa chỉ IP và cookies</li>
                                <li>• Thiết bị và trình duyệt</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Information Usage -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Mục đích sử dụng thông tin
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <ul class="space-y-3 text-slate-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Xử lý và giao hàng đơn hàng của bạn</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Cung cấp dịch vụ khách hàng và hỗ trợ kỹ thuật</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Gửi thông tin về sản phẩm mới và khuyến mãi</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Cải thiện trải nghiệm người dùng trên website</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Phân tích và thống kê để phát triển dịch vụ</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Data Protection -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                        Biện pháp bảo vệ dữ liệu
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-green-50 rounded-xl p-6 border border-green-100">
                            <h3 class="text-lg font-semibold text-green-800 mb-3">🔒 Bảo mật kỹ thuật</h3>
                            <ul class="space-y-2 text-slate-700">
                                <li>• Mã hóa SSL 256-bit</li>
                                <li>• Firewall và hệ thống phát hiện xâm nhập</li>
                                <li>• Sao lưu dữ liệu định kỳ</li>
                                <li>• Cập nhật bảo mật thường xuyên</li>
                                <li>• Giám sát 24/7</li>
                            </ul>
                        </div>
                        <div class="bg-blue-50 rounded-xl p-6 border border-blue-100">
                            <h3 class="text-lg font-semibold text-blue-800 mb-3">👥 Bảo mật nhân sự</h3>
                            <ul class="space-y-2 text-slate-700">
                                <li>• Đào tạo nhân viên về bảo mật</li>
                                <li>• Phân quyền truy cập dữ liệu</li>
                                <li>• Kiểm tra lý lịch nhân viên</li>
                                <li>• Ký cam kết bảo mật</li>
                                <li>• Giám sát hoạt động truy cập</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- Data Sharing -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                        </svg>
                        Chia sẻ thông tin
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <p class="text-slate-700 mb-4">Chúng tôi cam kết không bán, cho thuê hoặc chia sẻ thông tin cá nhân của bạn với bên thứ ba, trừ các trường hợp sau:</p>
                        <ul class="space-y-3 text-slate-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Đơn vị vận chuyển để giao hàng (chỉ thông tin cần thiết)</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Đối tác thanh toán để xử lý giao dịch</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Khi có yêu cầu từ cơ quan pháp luật</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span>Khi bạn đồng ý chia sẻ thông tin</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- User Rights -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Quyền của người dùng
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <ul class="space-y-3 text-slate-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Quyền truy cập và xem thông tin cá nhân đã lưu trữ</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Quyền chỉnh sửa và cập nhật thông tin</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Quyền xóa tài khoản và dữ liệu cá nhân</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Quyền từ chối nhận email marketing</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Quyền khiếu nại về việc xử lý dữ liệu</span>
                            </li>
                        </ul>
                    </div>
                </section>

                <!-- Cookies Policy -->
                <section>
                    <h2 class="text-2xl font-bold text-slate-900 mb-4 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                        Chính sách Cookies
                    </h2>
                    <div class="bg-slate-50 rounded-xl p-6">
                        <p class="text-slate-700 mb-4">Chúng tôi sử dụng cookies để cải thiện trải nghiệm người dùng:</p>
                        <ul class="space-y-3 text-slate-700">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span><strong>Cookies cần thiết:</strong> Để website hoạt động bình thường</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span><strong>Cookies hiệu suất:</strong> Phân tích cách sử dụng website</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span><strong>Cookies chức năng:</strong> Ghi nhớ lựa chọn của bạn</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                                <span><strong>Cookies quảng cáo:</strong> Hiển thị quảng cáo phù hợp</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Contact Info -->
            <div class="mt-12 bg-gradient-to-r from-purple-600 to-pink-600 rounded-2xl p-8 text-white">
                <h3 class="text-xl font-bold mb-4">Có câu hỏi về bảo mật?</h3>
                <p class="mb-4">Liên hệ với chúng tôi để được giải đáp mọi thắc mắc về chính sách bảo mật.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="tel:1900123456" class="inline-flex items-center px-6 py-3 bg-white text-purple-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        1900 123 456
                    </a>
                    <a href="mailto:privacy@danielwellington.vn" class="inline-flex items-center px-6 py-3 bg-white text-purple-600 font-semibold rounded-xl hover:bg-slate-50 transition-colors duration-300">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        privacy@danielwellington.vn
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
