@extends('layouts.app')

@section('title', 'Blog Đồng Hồ 360 - Daniel Wellington Vietnam')

@section('content')
<!-- Hero Section with Gradient Background -->
<div class="relative bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-40"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Breadcrumb -->
        <nav class="flex mb-8" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="/" class="text-slate-500 hover:text-slate-700 transition-colors duration-200 font-medium">ĐỒNG HỒ DW</a>
                </li>
                <li class="text-slate-400">/</li>
                <li class="text-slate-900 font-semibold">BLOG ĐỒNG HỒ 360</li>
            </ol>
            </nav>

        <!-- Blog Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl mb-8 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
        </div>
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 bg-clip-text text-transparent mb-6">
                BLOG ĐỒNG HỒ 360
            </h1>
            <p class="text-slate-600 max-w-3xl mx-auto leading-relaxed text-lg">
                Khám phá thế giới đồng hồ qua những bài viết chuyên sâu, đánh giá chi tiết và xu hướng thời trang mới nhất từ các chuyên gia.
            </p>
        </div>
    </div>
</div>

<!-- Blog Content -->
<div class="bg-gradient-to-br from-slate-50 to-blue-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                @if($blogPosts->count() > 0)
                <!-- Blog Posts List -->
                <div class="space-y-12">
                    @foreach($blogPosts as $index => $post)
                    <article class="group scroll-reveal" data-delay="{{ $index * 100 }}">
                        <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-slate-100">
                            <!-- Featured Post (First Post) -->
                    @if($index == 0)
                            <!-- Featured Post Image -->
                            <div class="relative h-64 md:h-80 bg-gradient-to-br from-slate-100 to-blue-100 overflow-hidden">
                                <img src="{{ $post->image_url }}" 
                                     alt="{{ $post->title }}" 
                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                     onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            </div>
                            
                            <div class="p-8">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="flex items-center space-x-2 bg-gradient-to-r from-blue-50 to-indigo-50 px-4 py-2 rounded-2xl border border-blue-100">
                                        <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full animate-pulse"></div>
                                        <span class="text-sm text-blue-700 font-semibold">BÀI VIẾT NỔI BẬT</span>
                                    </div>
                                    <div class="flex items-center space-x-2 text-slate-500 text-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <span>{{ $post->reading_time }} phút đọc</span>
                                    </div>
                                </div>
                                
                                <h2 class="text-3xl font-bold text-slate-900 mb-4 group-hover:text-blue-600 transition-colors duration-300 leading-tight">
                                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                        </h2>
                                
                                <p class="text-slate-600 mb-6 leading-relaxed text-lg">
                                    {{ $post->excerpt }}
                                </p>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center space-x-2">
                                            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center">
                                                <span class="text-white text-sm font-bold">{{ substr($post->author, 0, 1) }}</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-semibold text-slate-900">{{ $post->author }}</p>
                                                <p class="text-xs text-slate-500">{{ $post->formatted_date }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                        <span>Đọc thêm</span>
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                    @else
                            <!-- Regular Posts -->
                            <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/3 flex-shrink-0">
                                    <img src="{{ $post->image_url }}" 
                                         alt="{{ $post->title }}" 
                                         class="w-full h-64 md:h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                         onerror="this.src='{{ asset('img/DW00100699-247x296.webp') }}'">
                                </div>
                                <div class="md:w-2/3 p-8">
                                    <div class="flex items-center space-x-3 mb-4">
                                        <div class="flex items-center space-x-2 text-slate-500 text-sm">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            <span>{{ $post->reading_time }} phút đọc</span>
                                        </div>
                        </div>
                                    
                                    <h2 class="text-2xl font-bold text-slate-900 mb-4 group-hover:text-blue-600 transition-colors duration-300 leading-tight">
                                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                            </h2>
                                    
                                    <p class="text-slate-600 mb-6 leading-relaxed">
                                        {{ $post->excerpt }}
                                    </p>
                                    
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-2">
                                            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center">
                                                <span class="text-white text-sm font-bold">{{ substr($post->author, 0, 1) }}</span>
                                            </div>
                                            <div>
                                                <p class="text-sm font-semibold text-slate-900">{{ $post->author }}</p>
                                                <p class="text-xs text-slate-500">{{ $post->formatted_date }}</p>
                                            </div>
                                        </div>
                                        
                                        <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg">
                                            <span>Đọc thêm</span>
                                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </article>
                    @endforeach
                </div>

                <!-- Enhanced Pagination -->
                @if($blogPosts->hasPages())
                <div class="mt-16 flex justify-center">
                    <nav class="flex items-center space-x-3 bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg border border-white/20">
                        <!-- Previous Page -->
                        @if($blogPosts->onFirstPage())
                        <span class="px-4 py-3 text-slate-400 bg-slate-100 rounded-xl cursor-not-allowed">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </span>
                        @else
                        <a href="{{ $blogPosts->previousPageUrl() }}" class="px-4 py-3 text-slate-600 bg-white border-2 border-slate-200 rounded-xl hover:bg-slate-50 hover:border-blue-300 transition-all duration-200 shadow-sm hover:shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </a>
                        @endif
                        
                        <!-- Page Numbers -->
                        @foreach($blogPosts->getUrlRange(1, $blogPosts->lastPage()) as $page => $url)
                        @if($page == $blogPosts->currentPage())
                        <span class="px-5 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white rounded-xl font-bold shadow-lg">{{ $page }}</span>
                            @else
                        <a href="{{ $url }}" class="px-5 py-3 text-slate-600 bg-white border-2 border-slate-200 rounded-xl hover:bg-slate-50 hover:border-blue-300 transition-all duration-200 shadow-sm hover:shadow-md font-medium">{{ $page }}</a>
                            @endif
                        @endforeach

                        <!-- Next Page -->
                        @if($blogPosts->hasMorePages())
                        <a href="{{ $blogPosts->nextPageUrl() }}" class="px-4 py-3 text-slate-600 bg-white border-2 border-slate-200 rounded-xl hover:bg-slate-50 hover:border-blue-300 transition-all duration-200 shadow-sm hover:shadow-md">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                        @else
                        <span class="px-4 py-3 text-slate-400 bg-slate-100 rounded-xl cursor-not-allowed">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </span>
                        @endif
                    </nav>
                </div>
                @endif

                @else
                <!-- Empty State -->
                <div class="text-center py-20">
                    <div class="relative">
                        <!-- Background Decoration -->
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-100 via-indigo-100 to-purple-100 rounded-3xl opacity-50"></div>
                        
                        <div class="relative bg-white/80 backdrop-blur-sm rounded-3xl p-12 shadow-xl border border-white/20 max-w-md mx-auto">
                            <!-- Icon -->
                            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl mb-8 shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                                </svg>
                            </div>
                            
                            <h3 class="text-2xl font-bold text-slate-900 mb-4">Chưa có bài viết nào</h3>
                            <p class="text-slate-600 mb-8 leading-relaxed">Hiện tại chưa có bài viết nào được xuất bản. Hãy quay lại sau để đọc những bài viết mới nhất!</p>
                            
                            <a href="/" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white font-bold rounded-2xl hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                                Về trang chủ
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Enhanced Sidebar -->
            <div class="lg:col-span-1">
                <!-- Recent Posts -->
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-lg border border-white/20">
                    <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Bài viết mới
                    </h3>
                    <div class="space-y-6">
                        @foreach($recentPosts as $post)
                        <div class="group">
                            <div class="flex items-start space-x-4 p-4 rounded-2xl hover:bg-slate-50 transition-all duration-300">
                                <div class="flex-shrink-0">
                                    <img src="{{ $post->image_url }}" 
                                         alt="{{ $post->title }}" 
                                         class="w-16 h-16 object-cover rounded-xl shadow-md group-hover:shadow-lg transition-shadow duration-300">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full"></div>
                                        <span class="text-xs text-slate-500 font-medium">{{ $post->formatted_date }}</span>
                            </div>
                                    <a href="{{ route('blog.show', $post->slug) }}" class="text-sm font-semibold text-slate-900 group-hover:text-blue-600 transition-colors duration-300 leading-tight block line-clamp-2">
                                        {{ $post->title }}
                                    </a>
                                    <p class="text-xs text-slate-500 mt-1">Chức năng bình luận bị tắt</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Product Categories -->
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-lg border border-white/20">
                    <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Danh Mục Sản Phẩm
                    </h3>
                    <ul class="space-y-3">
                        @foreach($categories as $category)
                        <li>
                            <a href="{{ route('category.show', $category->slug) }}" class="flex items-center justify-between p-3 rounded-xl hover:bg-slate-50 transition-all duration-300 group">
                                <span class="text-slate-700 group-hover:text-blue-600 font-medium">{{ $category->name }}</span>
                                <svg class="w-4 h-4 text-slate-400 group-hover:text-blue-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Tags -->
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-lg border border-white/20">
                    <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                        Từ Khóa
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(array_slice($tags, 0, 20) as $tag)
                        <a href="#" class="px-3 py-2 bg-gradient-to-r from-blue-50 to-indigo-50 text-blue-900 border border-blue-200 rounded-xl text-sm font-medium hover:from-blue-100 hover:to-indigo-100 hover:border-blue-300 transition-all duration-300 transform hover:scale-105 shadow-sm hover:shadow-md">
                            {{ $tag }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Scroll reveal animation */
.scroll-reveal {
    opacity: 0;
    transform: translateY(40px) scale(0.95);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

.scroll-reveal.revealed {
    opacity: 1;
    transform: translateY(0) scale(1);
}

/* Line clamp utility */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Enhanced hover effects */
.group:hover .group-hover\:scale-105 {
    transform: scale(1.05);
}

/* Smooth transitions */
.transition-all {
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Enhanced shadows */
.shadow-md {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.shadow-lg {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.shadow-xl {
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}

.shadow-2xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Glass morphism effect */
.glass {
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.18);
}

/* Custom scrollbar */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f5f9;
    border-radius: 4px;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(to bottom, #3b82f6, #6366f1);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(to bottom, #2563eb, #4f46e5);
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Scroll reveal animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.scroll-reveal').forEach(el => {
        observer.observe(el);
    });
});
</script>
@endpush