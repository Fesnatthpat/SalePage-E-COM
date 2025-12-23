<?php

namespace App\Http\Controllers;

use App\Models\CartStorage;
use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    private function getUserId()
    {
        return Auth::check() ? Auth::id() : '_guest_'.session()->getId();
    }

    private function saveCartToDatabase()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            // ดึงข้อมูล Content ออกมา (จะเป็น Collection)
            $cartData = Cart::session($userId)->getContent();

            CartStorage::updateOrCreate(
                ['user_id' => $userId],
                // [แก้ไข] ส่งข้อมูลไปตรงๆ เลย Model จะแปลงเป็น JSON ให้เอง
                ['cart_data' => $cartData]
            );
        }
    }

    public function restoreCartFromDatabase()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $savedCart = CartStorage::where('user_id', $userId)->first();

            // ตรวจสอบว่ามีข้อมูลและต้องไม่ว่างเปล่า
            if ($savedCart && ! empty($savedCart->cart_data)) {
                Cart::session($userId)->clear();

                // [แก้ไข] ข้อมูลเป็น Array อยู่แล้ว (เพราะ $casts ใน Model) ไม่ต้อง unserialize
                $items = $savedCart->cart_data;

                // วนลูปเพิ่มสินค้าเข้า Session
                if (is_array($items) || is_object($items)) {
                    foreach ($items as $item) {
                        // แปลงเป็น Array เพื่อความชัวร์ก่อน Add
                        $itemArray = (is_array($item)) ? $item : (array) $item;
                        Cart::session($userId)->add($itemArray);
                    }
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

    // ฟังก์ชันเพิ่มสินค้า (รองรับ AJAX)
    public function addToCart($productId)
    {
        $productModel = Product::findOrFail($productId);

        $priceInfo = DB::table('product')
            ->select('product.pd_price', 'product_salepage.pd_sp_discount')
            ->leftJoin('product_salepage', function ($join) {
                $join->on('product.pd_id', '=', 'product_salepage.pd_id')
                    ->where('product_salepage.pd_sp_active', 1);
            })
            ->where('product.pd_id', $productId)
            ->first();

        $normalPrice = (float) $priceInfo->pd_price;
        $discount = isset($priceInfo->pd_sp_discount) ? (float) $priceInfo->pd_sp_discount : 0;
        $salePrice = ($normalPrice - $discount);

        $userId = $this->getUserId();
        $qty = request()->input('quantity', 1);
        $qty = ($qty < 1) ? 1 : $qty;

        $existingItem = Cart::session($userId)->get($productId);

        if ($existingItem) {
            Cart::session($userId)->update($productId, [
                'quantity' => $qty,
                'price' => $salePrice,
                'attributes' => [
                    'image' => $productModel->pd_img,
                    'original_price' => $normalPrice,
                    'discount' => $discount,
                ],
            ]);
        } else {
            Cart::session($userId)->add([
                'id' => $productId,
                'name' => $productModel->pd_name,
                'price' => $salePrice,
                'quantity' => $qty,
                'attributes' => [
                    'image' => $productModel->pd_img,
                    'original_price' => $normalPrice,
                    'discount' => $discount,
                ],
                'associatedModel' => $productModel,
            ]);
        }

        $this->saveCartToDatabase();

        // [สำคัญ] ถ้าเรียกผ่าน AJAX (JavaScript) ให้ส่ง JSON กลับไป
        if (request()->ajax() || request()->wantsJson()) {
            $totalQty = Cart::session($userId)->getTotalQuantity();

            return response()->json([
                'success' => true,
                'message' => 'เพิ่มสินค้าเรียบร้อยแล้ว',
                'cartCount' => $totalQty,
            ]);
        }

        // ถ้าเรียกปกติ ให้ Redirect
        return redirect()->route('cart.index')->with('success', 'เพิ่มสินค้าลงตะกร้าแล้ว');
    }

    public function updateQuantity($productId, $action)
    {
        $userId = $this->getUserId();
        $quantity = ($action === 'increase') ? 1 : -1;
        Cart::session($userId)->update($productId, ['quantity' => $quantity]);
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
