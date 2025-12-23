<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request; // ต้องมี Model Address

class PaymentController extends Controller
{
    // [Step 1] แสดงหน้าเลือกที่อยู่และสรุปยอด (รับค่าจาก Cart)
    public function checkout(Request $request)
    {
        // 1. รับ ID สินค้าที่เลือกมาจากหน้าตะกร้า
        $selectedItems = $request->input('selected_items', []);

        if (empty($selectedItems)) {
            return redirect()->route('cart.index')->with('error', 'กรุณาเลือกสินค้าอย่างน้อย 1 รายการ');
        }

        // 2. ดึงข้อมูลสินค้าเฉพาะที่เลือกจากตะกร้า
        $cartContent = Cart::session(auth()->id())->getContent();
        $cartItems = [];
        $totalAmount = 0;

        foreach ($cartContent as $item) {
            // เช็คว่า ID สินค้าอยู่ในรายการที่เลือกหรือไม่
            if (in_array((string) $item->id, $selectedItems)) {
                $cartItems[] = $item;
                $totalAmount += ($item->price * $item->quantity);
            }
        }

        // 3. ดึงที่อยู่ของ User และจังหวัดสำหรับ Dropdown
        $addresses = Address::where('user_id', auth()->id())->get();
        $provinces = \App\Models\Province::all();

        return view('payment', compact('cartItems', 'totalAmount', 'addresses', 'selectedItems', 'provinces'));
    }

    // [Step 2] สร้าง Order และส่งไปหน้า QR (รับค่าจากหน้า Payment)
    public function process(Request $request)
    {
        // 1. รับ ID สินค้าที่ confirm จะจ่าย
        $selectedItems = $request->input('selected_items', []);

        // 2. คำนวณยอดเงินใหม่อีกครั้ง (เพื่อความปลอดภัย)
        $totalAmount = 0;
        $cartContent = Cart::session(auth()->id())->getContent();

        foreach ($cartContent as $item) {
            if (in_array((string) $item->id, $selectedItems)) {
                $totalAmount += ($item->price * $item->quantity);
            }
        }

        if ($totalAmount == 0) {
            return redirect()->route('cart.index');
        }

        // 3. สร้างเลข Order
        $orderId = 'ORD-'.date('Ymd').'-'.rand(1000, 9999);

        // 4. ส่งข้อมูลไปหน้า QR
        return view('qr', compact('totalAmount', 'orderId'));
    }
}
