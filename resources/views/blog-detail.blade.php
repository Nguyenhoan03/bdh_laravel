@extends('layouts.app')

@section('title', $meta['title'] ?? ($post->title . ' - Daniel Wellington Vietnam'))

@section('content')
<!-- Blog Detail Header -->
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
                <li>
                    <a href="{{ route('blog.index') }}" class="text-slate-500 hover:text-slate-700 transition-colors duration-200 font-medium">BLOG ĐỒNG HỒ 360</a>
                </li>
                <li class="text-slate-400">/</li>
                <li class="text-slate-900 font-semibold">{{ $post->title }}</li>
            </ol>
        </nav>

        <!-- Article Header -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl mb-8 shadow-lg">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
            </div>
            
            <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-slate-900 via-blue-900 to-indigo-900 bg-clip-text text-transparent mb-6 leading-tight">
                {{ $post->title }}
            </h1>
            
            <!-- Article Meta -->
            <div class="flex flex-wrap items-center justify-center gap-6 text-slate-600 mb-8">
                <div class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center">
                        <span class="text-white text-sm font-bold">{{ substr($post->author, 0, 1) }}</span>
                    </div>
                    <span class="font-semibold">{{ $post->author }}</span>
                </div>
                
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>{{ $post->formatted_date }}</span>
                </div>
                
                <div class="flex items-center space-x-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>{{ $post->reading_time }} phút đọc</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Content -->
<div class="bg-gradient-to-br from-slate-50 to-blue-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-3">
                <article class="bg-white rounded-3xl shadow-lg overflow-hidden border border-slate-100">
                    <!-- Featured Image -->
                    <div class="relative h-64 md:h-96 bg-gradient-to-br from-slate-100 to-blue-100 overflow-hidden">
                        <img src="{{ $post->image_url }}" 
                             alt="{{ $post->title }}" 
                             class="w-full h-full object-cover"
                             data-fallback="{{ asset('img/DW00100699-247x296.webp') }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                    </div>
                    
                    <!-- Article Content -->
                    <div class="p-8 md:p-12">
                        <div class="prose prose-lg max-w-none prose-slate prose-headings:text-slate-900 prose-headings:font-bold prose-a:text-blue-600 prose-a:no-underline hover:prose-a:underline prose-strong:text-slate-900 prose-code:text-blue-600 prose-code:bg-blue-50 prose-code:px-2 prose-code:py-1 prose-code:rounded prose-pre:bg-slate-900 prose-pre:text-slate-100">
                            {!! $post->content !!}
                        </div>
                        
                        <!-- Article Footer -->
                        <div class="mt-12 pt-8 border-t border-slate-200">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div class="flex items-center space-x-4">
                                    <div class="flex items-center space-x-2">
                                        <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center">
                                            <span class="text-white font-bold">{{ substr($post->author, 0, 1) }}</span>
                                        </div>
                                        <div>
                                            <p class="font-semibold text-slate-900">{{ $post->author }}</p>
                                            <p class="text-sm text-slate-500">Tác giả</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flex items-center space-x-4">
                                    <a href="{{ route('blog.index') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                        </svg>
                                        <span>Quay lại blog</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                
                <!-- Related Posts -->
                @if($relatedPosts->count() > 0)
                <div class="mt-16">
                    <h3 class="text-2xl font-bold text-slate-900 mb-8 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        Bài viết liên quan
                    </h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach($relatedPosts as $relatedPost)
                        <article class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden border border-slate-100">
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-1/3 flex-shrink-0">
                                    <img src="{{ $relatedPost->image_url }}" 
                                         alt="{{ $relatedPost->title }}" 
                                         class="w-full h-48 md:h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                         data-fallback="{{ asset('img/DW00100699-247x296.webp') }}">
                                </div>
                                <div class="md:w-2/3 p-6">
                                    <div class="flex items-center space-x-2 mb-3">
                                        <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full"></div>
                                        <span class="text-xs text-slate-500 font-medium">{{ $relatedPost->formatted_date }}</span>
                                    </div>
                                    
                                    <h4 class="text-lg font-bold text-slate-900 mb-3 group-hover:text-blue-600 transition-colors duration-300 leading-tight">
                                        <a href="{{ route('blog.show', $relatedPost->slug) }}">{{ $relatedPost->title }}</a>
                                    </h4>
                                    
                                    <p class="text-slate-600 mb-4 leading-relaxed text-sm line-clamp-3">
                                        {{ $relatedPost->excerpt }}
                                    </p>
                                    
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center space-x-2">
                                            <div class="w-6 h-6 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center">
                                                <span class="text-white text-xs font-bold">{{ substr($relatedPost->author, 0, 1) }}</span>
                                            </div>
                                            <span class="text-sm text-slate-600">{{ $relatedPost->author }}</span>
                                        </div>
                                        
                                        <a href="{{ route('blog.show', $relatedPost->slug) }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-indigo-700 transition-all duration-300 transform hover:scale-105 shadow-md hover:shadow-lg text-sm">
                                            <span>Đọc thêm</span>
                                            <svg class="w-3 h-3 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>

            <!-- Sidebar -->
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
                        @php
                            $recentPosts = \App\Models\BlogPost::where('is_published', true)
                                ->where('id', '!=', $post->id)
                                ->orderBy('created_at', 'desc')
                                ->limit(5)
                                ->get();
                        @endphp
                        
                        @foreach($recentPosts as $recentPost)
                        <div class="group">
                            <div class="flex items-start space-x-4 p-4 rounded-2xl hover:bg-slate-50 transition-all duration-300">
                                <div class="flex-shrink-0">
                                    <img src="{{ $recentPost->image_url }}" 
                                         alt="{{ $recentPost->title }}" 
                                         class="w-16 h-16 object-cover rounded-xl shadow-md group-hover:shadow-lg transition-shadow duration-300"
                                         data-fallback="{{ asset('img/DW00100699-247x296.webp') }}">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <div class="w-2 h-2 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full"></div>
                                        <span class="text-xs text-slate-500 font-medium">{{ $recentPost->formatted_date }}</span>
                                    </div>
                                    <a href="{{ route('blog.show', $recentPost->slug) }}" class="text-sm font-semibold text-slate-900 group-hover:text-blue-600 transition-colors duration-300 leading-tight block line-clamp-2">
                                        {{ $recentPost->title }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Categories -->
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 mb-8 shadow-lg border border-white/20">
                    <h3 class="text-xl font-bold text-slate-900 mb-6 flex items-center">
                        <svg class="w-6 h-6 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        Danh Mục Sản Phẩm
                    </h3>
                    <ul class="space-y-3">
                        @php
                            $categories = \App\Models\Category::where('is_active', true)
                                ->orderBy('name')
                                ->get();
                        @endphp
                        
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

                <!-- Back to Blog -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl p-8 text-white">
                    <h3 class="text-xl font-bold mb-4">Khám phá thêm</h3>
                    <p class="text-blue-100 mb-6 leading-relaxed">Đọc thêm những bài viết thú vị khác về thế giới đồng hồ.</p>
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center px-6 py-3 bg-white text-blue-600 font-bold rounded-2xl hover:bg-blue-50 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        <span>Xem tất cả bài viết</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Prose styling for blog content */
.prose {
    max-width: 100% !important;
}

.prose img {
    max-width: 100% !important;
    height: auto !important;
    border-radius: 8px;
    margin: 1rem 0;
}

.prose p {
    word-wrap: break-word;
    overflow-wrap: break-word;
    hyphens: auto;
}

.prose pre {
    white-space: pre-wrap;
    word-wrap: break-word;
    overflow-x: auto;
    max-width: 100%;
}

.prose code {
    word-wrap: break-word;
    overflow-wrap: break-word;
}

/* Ensure content doesn't overflow */
.prose * {
    max-width: 100% !important;
}

/* Fix for base64 images */
.prose img[src^="data:image"] {
    max-width: 100% !important;
    height: auto !important;
    display: block;
    margin: 1rem auto;
}

/* Line clamp utility */
.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    line-clamp: 3;
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

/* Responsive layout fixes */
@media (max-width: 768px) {
    .prose {
        font-size: 14px;
    }
    
    .prose h3 {
        font-size: 18px;
    }
    
    .prose h4 {
        font-size: 16px;
    }
    
    .prose img {
        max-width: 100% !important;
        height: auto !important;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle image fallback
    document.querySelectorAll('img[data-fallback]').forEach(function(img) {
        img.addEventListener('error', function() {
            this.src = this.getAttribute('data-fallback');
        });
    });
});
</script>
@endpush
