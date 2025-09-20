<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItem;

class ProductDetailController extends Controller
{
    public function show($slug)
    {
        try {
            // Tìm sản phẩm theo slug hoặc ID
            $product = Product::where('slug', $slug)
                ->orWhere('id', $slug)
                ->with(['category'])
                ->first();

            if (!$product) {
                abort(404, 'Sản phẩm không tồn tại');
            }

            // Lấy sản phẩm liên quan (cùng category, khác ID)
            $relatedProducts = Product::where('category_id', $product->category_id)
                ->where('id', '!=', $product->id)
                ->where('is_active', true)
                ->limit(8)
                ->get();

            // Nếu không có sản phẩm cùng category, lấy sản phẩm khác
            if ($relatedProducts->isEmpty()) {
                $relatedProducts = Product::where('id', '!=', $product->id)
                    ->where('is_active', true)
                    ->limit(8)
                    ->get();
            }

            // Nếu vẫn không đủ, lấy thêm sản phẩm khác
            if ($relatedProducts->count() < 5) {
                $additionalProducts = Product::where('is_active', true)
                    ->where('id', '!=', $product->id)
                    ->whereNotIn('id', $relatedProducts->pluck('id'))
                    ->limit(8 - $relatedProducts->count())
                    ->get();
                
                $relatedProducts = $relatedProducts->merge($additionalProducts);
            }

            // Lấy sản phẩm bán chạy (top 4)
            $bestSellingProducts = Product::with(['category'])
                ->where('is_active', true)
                ->where('id', '!=', $product->id)
                ->limit(4)
                ->get();

            // Lấy sản phẩm nổi bật (top 4)
            $featuredProducts = Product::with(['category'])
                ->where('is_active', true)
                ->where('is_featured', true)
                ->where('id', '!=', $product->id)
                ->limit(4)
                ->get();

            // Lấy sản phẩm mới nhất (top 4)
            $newestProducts = Product::with(['category'])
                ->where('is_active', true)
                ->where('id', '!=', $product->id)
                ->orderBy('created_at', 'desc')
                ->limit(4)
                ->get();

            // Tính toán discount
            $discount = 0;
            if ($product->price > $product->sale_price && $product->sale_price > 0) {
                $discount = round((($product->price - $product->sale_price) / $product->price) * 100);
            }

            // Lấy thông tin category
            $category = $product->category;

            return view('product_detail', compact(
                'product',
                'relatedProducts',
                'bestSellingProducts',
                'featuredProducts',
                'newestProducts',
                'discount',
                'category'
            ));

        } catch (\Exception $e) {
            abort(500, 'Có lỗi xảy ra khi tải sản phẩm');
        }
    }

    public function addToCart(Request $request)
    {
        try {
            $request->validate([
                'product_id' => 'required|exists:products,id',
                'quantity' => 'required|integer|min:1|max:10'
            ]);

            $product = Product::findOrFail($request->product_id);
            
            // Kiểm tra tồn kho (giả sử có field stock)
            // if ($product->stock < $request->quantity) {
            //     return response()->json([
            //         'success' => false,
            //         'message' => 'Không đủ hàng trong kho'
            //     ]);
            // }

            // Thêm vào session cart
            $cart = session()->get('cart', []);
            
            if (isset($cart[$request->product_id])) {
                $cart[$request->product_id]['quantity'] += $request->quantity;
            } else {
                $cart[$request->product_id] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->sale_price > 0 ? $product->sale_price : $product->price,
                    'original_price' => $product->price,
                    'image' => $product->images[0] ?? 'DW00100699-247x296.webp',
                    'quantity' => $request->quantity,
                    'slug' => $product->slug ?? $product->id
                ];
            }

            session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'message' => 'Đã thêm sản phẩm vào giỏ hàng',
                'cart_count' => array_sum(array_column($cart, 'quantity'))
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra khi thêm vào giỏ hàng'
            ]);
        }
    }
}
