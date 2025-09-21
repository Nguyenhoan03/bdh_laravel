<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class CartController extends Controller
{
    /**
     * Hiển thị giỏ hàng
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Thêm sản phẩm vào giỏ hàng
     */
    public function add(Request $request)
    {
        try {
            $productId = $request->input('product_id');
            $quantity = $request->input('quantity', 1);
            // Lấy thông tin sản phẩm
           Log::info($productId, $quantity);
            $product = Product::find($productId);
            
            if (!$product) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sản phẩm không tồn tại'
                ], 404);
            }

            // Lấy giỏ hàng hiện tại từ session
            $cart = session('cart', []);

            // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
            if (isset($cart[$productId])) {
                $cart[$productId]['quantity'] += $quantity;
            } else {
                // Thêm sản phẩm mới vào giỏ hàng
                $cart[$productId] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'slug' => $product->slug,
                    'price' => $this->formatPrice($product->sale_price > 0 ? $product->sale_price : $product->price),
                    'original_price' => $product->price > $product->sale_price && $product->sale_price > 0 ? 
                        $this->formatPrice($product->price) : null,
                    'image' => $product->images && is_array($product->images) && count($product->images) > 0 ? 
                        $product->images[0] : 'DW00100699-247x296.webp',
                    'spec' => explode(' - ', $product->description)[1] ?? '',
                    'quantity' => $quantity,
                    'category' => $product->category->name ?? 'Sản phẩm'
                ];
            }

            // Lưu giỏ hàng vào session
            session(['cart' => $cart]);

            // Tính tổng số lượng sản phẩm
            $totalItems = array_sum(array_column($cart, 'quantity'));

            return response()->json([
                'success' => true,
                'message' => 'Đã thêm sản phẩm vào giỏ hàng!',
                'cart_count' => $totalItems
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Cập nhật số lượng sản phẩm trong giỏ hàng
     */
    public function update(Request $request)
    {
        try {
            $productId = $request->input('product_id');
            $quantityChange = $request->input('quantity_change', 0);

            $cart = session('cart', []);

            if (!isset($cart[$productId])) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sản phẩm không tồn tại trong giỏ hàng'
                ], 404);
            }

            $newQuantity = $cart[$productId]['quantity'] + $quantityChange;

            if ($newQuantity <= 0) {
                // Xóa sản phẩm khỏi giỏ hàng nếu số lượng <= 0
                unset($cart[$productId]);
            } else {
                $cart[$productId]['quantity'] = $newQuantity;
            }

            session(['cart' => $cart]);

            return response()->json([
                'success' => true,
                'message' => 'Đã cập nhật giỏ hàng!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Xóa sản phẩm khỏi giỏ hàng
     */
    public function remove(Request $request)
    {
        try {
            $productId = $request->input('product_id');

            $cart = session('cart', []);

            if (isset($cart[$productId])) {
                unset($cart[$productId]);
                session(['cart' => $cart]);

                return response()->json([
                    'success' => true,
                    'message' => 'Đã xóa sản phẩm khỏi giỏ hàng!'
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Sản phẩm không tồn tại trong giỏ hàng'
            ], 404);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Xóa tất cả sản phẩm khỏi giỏ hàng
     */
    public function clear()
    {
        try {
            session(['cart' => []]);

            return response()->json([
                'success' => true,
                'message' => 'Đã xóa tất cả sản phẩm khỏi giỏ hàng!'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Lấy thông tin giỏ hàng (API)
     */
    public function getCart()
    {
        $cart = session('cart', []);
        $totalItems = array_sum(array_column($cart, 'quantity'));
        
        $subtotal = 0;
        foreach ($cart as $item) {
            $price = (float) str_replace(['₫', ','], '', $item['price']);
            $subtotal += $price * $item['quantity'];
        }

        return response()->json([
            'success' => true,
            'data' => [
                'items' => $cart,
                'total_items' => $totalItems,
                'subtotal' => $this->formatPrice($subtotal)
            ]
        ]);
    }

    /**
     * Format giá tiền
     */
    private function formatPrice($price)
    {
        return number_format($price, 0, ',', '.') . '₫';
    }
}