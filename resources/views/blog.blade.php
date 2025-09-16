@extends('layouts.app')

@section('title', 'Blog Đồng Hồ 360 - Daniel Wellington Vietnam')

@section('content')
@php
// Mock data for blog posts
$blogPosts = [
    [
        'id' => 1,
        'title' => 'Erawatch – đồng hồ: Điểm đến lý tưởng cho những người đam mê đồng hồ Thụy Sĩ chính hãng',
        'excerpt' => 'Trong thế giới của những cỗ máy thời gian, đồng hồ Thụy Sĩ luôn là biểu tượng của sự tinh tế và chất lượng vượt trội. Erawatch tự hào là điểm đến lý tưởng cho những người đam mê đồng hồ Thụy Sĩ chính hãng...',
        'image' => 'DW00100699-247x296.webp',
        'date' => '2024-08-14',
        'featured' => true,
        'category' => 'Thương hiệu'
    ],
    [
        'id' => 2,
        'title' => 'Tại Sao Grand Seiko Snowflake Là Chiếc Đồng Hồ Biến GS Thành Hiện Tượng Toàn Cầu',
        'excerpt' => 'Ít có thương hiệu đồng hồ nào lại có một cộng đồng người hâm mộ đông đảo và trung thành như Grand Seiko. Và trong số tất cả các mẫu đồng hồ của hãng...',
        'image' => 'DW00100699-247x296.webp',
        'date' => '2024-08-12',
        'featured' => false,
        'category' => 'Grand Seiko'
    ],
    [
        'id' => 3,
        'title' => 'CÁCH PHÂN BIỆT ĐỒNG HỒ DW THẬT GIẢ: Bảo Vệ Túi Tiền và Phong Cách Của Bạn',
        'excerpt' => 'Đồng hồ Daniel Wellington (DW) với thiết kế tối giản, thanh lịch đã trở thành một trong những thương hiệu đồng hồ được yêu thích nhất thế giới...',
        'image' => 'DW00100699-247x296.webp',
        'date' => '2024-08-10',
        'featured' => false,
        'category' => 'Daniel Wellington'
    ],
    [
        'id' => 4,
        'title' => 'Rolex thử nghiệm với chất liệu cho mặt số GMT-Master II, giới thiệu gốm xanh lá và đá sắt hổ cho sinh nhật lần thứ 70 của biểu tượng',
        'excerpt' => 'Rolex giới thiệu hai biến thể GMT-Master II mới, một chiếc trong cấu hình cho sinh nhật lần thứ 70 của biểu tượng với những chất liệu độc đáo...',
        'image' => 'DW00100699-247x296.webp',
        'date' => '2024-08-08',
        'featured' => false,
        'category' => 'Rolex'
    ],
    [
        'id' => 5,
        'title' => 'Rolex Perpetual 1908 Settimo có dây đeo sang trọng mới',
        'excerpt' => 'Mẫu đồng hồ lịch lãm nhất của hãng được trang bị dây đeo bảy mắt xích mới, mang đến sự thoải mái và sang trọng tối đa...',
        'image' => 'DW00100699-247x296.webp',
        'date' => '2024-08-06',
        'featured' => false,
        'category' => 'Rolex'
    ],
    [
        'id' => 6,
        'title' => 'Chào đón sự trở lại của sự xa hoa với Đồng hồ để bàn phức tạp của Patek Philippe',
        'excerpt' => 'Patek giới thiệu phiên bản tiếp theo của chiếc đồng hồ Only Watch 2021, với những tính năng phức tạp và thiết kế tinh xảo...',
        'image' => 'DW00100699-247x296.webp',
        'date' => '2024-08-04',
        'featured' => false,
        'category' => 'Patek Philippe'
    ],
    [
        'id' => 7,
        'title' => 'Dự đoán về Tudor 2025 – tại sao người em của Rolex có thể làm lu mờ người anh trong năm nay',
        'excerpt' => 'Chúng ta chỉ còn chưa đầy một tháng nữa là đến Watches and Wonders Geneva, và Tudor đang chuẩn bị những bất ngờ lớn...',
        'image' => 'DW00100699-247x296.webp',
        'date' => '2024-08-02',
        'featured' => false,
        'category' => 'Tudor'
    ],
    [
        'id' => 8,
        'title' => 'Điều gì khiến bộ sưu tập Citizen Premier mới đủ tiêu chuẩn là đồng hồ xa xỉ?',
        'excerpt' => 'Các dòng đồng hồ Citizen Series8 và Attesa hiện đã được gom nhóm dưới bộ sưu tập Premier mới với những tiêu chuẩn xa xỉ...',
        'image' => 'DW00100699-247x296.webp',
        'date' => '2024-07-30',
        'featured' => false,
        'category' => 'Citizen'
    ]
];

$categories = [
    'Bộ Quà Tặng Đồng Hồ',
    'Dây Đồng Hồ', 
    'Đồng Hồ Cặp',
    'Đồng Hồ Nam',
    'Đồng Hồ Nữ',
    'Trang Sức'
];

