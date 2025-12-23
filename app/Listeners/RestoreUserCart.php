<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use App\Models\CartStorage;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class RestoreUserCart
{
    public function handle(UserLoggedIn $event)
    {
        $userId = $event->user->id;
        $savedCart = CartStorage::where('user_id', $userId)->first();

        if ($savedCart && !empty($savedCart->cart_data)) {
            // เคลียร์ตะกร้าเดิม (ถ้าต้องการ) หรือจะ Merge ก็ได้ตาม Business Logic
            Cart::session($userId)->clear();

            // ข้อมูลถูก Cast เป็น Array อัตโนมัติแล้วจาก Model
            $items = $savedCart->cart_data;
            
            // เพิ่มสินค้ากลับเข้า Session
            Cart::session($userId)->add($items);
        }
    }
}