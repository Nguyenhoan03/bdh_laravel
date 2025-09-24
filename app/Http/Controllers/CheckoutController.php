<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    /**
     * Hiển thị trang checkout
     */
    public function index()
    {
        $cart = session('cart', []);
        
        if (empty($cart)) {
            return redirect('/gio-hang')->with('error', 'Giỏ hàng trống!');
        }
        
        $meta = [
            'title' => 'Thanh toán - Daniel Wellington Vietnam',
            'description' => 'Thanh toán đơn hàng đồng hồ Daniel Wellington. Thông tin giao hàng, phương thức thanh toán an toàn và bảo mật.',
            'keywords' => 'thanh toán, checkout, daniel wellington thanh toán, giao hàng, đặt hàng',
            'og_title' => 'Thanh toán - Daniel Wellington Vietnam',
            'og_description' => 'Thanh toán đơn hàng đồng hồ Daniel Wellington. Thông tin giao hàng và phương thức thanh toán an toàn.',
            'og_image' => asset('img/DW-LOGO.png'),
            'canonical_url' => url('/checkout'),
            'no_index' => true, // Không index trang checkout
            'no_follow' => true,
        ];
        
        return view('checkout', compact('meta'));
    }

    /**
     * Xử lý thanh toán
     */
    public function process(Request $request)
    {
        try {
            // Validate input
            $request->validate([
                'full_name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'email' => 'nullable|email|max:255',
                'address' => 'required|string|max:500',
                'city' => 'required|string|max:100',
                'district' => 'required|string|max:100',
                'ward' => 'required|string|max:100',
                'payment_method' => 'required|in:cod,bank_transfer',
                'note' => 'nullable|string|max:1000',
                'discount_code' => 'nullable|string|max:50'
            ]);

            $cart = session('cart', []);
            
            if (empty($cart)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Giỏ hàng trống!'
                ], 400);
            }

            // Calculate totals
            $subtotal = 0;
            $totalItems = 0;
            
            foreach ($cart as $item) {
                // Use raw price if available, otherwise parse formatted price
                if (isset($item['price']) && is_numeric($item['price'])) {
                    $price = (float) $item['price'];
                } else {
                    // Fallback: parse formatted price string
                    $priceString = preg_replace('/[^\d.]/', '', $item['price']);
                    $priceString = str_replace(',', '', $priceString);
                    $priceString = str_replace('.', '', $priceString);
                    $price = (float) $priceString;
                }
                
                // Debug log
                Log::info('Cart item price calculation', [
                    'original_price' => $item['price'],
                    'cleaned_price' => $priceString,
                    'final_price' => $price,
                    'quantity' => $item['quantity']
                ]);
                
                $subtotal += $price * $item['quantity'];
                $totalItems += $item['quantity'];
            }

            // Apply discount if valid
            $discount = 0;
            $discountCode = $request->input('discount_code');
            if ($discountCode && strtoupper($discountCode) === 'WELCOME10') {
                $discount = $subtotal * 0.1; // 10% discount
            }

            $total = $subtotal - $discount;

            // Debug log
            Log::info('Order calculation', [
                'subtotal' => $subtotal,
                'discount' => $discount,
                'total' => $total,
                'total_items' => $totalItems
            ]);

            // Create order
            $order = Order::create([
                'order_number' => 'DW' . date('Ymd') . rand(1000, 9999),
                'customer_name' => $request->input('full_name'),
                'customer_phone' => $request->input('phone'),
                'customer_email' => $request->input('email'),
                'customer_address' => $request->input('address'),
                'customer_city' => $request->input('city'),
                'customer_district' => $request->input('district'),
                'customer_ward' => $request->input('ward'),
                'payment_method' => $request->input('payment_method'),
                'subtotal' => $subtotal,
                'discount' => $discount,
                'discount_code' => $discountCode,
                'total_amount' => $total,
                'status' => 'pending',
                'notes' => $request->input('note'),
                'total_items' => $totalItems
            ]);

            // Create order items and update product stock
            foreach ($cart as $productId => $item) {
                // Use raw price if available, otherwise parse formatted price
                if (isset($item['price']) && is_numeric($item['price'])) {
                    $price = (float) $item['price'];
                } else {
                    // Fallback: parse formatted price string
                    $priceString = preg_replace('/[^\d.]/', '', $item['price']);
                    $priceString = str_replace(',', '', $priceString);
                    $priceString = str_replace('.', '', $priceString);
                    $price = (float) $priceString;
                }
                
                // Debug log
                Log::info('Order item price parsing', [
                    'product_id' => $productId,
                    'product_name' => $item['name'],
                    'original_price' => $item['price'],
                    'cleaned_price_string' => $priceString,
                    'final_price' => $price,
                    'quantity' => $item['quantity'],
                    'subtotal' => $price * $item['quantity']
                ]);
                
                $orderItem = OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'product_name' => $item['name'],
                    'price' => $price,
                    'quantity' => $item['quantity'],
                    'subtotal' => $price * $item['quantity']
                ]);

                // Debug log
                Log::info('Order item created', [
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'product_name' => $item['name'],
                    'price' => $price,
                    'quantity' => $item['quantity'],
                    'subtotal' => $price * $item['quantity'],
                    'order_item_id' => $orderItem->id
                ]);

                // Update product stock
                $product = Product::find($productId);
                if ($product) {
                    $product->decrement('stock', $item['quantity']);
                }
            }

            // Clear cart
            session(['cart' => []]);

            return response()->json([
                'success' => true,
                'message' => 'Đơn hàng đã được đặt thành công!',
                'order_number' => $order->order_number,
                'order_id' => $order->id
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Hiển thị trang thành công
     */
    public function success(Request $request)
    {
        $orderNumber = $request->input('order_number');
        $orderId = $request->input('order_id');
        
        $order = null;
        if ($orderNumber) {
            $order = Order::with('orderItems')->where('order_number', $orderNumber)->first();
        } elseif ($orderId) {
            $order = Order::with('orderItems')->find($orderId);
        }

        // If no order found, redirect to home with error message
        if (!$order) {
            return redirect('/')->with('error', 'Không tìm thấy đơn hàng. Vui lòng liên hệ hỗ trợ.');
        }

        $meta = [
            'title' => 'Đặt hàng thành công - Daniel Wellington Vietnam',
            'description' => 'Cảm ơn bạn đã đặt hàng tại Daniel Wellington Vietnam. Đơn hàng #' . $order->order_number . ' đã được xác nhận và sẽ được giao trong thời gian sớm nhất.',
            'keywords' => 'đặt hàng thành công, daniel wellington đặt hàng, xác nhận đơn hàng, giao hàng',
            'og_title' => 'Đặt hàng thành công - Daniel Wellington Vietnam',
            'og_description' => 'Cảm ơn bạn đã đặt hàng tại Daniel Wellington Vietnam. Đơn hàng đã được xác nhận.',
            'og_image' => asset('img/DW-LOGO.png'),
            'canonical_url' => url('/checkout/success'),
            'no_index' => true, // Không index trang success
            'no_follow' => true,
        ];

        return view('checkout-success', compact('order', 'meta'));
    }

    /**
     * API để lấy thông tin đơn hàng
     */
    public function getOrder($orderNumber)
    {
        $order = Order::with('orderItems')->where('order_number', $orderNumber)->first();
        
        if (!$order) {
            return response()->json([
                'success' => false,
                'message' => 'Không tìm thấy đơn hàng'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $order
        ]);
    }
}