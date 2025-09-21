<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;

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
        
        return view('checkout');
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
                $price = (float) str_replace(['₫', ','], '', $item['price']);
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

            // Create order items
            foreach ($cart as $productId => $item) {
                $price = (float) str_replace(['₫', ','], '', $item['price']);
                
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'product_name' => $item['name'],
                    'price' => $price,
                    'quantity' => $item['quantity'],
                    'subtotal' => $price * $item['quantity']
                ]);
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
            $order = Order::where('order_number', $orderNumber)->first();
        } elseif ($orderId) {
            $order = Order::find($orderId);
        }

        return view('checkout-success', compact('order'));
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