$tags = [
    'Casio', 'Citizen', 'classic', 'Cách bảo quản và vệ sinh đồng hồ DW', 'daniel wellington',
    'dây da Bondi', 'dây da trắng Bondi', 'dây dw petite bondi', 'dây kim loại', 'Dây Nato DW',
    'dây vải Nato', 'dây đồng hồ', 'dây đồng hồ dw', 'Grand Seiko', 'Hamilton', 'Hublot',
    'Hướng dẫn điều chỉnh dây đồng hồ DW petite', 'Review đồng hồ DW', 'Richard Mille', 'Rolex',
    'Seiko', 'Tissot', 'Tudor', 'Vacheron Constantin', 'Victorinox', 'Vòng tay Cuff chính hãng',
    'vòng tay daniel wellington', 'Vòng tay Daniel Wellington nữ chính hãng', 'Vòng tay DW Chính Hãng',
    'đồng hồ Casio', 'đồng hồ daniel', 'đồng hồ daniel wellington', 'đồng hồ daniel wellington nữ',
    'đồng hồ dw', 'đồng hồ dw nam', 'đồng hồ dw petite bondi', 'đồng hồ dw xách tay',
    'đồng hồ Hamilton', 'đồng hồ hàng hiệu', 'đồng hồ hàng hiệu giá rẻ', 'đồng hồ Rolex',
    'đồng hồ Seiko', 'đồng hồ thụy Sĩ', 'đồng hồ Tissot'
];

// Pagination
$currentPage = request()->get('page', 1);
$perPage = 5;
$totalPosts = count($blogPosts);
$totalPages = ceil($totalPosts / $perPage);
$offset = ($currentPage - 1) * $perPage;
$paginatedPosts = array_slice($blogPosts, $offset, $perPage);
@endphp

<!-- Blog Header -->
<section class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <div class="mb-4">
            <nav class="text-sm text-gray-600">
                <a href="/" class="hover:text-blue-600">ĐỒNG HỒ DW</a> / 
                <span class="text-gray-900 font-semibold">BLOG ĐỒNG HỒ 360</span>
            </nav>
        </div>
        
        <div class="text-center">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 uppercase tracking-wide mb-2 roboto-condensed">
                LƯU TRỮ DANH MỤC: BLOG ĐỒNG HỒ 360
            </h1>
            <h2 class="text-xl md:text-2xl font-semibold text-gray-800 roboto-condensed">
                Blog Đồng Hồ 360
            </h2>
        </div>
    </div>
</section>

<!-- Blog Content -->
<section class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <!-- Blog Posts List -->
                <div class="space-y-8">
                    @foreach($paginatedPosts as $index => $post)
                    @if($index == 0)
                    <!-- First post without image -->
                    <article class="border-b border-gray-200 pb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-3 roboto-condensed leading-tight">
                            {{ $post['title'] }}
                        </h2>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            {{ $post['excerpt'] }}
                        </p>
                    </article>
                    @else
                    <!-- Other posts with image -->
                    <article class="flex flex-col md:flex-row gap-6 border-b border-gray-200 pb-8">
                        <div class="md:w-1/3 flex-shrink-0">
                            <img src="{{ asset('img/' . $post['image']) }}" 
                                 alt="{{ $post['title'] }}" 
                                 class="w-full h-48 md:h-64 object-cover">
                        </div>
                        <div class="md:w-2/3">
                            <h2 class="text-2xl font-bold text-gray-900 mb-3 roboto-condensed leading-tight">
                                {{ $post['title'] }}
                            </h2>
                            <p class="text-gray-600 mb-4 leading-relaxed">
                                {{ $post['excerpt'] }}
                            </p>
                        </div>
                    </article>
                    @endif
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($totalPages > 1)
                <div class="mt-12 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        @if($currentPage > 1)
                            <a href="?page={{ $currentPage - 1 }}" class="px-3 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">‹</a>
                        @endif
                        
                        @for($i = 1; $i <= $totalPages; $i++)
                            @if($i == $currentPage)
                                <a href="#" class="px-3 py-2 bg-blue-600 text-white rounded-md">{{ $i }}</a>
                            @else
                                <a href="?page={{ $i }}" class="px-3 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">{{ $i }}</a>
                            @endif
                        @endfor
                        
                        @if($currentPage < $totalPages)
                            <a href="?page={{ $currentPage + 1 }}" class="px-3 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">›</a>
                        @endif
                    </nav>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Recent Posts -->
                <div class="bg-white p-6 mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 roboto-condensed border-b border-gray-200 pb-2">Bài viết mới</h3>
                    <div class="space-y-4">
                        @foreach(array_slice($blogPosts, 0, 5) as $post)
                        <div class="flex items-start space-x-3 border-b border-gray-100 pb-3 last:border-b-0">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-100 flex flex-col items-center justify-center text-xs text-blue-600 font-semibold">
                                <span>{{ date('d', strtotime($post['date'])) }}</span>
                                <span>{{ date('M', strtotime($post['date'])) }}</span>
                            </div>
                            <div class="flex-1">
                                <img src="{{ asset('img/' . $post['image']) }}" 
                                     alt="{{ $post['title'] }}" 
                                     class="w-12 h-12 object-cover mb-2">
                                <a href="#" class="text-sm text-gray-900 hover:text-blue-600 font-medium leading-tight block">
                                    {{ $post['title'] }}
                                </a>
                                <p class="text-xs text-gray-500 mt-1">Chức năng bình luận bị tắt</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Product Categories -->
                <div class="bg-white p-6 mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 roboto-condensed border-b border-gray-200 pb-2">Danh Mục Sản Phẩm</h3>
                    <ul class="space-y-2">
                        @foreach($categories as $category)
                        <li><a href="#" class="text-gray-900 hover:text-blue-600 text-sm">{{ $category }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Tags -->
                <div class="bg-white p-6">
                    <h3 class="text-lg font-bold text-gray-900 mb-4 roboto-condensed border-b border-gray-200 pb-2">Từ Khóa</h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(array_slice($tags, 0, 15) as $tag)
                        <a href="#" class="px-2 py-1 bg-blue-50 text-blue-900 border border-blue-200 rounded text-xs hover:bg-blue-100">{{ $tag }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
