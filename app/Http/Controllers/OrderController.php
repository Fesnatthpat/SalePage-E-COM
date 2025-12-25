<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the user's orders.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::id())
                        ->orderBy('ord_date', 'desc')
                        ->get();

        return view('orderhistory', compact('orders'));
    }

    /**
     * Display the specified order.
     *
     * @param  string  $orderCode
     * @return \Illuminate\View\View
     */
    public function show(string $orderCode)
    {
        $order = Order::with('details', 'details.product')
                        ->where('ord_code', $orderCode)
                        ->where('user_id', Auth::id())
                        ->firstOrFail();

        return view('orderdetail', compact('order'));
    }

    /**
     * Display the order tracking form.
     *
     * @return \Illuminate\View\View
     */
    public function showTrackingForm()
    {
        return view('ordertracking');
    }

    /**
     * Track an order by its code.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function trackOrder(Request $request)
    {
        $request->validate([
            'order_code' => 'required|string|min:10', // Adjust min length as needed
        ], [
            'order_code.required' => 'กรุณากรอกรหัสคำสั่งซื้อ',
            'order_code.min' => 'รหัสคำสั่งซื้อต้องมีความยาวอย่างน้อย 10 ตัวอักษร',
        ]);

        $orderCode = $request->input('order_code');

        $order = Order::with('details', 'details.product')
                        ->where('ord_code', $orderCode)
                        ->first(); // Do not check user_id for public tracking

        if (!$order) {
            return view('ordertracking', ['error' => 'ไม่พบคำสั่งซื้อด้วยรหัสนี้']);
        }

        return view('ordertracking', compact('order'));
    }
}
