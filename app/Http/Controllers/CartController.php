<?php

namespace App\Http\Controllers;

use App\Models\CartStorage;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Helper: ดึง User ID
    private function getUserId()
    {
        return Auth::check() ? Auth::id() : '_guest_'.session()->getId();
    }

    // Helper: บันทึก Cart ลง DB
    private function saveCartToDatabase()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $cartData = Cart::session($userId)->getContent();

            CartStorage::updateOrCreate(
                ['user_id' => $userId],
                ['cart_data' => serialize($cartData)]
            );
        }
    }

    // Helper: Restore Cart จาก DB
    public function restoreCartFromDatabase()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $savedCart = CartStorage::where('user_id', $userId)->first();

            if ($savedCart) {
                // [สำคัญ] ต้องเคลียร์ Session ปัจจุบันทิ้งก่อนรับค่าจาก DB
                Cart::session($userId)->clear();

                $items = unserialize($savedCart->cart_data);
                foreach ($items as $item) {
                    Cart::session($userId)->add($item->toArray());
                }
            }
        }
    }

    // แสดงหน้าตะกร้า
    public function index()
    {
        $userId = $this->getUserId();

        // โหลดข้อมูลล่าสุดจาก DB เสมอ เพื่อให้มั่นใจว่าข้อมูลตรงกัน
        if (Auth::check()) {
            $this->restoreCartFromDatabase();
        }

        $items = Cart::session($userId)->getContent()->sort();
        $total = Cart::session($userId)->getTotal();

        return view('cart', compact('items', 'total'));
    }

    // เพิ่มสินค้า (รองรับจำนวน)
    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);
        $userId = $this->getUserId();

        // รับค่าจำนวนจาก Input
        $qty = request()->input('quantity', 1);
        $qty = ($qty < 1) ? 1 : $qty;

        $existingItem = Cart::session($userId)->get($productId);

        if ($existingItem) {
            Cart::session($userId)->update($productId, [
                'quantity' => $qty,
            ]);
        } else {
            Cart::session($userId)->add([
                'id' => $productId,
                'name' => $product->pd_name,
                'price' => $product->pd_price,
                'quantity' => $qty,
                'attributes' => [
                    // [แก้ไขตรงนี้] เช็คชื่อให้ตรงกับ DB (น่าจะเป็น pd_img)
                    'image' => $product->pd_img,
                ],
                'associatedModel' => $product,
            ]);
        }

        $this->saveCartToDatabase();

        return redirect()->route('cart.index')->with('success', 'เพิ่มสินค้าลงตะกร้าแล้ว');
    }

    // เพิ่ม/ลด จำนวน (ในหน้าตะกร้า)
    public function updateQuantity($productId, $action)
    {
        $userId = $this->getUserId();
        $quantity = ($action === 'increase') ? 1 : -1;

        Cart::session($userId)->update($productId, [
            'quantity' => $quantity,
        ]);

        // dd(Cart::session($userId)->get($productId));

        $this->saveCartToDatabase();

        return back();
    }

    // ลบสินค้า
    public function removeItem($productId)
    {
        $userId = $this->getUserId();
        Cart::session($userId)->remove($productId);
        $this->saveCartToDatabase();

        return back()->with('success', 'ลบสินค้าเรียบร้อยแล้ว');
    }
}
