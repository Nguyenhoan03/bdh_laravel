@extends('layouts.app')

@section('title', $meta['title'] ?? 'Về chúng tôi - Daniel Wellington Vietnam')

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
                <li class="text-slate-900 font-semibold">Về chúng tôi</li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl mb-8 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 bg-clip-text text-transparent mb-6">
                Về chúng tôi
            </h1>
            <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed text-lg">
                Daniel Wellington Vietnam - Đại diện chính thức của thương hiệu đồng hồ Thụy Điển nổi tiếng thế giới
            </p>
        </div>
    </div>
</div>

<!-- Content -->
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Company Story -->
        <section class="mb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-slate-900 mb-6">Câu chuyện của chúng tôi</h2>
                    <div class="space-y-4 text-slate-600 leading-relaxed">
                        <p>Daniel Wellington Vietnam được thành lập với sứ mệnh mang đến cho người Việt Nam những chiếc đồng hồ tinh tế và thanh lịch từ thương hiệu Daniel Wellington nổi tiếng thế giới.</p>
                        <p>Với hơn 5 năm kinh nghiệm trong lĩnh vực đồng hồ cao cấp, chúng tôi tự hào là đại diện chính thức của Daniel Wellington tại Việt Nam, cam kết cung cấp những sản phẩm chính hãng 100% với chất lượng vượt trội.</p>
                        <p>Chúng tôi tin rằng mỗi chiếc đồng hồ không chỉ là một phụ kiện thời trang mà còn là biểu tượng của phong cách sống, sự tự tin và cá tính riêng của mỗi người.</p>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 rounded-3xl p-8 shadow-xl">
                        <img src="{{ asset('img/DW00100699-247x296.webp') }}" alt="Daniel Wellington Store" class="w-full h-64 object-cover rounded-2xl shadow-lg">
                        <div class="absolute -bottom-4 -right-4 bg-white rounded-2xl p-4 shadow-lg">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600">5+</div>
                                <div class="text-sm text-slate-600">Năm kinh nghiệm</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="mb-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 shadow-lg border border-blue-100">
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Sứ mệnh</h3>
                    <p class="text-slate-600 leading-relaxed">Mang đến cho khách hàng Việt Nam những sản phẩm đồng hồ Daniel Wellington chính hãng với chất lượng tốt nhất, dịch vụ khách hàng xuất sắc và trải nghiệm mua sắm đáng nhớ.</p>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl p-8 shadow-lg border border-green-100">
                    <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-4">Tầm nhìn</h3>
                    <p class="text-slate-600 leading-relaxed">Trở thành địa chỉ tin cậy hàng đầu tại Việt Nam cho những ai yêu thích phong cách tối giản, thanh lịch và muốn sở hữu những chiếc đồng hồ chất lượng cao từ thương hiệu quốc tế.</p>
                </div>
            </div>
        </section>

        <!-- Values -->
        <section class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Giá trị cốt lõi</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Những nguyên tắc và giá trị định hướng mọi hoạt động của chúng tôi</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Chất lượng</h3>
                    <p class="text-slate-600">Cam kết cung cấp sản phẩm chính hãng 100% với chất lượng vượt trội</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Tận tâm</h3>
                    <p class="text-slate-600">Phục vụ khách hàng với sự tận tâm, chu đáo và chuyên nghiệp</p>
                </div>
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Đổi mới</h3>
                    <p class="text-slate-600">Không ngừng cải tiến và đổi mới để mang đến trải nghiệm tốt nhất</p>
                </div>
            </div>
        </section>

        <!-- Team -->
        <section class="mb-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Đội ngũ của chúng tôi</h2>
                <p class="text-slate-600 max-w-2xl mx-auto">Những con người tài năng và đam mê tạo nên thành công của Daniel Wellington Vietnam</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-white text-2xl font-bold">CEO</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Nguyễn Văn A</h3>
                    <p class="text-blue-600 font-semibold mb-3">Giám đốc điều hành</p>
                    <p class="text-slate-600 text-sm">Với hơn 10 năm kinh nghiệm trong lĩnh vực thời trang và phụ kiện cao cấp</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-white text-2xl font-bold">CTO</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Trần Thị B</h3>
                    <p class="text-green-600 font-semibold mb-3">Giám đốc công nghệ</p>
                    <p class="text-slate-600 text-sm">Chuyên gia về e-commerce và phát triển hệ thống quản lý khách hàng</p>
                </div>
                <div class="text-center">
                    <div class="w-32 h-32 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-white text-2xl font-bold">CMO</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Lê Văn C</h3>
                    <p class="text-purple-600 font-semibold mb-3">Giám đốc marketing</p>
                    <p class="text-slate-600 text-sm">Chuyên gia về thương hiệu và chiến lược marketing số</p>
                </div>
            </div>
        </section>

        <!-- Achievements -->
        <section class="mb-16">
            <div class="bg-gradient-to-r from-slate-50 to-blue-50 rounded-3xl p-12 shadow-xl">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-slate-900 mb-4">Thành tựu của chúng tôi</h2>
                    <p class="text-slate-600">Những con số ấn tượng phản ánh sự tin tưởng của khách hàng</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-600 mb-2">10,000+</div>
                        <div class="text-slate-600">Khách hàng hài lòng</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-green-600 mb-2">50,000+</div>
                        <div class="text-slate-600">Sản phẩm đã bán</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-purple-600 mb-2">98%</div>
                        <div class="text-slate-600">Tỷ lệ hài lòng</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-orange-600 mb-2">24/7</div>
                        <div class="text-slate-600">Hỗ trợ khách hàng</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Info -->
        <section>
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl p-12 text-white">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold mb-4">Liên hệ với chúng tôi</h2>
                    <p class="text-blue-100 max-w-2xl mx-auto">Chúng tôi luôn sẵn sàng lắng nghe và hỗ trợ bạn mọi lúc, mọi nơi</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Điện thoại</h3>
                        <p class="text-blue-100">0978187088</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Email</h3>
                        <p class="text-blue-100">cskh@donghodanielwellington.vn</p>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Địa chỉ</h3>
                        <p class="text-blue-100">590 Cách Mạng Tháng 8, Phường Nhiêu Lộc, Hồ Chí Minh. Số nhà 04 Lô B</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection