<?php

namespace App\Http\Controllers;

use App\Models\CartStorage;
use App\Models\User;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // ... (ฟังก์ชัน showLogin, logout, redirectToLine เหมือนเดิม) ...
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect('/');
        }

        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function redirectToLine()
    {
        return Socialite::driver('line')
            ->with(['scope' => 'profile openid email'])
            ->redirect();
    }

    // [จุดที่แก้ไขสำคัญ]
    public function handleLineCallback()
    {
        try {
            $lineUser = Socialite::driver('line')->user();
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'การเข้าสู่ระบบผ่าน LINE ล้มเหลว');
        }

        // 1. [สำคัญ] ดึงสินค้าในตะกร้า Guest ออกมาเก็บไว้ก่อน (เพราะถ้า Login แล้ว Session ID จะเปลี่ยน)
        $guestSessionKey = '_guest_'.session()->getId();
        $guestCartItems = Cart::session($guestSessionKey)->getContent();

        // 2. สร้างหรือดึงข้อมูล User
        $user = User::updateOrCreate(
            ['line_id' => $lineUser->getId()],
            [
                'name' => $lineUser->getName(),
                'email' => $lineUser->getEmail(),
                'avatar' => $lineUser->getAvatar(),
            ]
        );

        // 3. เข้าสู่ระบบ (จังหวะนี้ Session ID จะถูกเปลี่ยน)
        Auth::login($user);
        $userId = $user->id;

        // 4. ดึงตะกร้าเก่าจาก Database (ถ้ามี)
        $savedCart = CartStorage::where('user_id', $userId)->first();

        // เคลียร์ตะกร้า User ปัจจุบันให้ว่างก่อน เพื่อเตรียมรวมร่าง
        Cart::session($userId)->clear();

        // 4.1 ใส่ของจาก Database กลับเข้าไป
        if ($savedCart && ! empty($savedCart->cart_data)) {
            $dbItems = $savedCart->cart_data;

            // กันเหนียว: เช็คว่าเป็น JSON String หรือ Array
            if (is_string($dbItems)) {
                $decoded = json_decode($dbItems, true);
                // ถ้า decode ไม่ได้ ให้ลอง unserialize (รองรับข้อมูลเก่า)
                $dbItems = (json_last_error() === JSON_ERROR_NONE) ? $decoded : @unserialize($dbItems);
            }

            if (! empty($dbItems) && (is_array($dbItems) || is_object($dbItems))) {
                Cart::session($userId)->add($dbItems);
            }
        }

        // 4.2 [สำคัญ] เอาของจาก Guest (ข้อ 1) มารวมด้วย
        if ($guestCartItems->count() > 0) {
            $guestItemsArray = $guestCartItems->toArray();
            Cart::session($userId)->add($guestItemsArray);
        }

        // 5. บันทึกข้อมูลล่าสุดลง Database ทันที
        $finalContent = Cart::session($userId)->getContent()->toArray();
        CartStorage::updateOrCreate(
            ['user_id' => $userId],
            ['cart_data' => $finalContent]
        );

        // 6. [แก้บั๊กบางครั้งไม่มา] บังคับ Save Session เดี๋ยวนี้! ก่อน Redirect
        session()->save();

        return redirect('/');
    }
}
