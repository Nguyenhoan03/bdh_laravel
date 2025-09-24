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
        $meta = [
            'title' => 'Giỏ hàng - Daniel Wellington Vietnam',
            'description' => 'Xem giỏ hàng của bạn tại Daniel Wellington Vietnam. Kiểm tra sản phẩm, cập nhật số lượng và tiến hành thanh toán.',
            'keywords' => 'giỏ hàng, daniel wellington giỏ hàng, thanh toán, mua sắm đồng hồ',
            'og_title' => 'Giỏ hàng - Daniel Wellington Vietnam',
            'og_description' => 'Xem giỏ hàng của bạn tại Daniel Wellington Vietnam. Kiểm tra sản phẩm và tiến hành thanh toán.',
            'og_image' => asset('img/DW-LOGO.png'),
            'canonical_url' => url('/gio-hang'),
            'no_index' => true, // Không index trang giỏ hàng
            'no_follow' => true,
        ];
        
        return view('cart', compact('meta'));
    }

    /**
     * Thêm sản phẩm vào giỏ hàng
     */
    public function add(Request $request)
    {
        try {
            $productId = (int) $request->input('product_id');
            $quantity = (int) $request->input('quantity', 1);
            // Lấy thông tin sản phẩm
            $product = Product::find($productId);
            
            if (!$product) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sản phẩm không tồn tại'
                ], 404);
            }

            // Lấy giỏ hàng hiện tại từ session
            $cart = session('cart', []);
            Log::info("Current cart before update", [
                'product_id' => $productId,
                'cart_keys' => array_keys($cart),
                'cart_data' => $cart
            ]);

            // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
            if (isset($cart[$productId])) {
                $oldQuantity = $cart[$productId]['quantity'];
                $cart[$productId]['quantity'] += $quantity;
                Log::info("Product already in cart - Updated quantity", [
                    'product_id' => $productId,
                    'old_quantity' => $oldQuantity,
                    'added_quantity' => $quantity,
                    'new_quantity' => $cart[$productId]['quantity']
                ]);
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
                Log::info("New product added to cart", [
                    'product_id' => $productId,
                    'product_name' => $product->name,
                    'quantity' => $quantity
                ]);
            }

            // Lưu giỏ hàng vào session
            session(['cart' => $cart]);
            Log::info("Cart saved to session", [
                'product_id' => $productId,
                'final_cart_data' => $cart,
                'session_cart' => session('cart')
            ]);

            // Tính số sản phẩm khác nhau trong giỏ hàng
            $totalItems = count($cart);

            $response = [
                'success' => true,
                'message' => 'Đã thêm sản phẩm vào giỏ hàng!',
                'cart_count' => $totalItems
            ];
            
            // Add debug info if requested
            if ($request->input('debug') === 'true') {
                $response['debug'] = true;
                $response['debug_info'] = [
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'product_name' => $product->name,
                    'cart_total_items' => $totalItems
                ];
            }
            
            return response()->json($response);

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
        $totalItems = count($cart);
        
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