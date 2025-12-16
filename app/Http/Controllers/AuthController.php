<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // พาผู้ใช้ไปยังหน้าล็อกอินของ LINE
    public function redirectToLine()
    {
        // แก้ไขโดยใช้ with(['scope' => '...']) แทน scopes([...])
        return Socialite::driver('line')
            ->with(['scope' => 'profile openid email'])
            ->redirect();
    }

    // จัดการข้อมูล Callback หลังจากผู้ใช้ล็อกอินสำเร็จ
    public function handleLineCallback()
    {
        $lineUser = Socialite::driver('line')->user();

        // // เพิ่มบรรทัดนี้ชั่วคราว
        // dd($lineUser);

        // ค้นหาหรือสร้างผู้ใช้ในฐานข้อมูล
        $user = User::updateOrCreate(
            ['line_id' => $lineUser->getId()],
            [
                'name' => $lineUser->getName(),
                'email' => $lineUser->getEmail(), // อาจเป็นค่าว่าง
                'avatar' => $lineUser->getAvatar(),
            ]
        );

        // เข้าสู่ระบบผู้ใช้ด้วย Auth facade (ใช้ Session based Auth เพราะอยู่ใน web.php)
        Auth::login($user);

        // [แก้ไข] ลบส่วนสร้าง API Token ออก เพราะเราใช้ Session Auth ใน web.php
        // และทำการ Redirect ผู้ใช้ไปยังหน้าอื่นแทนการส่ง JSON

        return redirect('/'); // เปลี่ยนเส้นทางไปยังหน้าที่ต้องการหลังล็อกอิน
    }
}
