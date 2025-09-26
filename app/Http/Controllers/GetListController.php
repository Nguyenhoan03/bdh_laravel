<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Helpers\SeoHelper;
use Illuminate\Support\Facades\Log;

class GetListController extends Controller
{
    /**
     * Lấy danh sách sản phẩm cho trang chủ
     */
    public function getListHome()
    {
        try {
            // Lấy danh mục đồng hồ nữ
            $categoryWomen = Category::where('slug', 'dong-ho-nu')->select('id')->first();
            $categoryMen = Category::where('slug', 'dong-ho-nam')->select('id')->first();
            $categoryCouple = Category::where('slug', 'dong-ho-cap')->select('id')->first();
            $categoryStraps = Category::where('slug', 'day-dong-ho')->select('id')->first();
            $categoryJewelry = Category::where('slug', 'trang-suc')->select('id')->first();
            
            // Lấy sản phẩm đồng hồ nữ (chỉ sản phẩm đang kích hoạt)
            $dataWatchWomen = [];
            if ($categoryWomen) {
                $dataWatchWomen = Product::with('category')
                    ->select('id', 'name', 'slug', 'price', 'sale_price', 'images', 'description', 'category_id', 'is_featured', 'is_active', 'created_at')
                    ->where('category_id', $categoryWomen->id)
                    ->where('is_active', true)
                    ->orderBy('is_featured', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->limit(8)
                    ->get()
                    ->map(function ($product) {
                        // Tạo sale_price = 70% của price để có 30% discount cho một số sản phẩm
                        if (rand(1, 3) == 1) { // 1/3 sản phẩm có discount
                            $product->sale_price = $product->price * 0.7;
                        }
                        return $product;
                    });
            }
            
            
            // Lấy sản phẩm đồng hồ nam (chỉ sản phẩm đang kích hoạt)
            $dataWatchMen = [];
            if ($categoryMen) {
                $dataWatchMen = Product::with('category')
                    ->select('id', 'name', 'slug', 'price', 'sale_price', 'images', 'description', 'category_id', 'is_featured', 'is_active', 'created_at')
                    ->where('category_id', $categoryMen->id)
                    ->where('is_active', true)
                    ->orderBy('is_featured', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->limit(8)
                    ->get()
                    ->map(function ($product) {
                        // Tạo sale_price = 70% của price để có 30% discount cho một số sản phẩm
                        if (rand(1, 3) == 1) { // 1/3 sản phẩm có discount
                            $product->sale_price = $product->price * 0.7;
                        }
                        return $product;
                    });
            }
            
            // Lấy tối đa 25 sản phẩm nổi bật
            $featuredProducts = Product::with('category')
                ->select('id', 'name', 'slug', 'price', 'sale_price', 'images', 'description', 'category_id', 'is_featured', 'is_active', 'created_at')
                ->where('is_featured', true)
                ->where('is_active', true)
                ->orderBy('created_at', 'desc')
                ->limit(25)
                ->get()
                ->map(function ($product) {
                    // Tạo sale_price = 70% của price để có 30% discount cho một số sản phẩm
                    if (rand(1, 2) == 1) { // 1/2 sản phẩm có discount
                        $product->sale_price = $product->price * 0.7;
                    }
                    return $product;
                });
            
            // Lấy tối đa 30 sản phẩm bán chạy (best selling) - sử dụng stock thay vì view_count
            $bestSellingProducts = Product::with('category')
                ->select('id', 'name', 'slug', 'price', 'sale_price', 'images', 'description', 'category_id', 'is_featured', 'is_active', 'created_at', 'stock')
                ->where('is_active', true)
                ->orderBy('stock', 'desc')
                ->orderBy('is_featured', 'desc')
                ->limit(30)
                ->get()
                ->map(function ($product) {
                    // Tạo sale_price = 70% của price để có 30% discount cho một số sản phẩm
                    if (rand(1, 3) == 1) { // 1/3 sản phẩm có discount
                        $product->sale_price = $product->price * 0.7;
                    }
                    return $product;
                });
            
            // Lấy sản phẩm khuyến mãi (có sale_price khác price)
            $promotionalProducts = Product::with('category')
                ->select('id', 'name', 'slug', 'price', 'sale_price', 'images', 'description', 'category_id', 'is_featured', 'is_active', 'created_at')
                ->where('is_active', true)
                ->where('sale_price', '>', 0)
                ->whereColumn('sale_price', '<', 'price')
                ->orderBy('created_at', 'desc')
                ->limit(15)
                ->get();
            
            // Nếu không có sản phẩm khuyến mãi, tạo một số sản phẩm có discount để demo
            if ($promotionalProducts->isEmpty()) {
                $promotionalProducts = Product::with('category')
                    ->select('id', 'name', 'slug', 'price', 'sale_price', 'images', 'description', 'category_id', 'is_featured', 'is_active', 'created_at')
                    ->where('is_active', true)
                    ->where('price', '>', 0)
                    ->orderBy('created_at', 'desc')
                    ->limit(4)
                    ->get()
                    ->map(function ($product) {
                        // Tạo sale_price = 70% của price để có 30% discount
                        $product->sale_price = $product->price * 0.7;
                        return $product;
                    });
            }
            
            // Lấy sản phẩm đồng hồ cặp
            $coupleWatches = [];
            if ($categoryCouple) {
                $coupleWatches = Product::with('category')
                    ->where('category_id', $categoryCouple->id)
                    ->where('is_active', true)
                    ->orderBy('is_featured', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->limit(6)
                    ->get();
            }
            
            // Lấy dây đồng hồ
            $watchStraps = [];
            if ($categoryStraps) {
                $watchStraps = Product::with('category')
                    ->where('category_id', $categoryStraps->id)
                    ->where('is_active', true)
                    ->orderBy('is_featured', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->limit(8)
                    ->get();
            }
            
            // Lấy trang sức
            $jewelry = [];
            if ($categoryJewelry) {
                $jewelry = Product::with('category')
                    ->where('category_id', $categoryJewelry->id)
                    ->where('is_active', true)
                    ->orderBy('is_featured', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->limit(6)
                    ->get();
            }
            
            // Lấy sản phẩm cho banner thứ 3 (sản phẩm mới nhất)
            $newestProducts = Product::with('category')
                ->where('is_active', true)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();
            
            // Lấy sản phẩm có giá cao nhất (premium)
            $premiumProducts = Product::with('category')
                ->where('is_active', true)
                ->orderBy('price', 'desc')
                ->limit(4)
                ->get();
            
            // Lấy tất cả danh mục đang kích hoạt cho navigation
            $categories = Category::where('is_active', true)->orderBy('name', 'asc')->get();
            
            // Tạo SEO meta data cho trang chủ
            $meta = [
                'title' => 'Đồng hồ DW Daniel Wellington Cao Cấp Giá Tốt',
                'description' => 'Khám phá bộ sưu tập đồng hồ DW đẳng cấp ☆ Thiết kế tối giản từ Thụy Điển ☆ Dây da cao cấp ☆ Kính khoáng chống xước ☆ Giao hàng nhanh 24h. Mua ngay!',
                'keywords' => 'đồng hồ DW, daniel wellington cao cấp, đồng hồ DW giá tốt, đồng hồ daniel wellington chính hãng, đồng hồ nam nữ, dây đeo đồng hồ DW',
                'og_title' => 'Đồng hồ DW Daniel Wellington Cao Cấp Giá Tốt T09/2025',
                'og_description' => 'Khám phá bộ sưu tập đồng hồ DW đẳng cấp ☆ Thiết kế tối giản từ Thụy Điển ☆ Dây da cao cấp ☆ Kính khoáng chống xước ☆ Giao hàng nhanh 24h. Mua ngay!',
                'og_image' => asset('img/DW-LOGO.png'),
                'canonical_url' => url('/'),
                'no_index' => false,
                'no_follow' => false,
            ];
            
            // Tạo JSON-LD structured data cho trang chủ
            $jsonLd = [
                '@context' => 'https://schema.org',
                '@type' => 'Organization',
                'name' => 'Daniel Wellington Vietnam',
                'url' => url('/'),
                'logo' => asset('img/DW-LOGO.png'),
                'description' => 'Đại lý chính thức đồng hồ Daniel Wellington tại Việt Nam. Chuyên cung cấp đồng hồ cao cấp, thiết kế tối giản và đa dạng dây đeo.',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '590 Cách Mạng Tháng 8, Phường Nhiêu Lộc, Số nhà 04 Lô B',
                    'addressLocality' => 'Hồ Chí Minh',
                    'postalCode' => '700000',
                    'addressCountry' => 'VN'
                ],
                'contactPoint' => [
                    '@type' => 'ContactPoint',
                    'telephone' => '+84-978-187-088',
                    'contactType' => 'customer service',
                    'email' => 'cskh@donghodanielwellington.vn'
                ],
                'sameAs' => [
                    'https://facebook.com/danielwellington.vn',
                    'https://instagram.com/danielwellington_vn',
                    'https://twitter.com/danielwellington_vn'
                ]
            ];
            
            return view('home', compact(
                'dataWatchWomen', 
                'dataWatchMen', 
                'featuredProducts',
                'bestSellingProducts',
                'promotionalProducts',
                'coupleWatches',
                'watchStraps',
                'jewelry',
                'newestProducts',
                'premiumProducts',
                'categories',
                'meta',
                'jsonLd'
            ));
            
        } catch (\Exception $e) {
            // Log lỗi để debug
            Log::error('Error in getListHome: ' . $e->getMessage());

            // Trả về view với dữ liệu rỗng thay vì JSON
            return view('home', [
                'dataWatchWomen' => collect(),
                'dataWatchMen' => collect(),
                'featuredProducts' => collect(),
                'bestSellingProducts' => collect(),
                'promotionalProducts' => collect(),
                'coupleWatches' => collect(),
                'watchStraps' => collect(),
                'jewelry' => collect(),
                'newestProducts' => collect(),
                'premiumProducts' => collect(),
                'categories' => collect(),
                'error' => 'Có lỗi xảy ra khi tải dữ liệu: ' . $e->getMessage()
            ]);
        }
    }
    
    /**
     * Lấy danh sách sản phẩm theo danh mục
     */
    public function getProductsByCategory(Request $request, $categorySlug)
    {
        try {
            $category = Category::where('slug', $categorySlug)->first();
            
            if (!$category) {
                return response()->json([
                    'success' => false,
                    'message' => 'Danh mục không tồn tại'
                ], 404);
            }
            
            $products = Product::with('category')
                ->where('category_id', $category->id)
                ->where('is_active', true)
                ->orderBy('is_featured', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(12);
            
            return response()->json([
                'success' => true,
                'data' => [
                    'category' => $category,
                    'products' => $products
                ]
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra khi tải dữ liệu',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
}
