@extends('layouts.app')

@section('title', 'Bound Durham Gold DW00100696 - Nữ 32x22mm - Daniel Wellington Vietnam')

@section('content')

<!-- Product Detail Header -->
<section class="py-4 bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <div class="mb-4">
            <nav class="text-sm text-gray-600">
                <a href="/" class="hover:text-blue-600">Trang chủ</a> / 
                <a href="/dong-ho-nu" class="hover:text-blue-600">Đồng Hồ Nữ</a>
            </nav>
        </div>
    </div>
</section>

<!-- Product Detail Content -->
<section class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Product Image -->
                <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden">
                    <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                         alt="Bound Durham Gold DW00100696" 
                         class="w-full h-full object-cover">
                </div>
                
                <!-- Product Gallery Thumbnails -->
                <div class="grid grid-cols-4 gap-2">
                    <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer border-2 border-blue-500">
                        <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                             alt="Bound Durham Gold DW00100696" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer border border-gray-200">
                        <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                             alt="Bound Durham Gold DW00100696" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer border border-gray-200">
                        <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                             alt="Bound Durham Gold DW00100696" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="aspect-square bg-gray-100 rounded-lg overflow-hidden cursor-pointer border border-gray-200">
                        <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                             alt="Bound Durham Gold DW00100696" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
        </div>
        
            <!-- Product Information -->
            <div class="space-y-6">
                <!-- Product Title -->
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2 roboto-condensed">
                        Bound Durham Gold DW00100696 – Nữ 32x22mm
            </h1>
                    <div class="flex items-center space-x-2 text-sm text-gray-600">
                        <span>DW00100699</span>
                        <span>•</span>
                        <span>Bound Black Crocodile Rose Gold</span>
                    </div>
                </div>

                <!-- Price Section -->
                <div class="space-y-2">
                    <div class="flex items-center space-x-3">
                        <span class="text-2xl font-bold text-red-600">₫1.850.000</span>
                        <span class="text-lg text-gray-500 line-through">₫2.950.000</span>
                        <span class="bg-red-100 text-red-800 text-sm font-semibold px-2 py-1 rounded">-37%</span>
                    </div>
                    <p class="text-sm text-gray-600">
                        <span class="text-gray-500">Giá gốc là:</span> ₫2.950.000.
                        <span class="text-gray-500">Giá hiện tại là:</span> ₫1.850.000.
                    </p>
                </div>

                <!-- Promotion Programs -->
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h3 class="text-sm font-bold text-blue-900 mb-3">CHƯƠNG TRÌNH KHUYẾN MÃI</h3>
                    <ul class="space-y-2 text-sm text-blue-800">
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            KIỂM HÀNG TRƯỚC KHI THANH TOÁN
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            MIỄN PHÍ THAY PIN TRỌN ĐỜI
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-green-600 mr-2"></i>
                            TẶNG GÓI BẢO HÀNH 5 NĂM
                        </li>
                    </ul>
                </div>

                <!-- Quantity and Add to Cart -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <label class="text-sm font-medium text-gray-700">Số lượng:</label>
                        <div class="flex items-center border border-gray-300 rounded-md">
                            <button class="px-3 py-2 text-gray-600 hover:text-gray-800">-</button>
                            <input type="number" value="1" min="1" class="w-16 text-center border-0 focus:ring-0">
                            <button class="px-3 py-2 text-gray-600 hover:text-gray-800">+</button>
                        </div>
                    </div>
                    
                    <button class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                        Thêm vào giỏ hàng
                    </button>
                </div>

                <!-- Product Meta -->
                <div class="text-sm text-gray-600 space-y-1">
                    <p><span class="font-medium">Danh mục:</span> Đồng Hồ Nữ</p>
                    <p><span class="font-medium">Thẻ:</span> 
                        <span class="text-blue-600">Bound</span>, 
                        <span class="text-blue-600">BOUND 3-LINK</span>, 
                        <span class="text-blue-600">bound 3-link gold</span>, 
                        <span class="text-blue-600">Bound 3-Link Rose Gold</span>, 
                        <span class="text-blue-600">Bound Durham Gold</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Description -->
