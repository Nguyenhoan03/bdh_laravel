<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
            dd($dataWatchMen, $dataWatchWomen, $featuredProducts);
            return response()->json([
                'success' => true,
                'data' => [
                    'watch_women' => $dataWatchWomen,
                    'watch_men' => $dataWatchMen,
                    'featured_products' => $featuredProducts,
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
