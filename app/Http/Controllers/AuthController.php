<?php

namespace App\Http\Controllers;

use App\Models\CartStorage;
use App\Models\User; // [เพิ่ม] เรียกใช้ Model ตะกร้า
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite; // [เพิ่ม] เรียกใช้ Cart

class AuthController extends Controller
{
    // พาผู้ใช้ไปยังหน้าล็อกอินของ LINE
    public function redirectToLine()
    {
        return Socialite::driver('line')
            ->with(['scope' => 'profile openid email'])
            ->redirect();
    }

    // จัดการข้อมูล Callback หลังจากผู้ใช้ล็อกอินสำเร็จ
    public function handleLineCallback()
    {
        try {
            $lineUser = Socialite::driver('line')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'การเข้าสู่ระบบผ่าน LINE ล้มเหลว');
        }

        // ค้นหาหรือสร้างผู้ใช้
        $user = User::updateOrCreate(
            ['line_id' => $lineUser->getId()],
            [
                'name' => $lineUser->getName(),
                'email' => $lineUser->getEmail(),
                'avatar' => $lineUser->getAvatar(),
            ]
        );

        // เข้าสู่ระบบ
        Auth::login($user);

        // ============================================================
        // [FIX] ดึงข้อมูลตะกร้าจาก Database มาใส่ Session ทันที!
        // ============================================================
        $userId = $user->id;
        $savedCart = CartStorage::where('user_id', $userId)->first();

        if ($savedCart) {
            // เคลียร์ Session ตะกร้าของ Guest ทิ้งก่อนเพื่อป้องกันการซ้ำซ้อน
            Cart::session($userId)->clear();

            // แปลงข้อมูลกลับมาและใส่เข้า Session
            $items = unserialize($savedCart->cart_data);
            foreach ($items as $item) {
                Cart::session($userId)->add($item->toArray());
            }
        }
        // ============================================================

        return redirect('/');
    }
}
