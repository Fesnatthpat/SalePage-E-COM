<?php

namespace App\Http\Controllers;

use App\Models\CartStorage;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; // [สำคัญ] อย่าลืมเพิ่มบรรทัดนี้

class CartController extends Controller
{
    // ... (ฟังก์ชัน getUserId, saveCartToDatabase, restoreCartFromDatabase, index คงเดิม) ...

    private function getUserId()
    {
        return Auth::check() ? Auth::id() : '_guest_'.session()->getId();
    }

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

    public function restoreCartFromDatabase()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $savedCart = CartStorage::where('user_id', $userId)->first();

            if ($savedCart) {
                Cart::session($userId)->clear();
                $items = unserialize($savedCart->cart_data);
                foreach ($items as $item) {
                    Cart::session($userId)->add($item->toArray());
                }
            }
        }
    }

    public function index()
    {
        $userId = $this->getUserId();

        if (Auth::check()) {
            $this->restoreCartFromDatabase();
        }

        $items = Cart::session($userId)->getContent()->sort();
        $total = Cart::session($userId)->getTotal();

        return view('cart', compact('items', 'total'));
    }

    // [แก้ไข] ฟังก์ชันเพิ่มสินค้า
    public function addToCart($productId)
    {
        // 1. ดึงข้อมูลสินค้า (ใช้ Model เพื่อเก็บเป็น associatedModel)
        $productModel = Product::findOrFail($productId);

        // 2. [เพิ่ม] Query เพื่อดึงราคาและส่วนลดจาก product_salepage
        $priceInfo = DB::table('product')
            ->select('product.pd_price', 'product_salepage.pd_sp_discount')
            ->leftJoin('product_salepage', function ($join) {
                $join->on('product.pd_id', '=', 'product_salepage.pd_id')
                    ->where('product_salepage.pd_sp_active', 1);
            })
            ->where('product.pd_id', $productId)
            ->first();

        // 3. [เพิ่ม] คำนวณราคาขายจริง
        $normalPrice = (float) $priceInfo->pd_price;
        $discount = isset($priceInfo->pd_sp_discount) ? (float) $priceInfo->pd_sp_discount : 0;
        $salePrice = $normalPrice - $discount; // ราคาทีขายจริง (หักส่วนลดแล้ว)

        $userId = $this->getUserId();

        // รับค่าจำนวนจาก Input
        $qty = request()->input('quantity', 1);
        $qty = ($qty < 1) ? 1 : $qty;

        $existingItem = Cart::session($userId)->get($productId);

        if ($existingItem) {
            // อัปเดตจำนวนและราคาล่าสุด (กรณีมีการเปลี่ยนราคา)
            Cart::session($userId)->update($productId, [
                'quantity' => $qty,
                'price' => $salePrice, // อัปเดตราคาล่าสุด
                'attributes' => [
                    'image' => $productModel->pd_img,
                    'original_price' => $normalPrice, // [สำคัญ] เก็บราคาเต็มไว้โชว์ขีดฆ่า
                    'discount' => $discount,
                ],
            ]);
        } else {
            // เพิ่มสินค้าใหม่
            Cart::session($userId)->add([
                'id' => $productId,
                'name' => $productModel->pd_name,
                'price' => $salePrice, // [สำคัญ] ใช้ราคาที่ลดแล้วเป็นราคาหลักในตะกร้า
                'quantity' => $qty,
                'attributes' => [
                    'image' => $productModel->pd_img,
                    'original_price' => $normalPrice, // [สำคัญ] เก็บราคาเต็มไว้โชว์ขีดฆ่า
                    'discount' => $discount,
                ],
                'associatedModel' => $productModel,
            ]);
        }

        $this->saveCartToDatabase();

        return redirect()->route('cart.index')->with('success', 'เพิ่มสินค้าลงตะกร้าแล้ว');
    }

    // ... (ฟังก์ชัน updateQuantity, removeItem คงเดิม) ...

    public function updateQuantity($productId, $action)
    {
        $userId = $this->getUserId();
        $quantity = ($action === 'increase') ? 1 : -1;

        Cart::session($userId)->update($productId, [
            'quantity' => $quantity,
        ]);

        $this->saveCartToDatabase();

        return back();
    }

    public function removeItem($productId)
    {
        $userId = $this->getUserId();
        Cart::session($userId)->remove($productId);
        $this->saveCartToDatabase();

        return back()->with('success', 'ลบสินค้าเรียบร้อยแล้ว');
    }
}
