<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
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
                    ->where('category_id', $categoryWomen->id)
                    ->where('is_active', true)
                    ->orderBy('is_featured', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->limit(8)
                    ->get();
            }
            
            // Lấy sản phẩm đồng hồ nam (chỉ sản phẩm đang kích hoạt)
            $dataWatchMen = [];
            if ($categoryMen) {
                $dataWatchMen = Product::with('category')
                    ->where('category_id', $categoryMen->id)
                    ->where('is_active', true)
                    ->orderBy('is_featured', 'desc')
                    ->orderBy('created_at', 'desc')
                    ->limit(8)
                    ->get();
            }
            
            // Lấy sản phẩm nổi bật
            $featuredProducts = Product::with('category')
                ->where('is_featured', true)
                ->where('is_active', true)
                ->orderBy('created_at', 'desc')
                ->limit(6)
                ->get();
            
            // Lấy sản phẩm bán chạy (best selling) - sử dụng stock thay vì view_count
            $bestSellingProducts = Product::with('category')
                ->where('is_active', true)
                ->orderBy('stock', 'desc')
                ->orderBy('is_featured', 'desc')
                ->limit(8)
                ->get();
            
            // Lấy sản phẩm khuyến mãi (có sale_price khác price)
            $promotionalProducts = Product::with('category')
                ->where('is_active', true)
                ->whereColumn('sale_price', '<', 'price')
                ->orderBy('created_at', 'desc')
                ->limit(8)
                ->get();
            
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
            
            // Lấy tất cả danh mục cho navigation
            $categories = Category::orderBy('name', 'asc')->get();
            
            return view('home', compact(
                'dataWatchWomen', 
                'dataWatchMen', 
                'featuredProducts',
                'bestSellingProducts',
                'promotionalProducts',
                'coupleWatches',
                'watchStraps',
                'jewelry',
                'categories'
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
    
    /**
     * Lấy chi tiết sản phẩm
     */
    public function getProductDetail($productSlug)
    {
        try {
            $product = Product::with('category')
                ->where('slug', $productSlug)
                ->where('is_active', true)
                ->first();
            
            if (!$product) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sản phẩm không tồn tại'
                ], 404);
            }
            
            // Lấy sản phẩm liên quan
            $relatedProducts = Product::with('category')
                ->where('category_id', $product->category_id)
                ->where('id', '!=', $product->id)
                ->where('is_active', true)
                ->limit(4)
                ->get();
            
            return response()->json([
                'success' => true,
                'data' => [
                    'product' => $product,
                    'related_products' => $relatedProducts
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