<section class="py-8 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Description -->
            <div class="lg:col-span-2">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h2 class="text-xl font-bold text-gray-900 mb-4 roboto-condensed">Mô tả</h2>
                    
                    <!-- Product Rating -->
                    <div class="flex items-center mb-4">
                        <div class="flex items-center">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star text-yellow-400"></i>
                            @endfor
                        </div>
                        <span class="ml-2 text-sm text-gray-600">5/5 - (1 bình chọn)</span>
                    </div>

                    <!-- Product Specifications -->
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Thương hiệu:</span>
                            <span class="text-gray-900">Daniel Wellington (DW)</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Xuất xứ:</span>
                            <span class="text-gray-900">Thụy Điển</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Độ chịu nước:</span>
                            <span class="text-gray-900">3 ATM (Đi mưa nhỏ)</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Đường kính:</span>
                            <span class="text-gray-900">32 x 22 mm</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Độ dày mặt:</span>
                            <span class="text-gray-900">7 mm</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Cấu tạo máy:</span>
                            <span class="text-gray-900">Máy Miyota Nhật Bản</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Chất liệu kính:</span>
                            <span class="text-gray-900">Kính khoáng</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Chất liệu dây:</span>
                            <span class="text-gray-900">Da</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <span class="font-medium text-gray-700">Chất liệu vỏ:</span>
                            <span class="text-gray-900">Thép không gỉ 316L</span>
                        </div>
                </div>

                    <!-- Detailed Description -->
                    <div class="prose max-w-none">
                        <h3 class="text-lg font-bold text-gray-900 mb-3">Đánh giá chi tiết: Daniel Wellington Bound Durham Gold DW00100696</h3>
                        
                        <h4 class="text-md font-semibold text-gray-800 mb-2">Tổng quan</h4>
                        <p class="text-gray-700 mb-4">
                            Daniel Wellington Bound Durham Gold DW00100696 là một mẫu đồng hồ thuộc bộ sưu tập Bound mới của nhà DW, kết hợp giữa thiết kế hiện đại với chất liệu cao cấp hơn so với các dòng truyền thống của hãng.
                        </p>

                        <h4 class="text-md font-semibold text-gray-800 mb-2">Thiết kế và ngoại hình</h4>
                        <ul class="list-disc list-inside text-gray-700 mb-4 space-y-1">
                            <li><strong>Mặt đồng hồ:</strong> Mặt số màu trắng eggshell tinh tế, đường kính khoảng 32mm</li>
                            <li><strong>Viền đồng hồ:</strong> Mạ vàng PVD (Physical Vapor Deposition) sáng bóng, mang đến vẻ sang trọng</li>
                            <li><strong>Mặt kính:</strong> Kính khoáng cứng, chống trầy xước nhẹ</li>
                            <li><strong>Độ mỏng:</strong> Khoảng 6mm, thuộc dạng ultra-slim, tạo cảm giác nhẹ nhàng khi đeo</li>
                        </ul>

                        <h4 class="text-md font-semibold text-gray-800 mb-2">Dây đeo Durham</h4>
                        <ul class="list-disc list-inside text-gray-700 mb-4 space-y-1">
                            <li><strong>Chất liệu:</strong> Dây da Durham cao cấp màu nâu trung tính</li>
                            <li><strong>Đặc điểm:</strong> Bề mặt vân da tự nhiên, đường may tỉ mỉ, viền cạnh được xử lý kỹ</li>
                            <li><strong>Khóa:</strong> Khóa kim mạ vàng đồng bộ với mặt đồng hồ</li>
                            <li><strong>Chiều rộng:</strong> 20mm, thon gọn và thanh lịch</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <!-- Shop Information -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 roboto-condensed border-b border-gray-200 pb-2">Địa chỉ Shop</h3>
                    <div class="space-y-3 text-sm">
                        <div>
                            <span class="font-medium text-gray-700">Thương hiệu:</span>
                            <span class="text-gray-900">Daniel Wellington</span>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Website:</span>
                            <a href="https://donghodanielwellington.vn/" class="text-blue-600 hover:underline">donghodanielwellington.vn</a>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Email:</span>
                            <span class="text-gray-900">cskh@donghodanielwellington.vn</span>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Hotline:</span>
                            <span class="text-gray-900">0978187088</span>
                        </div>
                        <div>
                            <span class="font-medium text-gray-700">Địa chỉ:</span>
                            <span class="text-gray-900">590 Cách Mạng Tháng 8, Phường Nhiêu Lộc, Hồ Chí Minh. Số nhà 04 Lô B</span>
                            </div>
                            </div>
                        </div>

                <!-- Related Products -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 roboto-condensed border-b border-gray-200 pb-2">Sản phẩm tương tự</h3>
                    <div class="space-y-4">
                        <!-- Related Product 1 -->
                        <div class="flex space-x-3">
                            <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                                 alt="CLASSIC BAYSWATER DW00100281" 
                                 class="w-16 h-16 object-cover rounded">
                            <div class="flex-1">
                                <h4 class="text-sm font-medium text-gray-900 mb-1">CLASSIC BAYSWATER DW00100281 – Size 36mm</h4>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-bold text-red-600">₫1.550.000</span>
                                    <span class="text-xs text-gray-500 line-through">₫2.200.000</span>
                                    <span class="bg-red-100 text-red-800 text-xs px-1 rounded">-30%</span>
                                </div>
                    </div>
                </div>

                        <!-- Related Product 2 -->
                        <div class="flex space-x-3">
                            <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                                 alt="ICONIC LINK DW00100206" 
                                 class="w-16 h-16 object-cover rounded">
                            <div class="flex-1">
                                <h4 class="text-sm font-medium text-gray-900 mb-1">ICONIC LINK DW00100206 – Size 32mm</h4>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-bold text-red-600">₫1.850.000</span>
                                    <span class="text-xs text-gray-500 line-through">₫2.850.000</span>
                                    <span class="bg-red-100 text-red-800 text-xs px-1 rounded">-35%</span>
                                </div>
                            </div>
                </div>

                        <!-- Related Product 3 -->
                        <div class="flex space-x-3">
                            <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                                 alt="CLASSIC OXFORD DW00100029" 
                                 class="w-16 h-16 object-cover rounded">
                            <div class="flex-1">
                                <h4 class="text-sm font-medium text-gray-900 mb-1">CLASSIC OXFORD DW00100029 – Size 36mm</h4>
                                <div class="flex items-center space-x-2">
                                    <span class="text-sm font-bold text-red-600">₫1.550.000</span>
                                    <span class="text-xs text-gray-500 line-through">₫2.200.000</span>
                                    <span class="bg-red-100 text-red-800 text-xs px-1 rounded">-30%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
