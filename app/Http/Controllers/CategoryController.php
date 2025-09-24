<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Helpers\SeoHelper;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug, Request $request)
    {
        try {
            // Tìm category theo slug
            $category = Category::where('slug', $slug)->first();
            
            if (!$category) {
                abort(404, 'Danh mục không tồn tại');
            }

            // Lấy tham số từ request
            $sortBy = $request->get('sort', 'newest');
            $perPage = $request->get('per_page', 24); // Giảm xuống 12 để dễ test phân trang

            // Query sản phẩm theo category
            $query = Product::with(['category'])
                ->where('category_id', $category->id)
                ->where('is_active', true);

            // Sắp xếp
            switch ($sortBy) {
                case 'price_asc':
                    $query->orderBy('sale_price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('sale_price', 'desc');
                    break;
                case 'name_asc':
                    $query->orderBy('name', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('name', 'desc');
                    break;
                case 'oldest':
                    $query->orderBy('created_at', 'asc');
                    break;
                default: // newest
                    $query->orderBy('created_at', 'desc');
                    break;
            }

            // Phân trang
            $products = $query->paginate($perPage);
            
            // Tạo discount cho một số sản phẩm
            $products->getCollection()->transform(function ($product) {
                // Tạo sale_price = 70% của price để có 30% discount cho một số sản phẩm
                if (rand(1, 3) == 1) { // 1/3 sản phẩm có discount
                    $product->sale_price = $product->price * 0.7;
                }
                return $product;
            });

            // Lấy tất cả categories để hiển thị menu
            $categories = Category::all();

            // Thống kê
            $totalProducts = Product::where('category_id', $category->id)
                ->where('is_active', true)
                ->count();

            // Tạo SEO meta data
            $meta = SeoHelper::generateCategoryMeta($category);

            return view('category-product', compact(
                'category',
                'products',
                'categories',
                'totalProducts',
                'sortBy',
                'perPage',
                'meta'
            ));

        } catch (\Exception $e) {
            abort(500, 'Có lỗi xảy ra khi tải danh mục');
        }
    }

    public function index()
    {
        try {
            // Lấy tất cả categories
            $categories = Category::all();

            // Lấy sản phẩm nổi bật
            $featuredProducts = Product::with(['category'])
                ->where('is_active', true)
                ->where('is_featured', true)
                ->limit(12)
                ->get()
                ->map(function ($product) {
                    // Tạo sale_price = 70% của price để có 30% discount cho một số sản phẩm
                    if (rand(1, 2) == 1) { // 1/2 sản phẩm có discount
                        $product->sale_price = $product->price * 0.7;
                    }
                    return $product;
                });

            return view('categories', compact('categories', 'featuredProducts'));

        } catch (\Exception $e) {
            abort(500, 'Có lỗi xảy ra khi tải danh mục');
        }
    }
}
