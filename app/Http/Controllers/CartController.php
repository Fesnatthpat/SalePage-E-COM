<?php

namespace App\Http\Controllers;

class CartController extends Controller
{
    // ในไฟล์ app/Http/Controllers/CartController.php

    public function index()
    {
        // 1. จำลองข้อมูล (Mock Data) ถ้ายังไม่มีสินค้าในตะกร้า
        if (! session()->has('cart')) {
            $mockCart = [
                1 => [
                    'name' => 'เสื้อยืด Oversize (สีดำ)',
                    'quantity' => 1,
                    'price' => 250,          // ราคาขายจริง (ลดแล้ว)
                    'original_price' => 450, // ราคาเต็ม (เพื่อโชว์ส่วนลด)
                    'image' => 'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?auto=format&fit=crop&w=200&q=80',
                ],
                2 => [
                    'name' => 'กางเกงยีนส์ ทรงกระบอก',
                    'quantity' => 2,
                    'price' => 590,          // ราคาปกติ (ไม่มีส่วนลด)
                    'original_price' => 590, // ราคาเต็มเท่ากับราคาขาย
                    'image' => 'https://images.unsplash.com/photo-1542272454315-4c01d7abdf4a?auto=format&fit=crop&w=200&q=80',
                ],
                3 => [
                    'name' => 'รองเท้าผ้าใบ Sneaker (Limited)',
                    'quantity' => 1,
                    'price' => 1290,         // ราคาขายจริง (ลดแล้ว)
                    'original_price' => 2500, // ราคาเต็ม (ลดเยอะมาก)
                    'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?auto=format&fit=crop&w=200&q=80',
                ],
            ];
            session()->put('cart', $mockCart);
        }

        // 2. คำนวณยอดรวม (Total) เพื่อส่งไปหน้า View
        $cart = session()->get('cart');
        $total = 0;
        foreach ($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        return view('cart', compact('total'));
    }
}
