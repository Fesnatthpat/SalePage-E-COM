@extends('layout')

@section('content')
    <div class="container mx-auto px-4">
        {{-- จัดกึ่งกลางหน้าจอทั้งแนวตั้งและแนวนอน --}}
        <div class="flex justify-center items-center min-h-[calc(100vh-100px)] py-10">
            
            {{-- Card Container: ใช้ max-w-sm (เล็กกว่าเดิมนิดหน่อยเพราะเนื้อหาน้อย) --}}
            <div class="w-full max-w-sm bg-white p-8 rounded-xl shadow-lg border border-gray-100 text-center">
                
                {{-- Header / Logo --}}
                <div class="mb-6">
                    {{-- ใส่ Logo ของเว็บตรงนี้ (ถ้ามี) --}}
                    {{-- <img src="/path/to/logo.png" class="h-12 mx-auto mb-4" alt="Logo"> --}}
                    <h2 class="text-2xl font-bold text-gray-800">ยินดีต้อนรับ</h2>
                    <p class="text-gray-500 text-sm mt-2">กรุณาเข้าสู่ระบบเพื่อใช้งานต่อ</p>
                </div>

                {{-- ปุ่ม Google Login --}}
                <a href="/verify" class="w-full flex items-center justify-center gap-3 bg-white border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium py-3 px-4 rounded-lg transition duration-200 shadow-sm hover:shadow-md group">
                    {{-- Google Icon SVG --}}
                    <svg class="w-6 h-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                    </svg>
                    <span class="text-base group-hover:text-gray-900">ดำเนินการต่อด้วย Google</span>
                </a>

                {{-- ข้อความเพิ่มเติมด้านล่าง (Privacy Policy / Terms) --}}
                <div class="mt-8 pt-6 border-t border-gray-100">
                    <p class="text-xs text-gray-400 leading-relaxed">
                        โดยการเข้าสู่ระบบ ถือว่าคุณยอมรับ
                        <a href="#" class="text-gray-500 underline hover:text-gray-800">ข้อตกลงการใช้งาน</a> และ 
                        <a href="#" class="text-gray-500 underline hover:text-gray-800">นโยบายความเป็นส่วนตัว</a> ของเรา
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection