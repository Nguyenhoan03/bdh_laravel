<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        try {
            // Lấy tham số từ request
            $perPage = $request->get('per_page', 5);
            $page = $request->get('page', 1);

            // Query blog posts đã published
            $blogPosts = BlogPost::where('is_published', true)
                ->orderBy('created_at', 'desc')
                ->paginate($perPage, ['*'], 'page', $page);

            // Lấy categories để hiển thị sidebar
            $categories = Category::where('is_active', true)
                ->orderBy('name')
                ->get();

            // Lấy recent posts cho sidebar
            $recentPosts = BlogPost::where('is_published', true)
                ->orderBy('created_at', 'desc')
                ->limit(5)
                ->get();

            // Tạo tags từ tên sản phẩm và categories
            $tags = $this->generateTags();

            return view('blog', compact(
                'blogPosts',
                'categories', 
                'recentPosts',
                'tags'
            ));

        } catch (\Exception $e) {
            abort(500, 'Có lỗi xảy ra khi tải blog');
        }
    }

    public function show($slug)
    {
        try {
            $post = BlogPost::where('slug', $slug)
                ->where('is_published', true)
                ->first();

            if (!$post) {
                abort(404, 'Bài viết không tồn tại');
            }

            // Lấy related posts
            $relatedPosts = BlogPost::where('is_published', true)
                ->where('id', '!=', $post->id)
                ->orderBy('created_at', 'desc')
                ->limit(4)
                ->get();

            return view('blog-detail', compact('post', 'relatedPosts'));

        } catch (\Exception $e) {
            abort(500, 'Có lỗi xảy ra khi tải bài viết');
        }
    }

    private function generateTags()
    {
        // Lấy tags từ tên sản phẩm và categories
        $productTags = \App\Models\Product::where('is_active', true)
            ->pluck('name')
            ->map(function($name) {
                return explode(' ', $name)[0]; // Lấy từ đầu tiên
            })
            ->unique()
            ->values()
            ->toArray();

        $categoryTags = \App\Models\Category::where('is_active', true)
            ->pluck('name')
            ->toArray();

        // Tags cố định
        $fixedTags = [
            'Casio', 'Citizen', 'classic', 'Cách bảo quản và vệ sinh đồng hồ DW', 
            'daniel wellington', 'dây da Bondi', 'dây da trắng Bondi', 
            'dây dw petite bondi', 'dây kim loại', 'Dây Nato DW',
            'dây vải Nato', 'dây đồng hồ', 'dây đồng hồ dw', 'Grand Seiko', 
            'Hamilton', 'Hublot', 'Review đồng hồ DW', 'Richard Mille', 'Rolex',
            'Seiko', 'Tissot', 'Tudor', 'Vacheron Constantin', 'Victorinox',
            'vòng tay daniel wellington', 'đồng hồ Casio', 'đồng hồ daniel wellington',
            'đồng hồ dw', 'đồng hồ Hamilton', 'đồng hồ hàng hiệu', 'đồng hồ Rolex',
            'đồng hồ Seiko', 'đồng hồ thụy Sĩ', 'đồng hồ Tissot'
        ];

        return array_merge($fixedTags, $productTags, $categoryTags);
    }
}
