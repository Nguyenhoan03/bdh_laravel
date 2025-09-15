<!-- resources/views/about.blade.php -->
@extends('layouts.app')

@section('title', 'Về Chúng Tôi - Daniel Wellington')

@section('content')
<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <!-- Hero Section -->
    <div class="text-center mb-16">
        <h1 class="text-5xl font-bold text-gray-900 mb-6">Lịch sử phát triển của thương hiệu Daniel Wellington</h1>
        <p class="text-xl text-gray-600 max-w-4xl mx-auto">
            Từ khởi nghiệp đến thương hiệu toàn cầu
        </p>
    </div>

    <!-- Introduction -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Giới thiệu</h2>
        <div class="prose max-w-none text-gray-600 leading-relaxed">
            <p class="text-lg mb-6">
                Daniel Wellington là một thương hiệu đồng hồ Thụy Điển đã trở thành hiện tượng trong ngành công nghiệp thời trang toàn cầu. Được thành lập vào năm 2011, thương hiệu đã nhanh chóng phát triển từ một ý tưởng khởi nghiệp nhỏ thành một đế chế đồng hồ có mặt tại hơn 90 quốc gia.
            </p>
            <p class="text-lg">
                Câu chuyện thành công của Daniel Wellington không chỉ là minh chứng cho tầm nhìn kinh doanh sáng tạo mà còn là bài học về cách một thương hiệu có thể tạo nên cuộc cách mạng trong thị trường đồng hồ truyền thống.
            </p>
        </div>
    </div>

    <!-- Nguồn gốc và cảm hứng -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Nguồn gốc và cảm hứng</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Cuộc gặp gỡ định mệnh</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Câu chuyện bắt đầu khi Filip Tysander, người sáng lập Daniel Wellington, trong một chuyến du lịch đã gặp một quý ông người Anh tên Daniel Wellington. Tysander bị ấn tượng bởi phong cách trang nhã và đồng hồ NATO dây vải mà Wellington đeo.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Đồng hồ cổ điển này được đeo cùng với dây đồng hồ NATO đầy màu sắc, tạo nên một sự kết hợp độc đáo giữa sang trọng và giản dị.
                </p>
            </div>
            <div class="bg-gray-100 rounded-lg p-8">
                <img src="https://via.placeholder.com/400x300?text=Daniel+Wellington+Story" alt="Daniel Wellington Story" class="w-full rounded-lg">
            </div>
        </div>

        <div class="mt-12">
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Tầm nhìn của Filip Tysander</h3>
            <div class="bg-orange-50 border-l-4 border-orange-500 p-6">
                <p class="text-gray-700 leading-relaxed">
                    Năm 2011, ở tuổi 26, Filip Tysander đã đầu tư 24.000 USD từ tiền tiết kiệm cá nhân để thành lập thương hiệu Daniel Wellington. Với tầm nhìn tạo ra những chiếc đồng hồ vừa tinh tế vừa có giá cả phải chăng, Tysander đã định vị Daniel Wellington trong phân khúc thị trường tầm trung – cao cấp nhưng với mức giá hấp dẫn hơn so với các thương hiệu sang trọng truyền thống.
                </p>
            </div>
        </div>
    </div>

    <!-- Chiến lược tiếp thị -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Chiến lược tiếp thị đột phá</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Sức mạnh của mạng xã hội</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Một trong những yếu tố quan trọng làm nên thành công của Daniel Wellington là chiến lược tiếp thị trên mạng xã hội. Thay vì đầu tư vào quảng cáo truyền thống tốn kém, thương hiệu đã tập trung vào Instagram.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Daniel Wellington đã triển khai chương trình "#DWPickoftheDay", khuyến khích người dùng đăng ảnh đồng hồ của họ lên mạng xã hội.
                </p>
            </div>
            
            <div class="bg-white border border-gray-200 rounded-lg p-6 shadow-sm">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Hợp tác với người có ảnh hưởng</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Trước khi "tiếp thị người có ảnh hưởng" trở thành xu hướng phổ biến, Daniel Wellington đã tiên phong trong việc hợp tác với những người có sức ảnh hưởng trên mạng xã hội.
                </p>
                <p class="text-gray-600 leading-relaxed">
                    Thương hiệu đã gửi đồng hồ miễn phí cho những người có ảnh hưởng và khuyến khích họ chia sẻ hình ảnh với hashtag #DanielWellington.
                </p>
            </div>
        </div>
    </div>

    <!-- Thiết kế đặc trưng -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Thiết kế đặc trưng và triết lý sản phẩm</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Tối giản và thanh lịch</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Daniel Wellington nổi tiếng với triết lý thiết kế "less is more" (càng đơn giản càng tốt). Các mẫu đồng hồ của thương hiệu theo đuổi sự tối giản với mặt đồng hồ mỏng, sạch sẽ không có số, và khung viền tinh tế.
                </p>
                
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Hệ thống dây đồng hồ có thể thay đổi</h3>
                <p class="text-gray-600 leading-relaxed">
                    Một trong những đổi mới quan trọng của Daniel Wellington là hệ thống dây đồng hồ có thể thay đổi dễ dàng. Khách hàng có thể mua một chiếc đồng hồ và nhiều dây đồng hồ khác nhau để thay đổi phong cách theo mỗi dịp khác nhau.
                </p>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-gray-100 rounded-lg p-4">
                    <img src="https://via.placeholder.com/200x200?text=Minimalist+Design" alt="Minimalist Design" class="w-full rounded-lg mb-3">
                    <h4 class="font-bold text-gray-900">Tối giản</h4>
                </div>
                <div class="bg-gray-100 rounded-lg p-4">
                    <img src="https://via.placeholder.com/200x200?text=Interchangeable+Straps" alt="Interchangeable Straps" class="w-full rounded-lg mb-3">
                    <h4 class="font-bold text-gray-900">Dây thay đổi</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Tăng trưởng toàn cầu -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold text-gray-900 mb-6">Tăng trưởng toàn cầu và mở rộng thị trường</h2>
        
        <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-lg p-8 text-white">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2">230M</div>
                    <div class="text-orange-100">USD doanh thu 2015</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">90+</div>
                    <div class="text-orange-100">Quốc gia</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2">5000+</div>
                    <div class="text-orange-100">Điểm bán lẻ</div>
                </div>
            </div>
        </div>
        
        <div class="mt-8">
            <p class="text-gray-600 leading-relaxed">
                Chỉ trong vòng vài năm sau khi thành lập, Daniel Wellington đã chứng kiến sự tăng trưởng chóng mặt. Doanh thu của công ty đã tăng từ khoảng 15 triệu USD năm 2013 lên đến 230 triệu USD vào năm 2015, với lợi nhuận ước tính khoảng 111 triệu USD.
            </p>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="text-center bg-gray-50 rounded-lg p-12">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Khám phá bộ sưu tập của chúng tôi</h2>
        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
            Trải nghiệm sự tinh tế và thanh lịch của Daniel Wellington với bộ sưu tập đồng hồ đa dạng phù hợp với mọi phong cách.
        </p>
        <a href="/products" class="inline-block bg-orange-500 text-white px-8 py-3 rounded-lg font-medium hover:bg-orange-600 transition-colors">
            Xem Sản Phẩm
        </a>
    </div>
</div>
@endsection