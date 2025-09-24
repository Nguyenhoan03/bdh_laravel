@extends('layouts.app')

@section('title', $meta['title'] ?? 'Liên hệ - Daniel Wellington Vietnam')

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
                <li class="text-slate-900 font-semibold">Liên hệ</li>
            </ol>
        </nav>

        <!-- Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl mb-8 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 bg-clip-text text-transparent mb-6">
                Liên hệ với chúng tôi
            </h1>
            <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed text-lg">
                Chúng tôi luôn sẵn sàng lắng nghe và hỗ trợ bạn. Hãy liên hệ với chúng tôi để được tư vấn tốt nhất
            </p>
        </div>
    </div>
</div>

<!-- Content -->
<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <div class="bg-white rounded-3xl shadow-xl p-8 border border-slate-100">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Gửi tin nhắn cho chúng tôi</h2>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-slate-700 mb-2">Họ và tên *</label>
                                <input type="text" id="name" name="name" required 
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-300"
                                       placeholder="Nhập họ và tên của bạn">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-slate-700 mb-2">Email *</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-300"
                                       placeholder="Nhập địa chỉ email">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-slate-700 mb-2">Số điện thoại</label>
                                <input type="tel" id="phone" name="phone" 
                                       class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-300"
                                       placeholder="Nhập số điện thoại">
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-semibold text-slate-700 mb-2">Chủ đề *</label>
                                <select id="subject" name="subject" required 
                                        class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-300">
                                    <option value="">Chọn chủ đề</option>
                                    <option value="product">Tư vấn sản phẩm</option>
                                    <option value="order">Hỗ trợ đơn hàng</option>
                                    <option value="warranty">Bảo hành</option>
                                    <option value="return">Đổi trả</option>
                                    <option value="shipping">Vận chuyển</option>
                                    <option value="other">Khác</option>
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-semibold text-slate-700 mb-2">Nội dung tin nhắn *</label>
                            <textarea id="message" name="message" rows="6" required 
                                      class="w-full px-4 py-3 border-2 border-slate-200 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all duration-300 resize-none"
                                      placeholder="Nhập nội dung tin nhắn của bạn..."></textarea>
                        </div>
                        
                        <div class="flex items-start space-x-3">
                            <input type="checkbox" id="privacy" name="privacy" required 
                                   class="mt-1 w-4 h-4 text-blue-600 border-2 border-slate-300 rounded focus:ring-blue-500">
                            <label for="privacy" class="text-sm text-slate-600">
                                Tôi đồng ý với <a href="/chinh-sach-bao-mat" class="text-blue-600 hover:text-blue-700 font-semibold">Chính sách bảo mật</a> và cho phép Daniel Wellington Vietnam xử lý thông tin cá nhân của tôi.
                            </label>
                        </div>
                        
                        <button type="submit" 
                                class="w-full px-8 py-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white font-bold rounded-2xl hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                                <span>Gửi tin nhắn</span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="space-y-8">
                <!-- Contact Details -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 shadow-lg border border-blue-100">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Thông tin liên hệ</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-1">Điện thoại</h3>
                                <p class="text-slate-600 mb-2">Hotline hỗ trợ 24/7</p>
                                <a href="tel:1900123456" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors duration-200">0978187088</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-1">Email</h3>
                                <p class="text-slate-600 mb-2">Hỗ trợ qua email</p>
                                <a href="mailto:support@danielwellington.vn" class="text-green-600 font-semibold hover:text-green-700 transition-colors duration-200">support@danielwellington.vn</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-slate-900 mb-1">Địa chỉ</h3>
                                <p class="text-slate-600 mb-2">Trụ sở chính</p>
                                <p class="text-purple-600 font-semibold">123 Nguyễn Huệ, Quận 1, TP.HCM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-3xl p-8 shadow-lg border border-orange-100">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Giờ làm việc</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-2 border-b border-orange-100">
                            <span class="text-slate-700 font-medium">Thứ 2 - Thứ 6</span>
                            <span class="text-orange-600 font-semibold">8:00 - 20:00</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-orange-100">
                            <span class="text-slate-700 font-medium">Thứ 7</span>
                            <span class="text-orange-600 font-semibold">9:00 - 18:00</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-slate-700 font-medium">Chủ nhật</span>
                            <span class="text-orange-600 font-semibold">10:00 - 17:00</span>
                        </div>
                    </div>
                    <div class="mt-6 p-4 bg-orange-100 rounded-xl">
                        <p class="text-orange-800 text-sm font-medium">
                            <svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Hỗ trợ khách hàng 24/7 qua hotline
                        </p>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-gradient-to-br from-slate-50 to-blue-50 rounded-3xl p-8 shadow-lg border border-slate-100">
                    <h2 class="text-2xl font-bold text-slate-900 mb-6">Kết nối với chúng tôi</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <a href="https://twitter.com/danielwellington_vn" target="_blank" class="flex items-center space-x-3 p-4 bg-white rounded-xl hover:shadow-md transition-all duration-300 group">
                            <div class="w-10 h-10 bg-blue-400 rounded-lg flex items-center justify-center group-hover:bg-blue-500 transition-colors duration-300">
                                <i class="fab fa-twitter text-white text-base"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-900">Twitter</div>
                                <div class="text-sm text-slate-600">@danielwellington_vn</div>
                            </div>
                        </a>
                        
                        <a href="https://instagram.com/danielwellington_vn" target="_blank" class="flex items-center space-x-3 p-4 bg-white rounded-xl hover:shadow-md transition-all duration-300 group">
                            <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-lg flex items-center justify-center group-hover:from-purple-600 group-hover:to-pink-600 transition-colors duration-300">
                                <i class="fab fa-instagram text-white text-base"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-900">Instagram</div>
                                <div class="text-sm text-slate-600">@danielwellington_vn</div>
                            </div>
                        </a>
                        
                        <a href="https://linkedin.com/company/daniel-wellington-vn" target="_blank" class="flex items-center space-x-3 p-4 bg-white rounded-xl hover:shadow-md transition-all duration-300 group">
                            <div class="w-10 h-10 bg-blue-700 rounded-lg flex items-center justify-center group-hover:bg-blue-800 transition-colors duration-300">
                                <i class="fab fa-linkedin-in text-white text-base"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-900">LinkedIn</div>
                                <div class="text-sm text-slate-600">Daniel Wellington VN</div>
                            </div>
                        </a>
                        
                        <a href="https://youtube.com/@danielwellington_vn" target="_blank" class="flex items-center space-x-3 p-4 bg-white rounded-xl hover:shadow-md transition-all duration-300 group">
                            <div class="w-10 h-10 bg-red-600 rounded-lg flex items-center justify-center group-hover:bg-red-700 transition-colors duration-300">
                                <i class="fab fa-youtube text-white text-base"></i>
                            </div>
                            <div>
                                <div class="font-semibold text-slate-900">YouTube</div>
                                <div class="text-sm text-slate-600">Daniel Wellington VN</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(form);
        const data = Object.fromEntries(formData);
        
        // Simple validation
        if (!data.name || !data.email || !data.subject || !data.message) {
            alert('Vui lòng điền đầy đủ thông tin bắt buộc!');
            return;
        }
        
        if (!data.privacy) {
            alert('Vui lòng đồng ý với chính sách bảo mật!');
            return;
        }
        
        // Simulate form submission
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        submitBtn.innerHTML = '<span class="flex items-center justify-center space-x-2"><svg class="w-5 h-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg><span>Đang gửi...</span></span>';
        submitBtn.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi trong thời gian sớm nhất.');
            form.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });
});
</script>
@endpush
