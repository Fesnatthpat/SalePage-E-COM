@extends('layout')

@section('content')
    <div class="container mx-auto p-4 lg:p-8">

        {{-- Header (Mobile View) --}}
        <div class="lg:hidden mb-6">
            <h1 class="text-2xl font-bold text-gray-800">บัญชีของฉัน</h1>
            <p class="text-gray-500 text-sm">จัดการข้อมูลส่วนตัว</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            {{-- ==================== SIDEBAR (เมนูซ้าย) ==================== --}}
            <div class="lg:col-span-3">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden sticky top-24">

                    {{-- Mock Profile Header --}}
                    <div class="p-6 text-center border-b border-gray-100 bg-gradient-to-b from-emerald-50/50 to-white">
                        <div class="relative w-24 h-24 mx-auto mb-3">
                            {{-- รูปโปรไฟล์จำลอง --}}
                            <img src="https://ui-avatars.com/api/?name=Somchai+Rakdee&background=10b981&color=fff&size=128"
                                alt="Profile"
                                class="w-full h-full rounded-full object-cover border-4 border-white shadow-md">
                        </div>
                        <h2 class="font-bold text-gray-800 text-lg line-clamp-1">สมชาย รักดี</h2>
                        <p class="text-gray-500 text-sm mb-3">somchai@example.com</p>
                        <span
                            class="inline-block px-3 py-1 text-xs font-semibold text-emerald-700 bg-emerald-100 rounded-full">
                            สมาชิกทั่วไป
                        </span>
                    </div>

                    {{-- Menu Links (ใส่ Link เป็น # เพื่อ Mockup) --}}
                    <nav class="p-2 space-y-1">
                        <a href="#"
                            class="flex items-center gap-3 px-4 py-3 bg-emerald-50 text-emerald-700 rounded-lg font-medium transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            ข้อมูลส่วนตัว
                        </a>

                        <a href="#"
                            class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-emerald-600 rounded-lg font-medium transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                            ประวัติการสั่งซื้อ
                        </a>

                        <a href="#"
                            class="flex items-center gap-3 px-4 py-3 text-gray-600 hover:bg-gray-50 hover:text-emerald-600 rounded-lg font-medium transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            ที่อยู่จัดส่ง
                        </a>

                        <button type="button"
                            class="w-full flex items-center gap-3 px-4 py-3 text-red-600 hover:bg-red-50 rounded-lg font-medium transition-all mt-2 border-t border-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            ออกจากระบบ
                        </button>
                    </nav>
                </div>
            </div>

            {{-- ==================== MAIN CONTENT (ขวา) ==================== --}}
            <div class="lg:col-span-9 space-y-6">

                {{-- Alert Mockup (ซ่อนไว้ก่อน หรือจะเปิดโชว์ก็ได้) --}}
                {{-- 
                <div class="alert alert-success shadow-sm text-white border-none bg-emerald-500">
                    <svg ...></svg>
                    <span>บันทึกข้อมูลเรียบร้อยแล้ว</span>
                </div>
                --}}

                {{-- Card 1: ฟอร์มข้อมูลส่วนตัว --}}
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                        <div>
                            <h2 class="text-lg font-bold text-gray-800">ข้อมูลส่วนตัว</h2>
                            <p class="text-gray-500 text-sm">แก้ไขข้อมูลพื้นฐานของคุณ</p>
                        </div>
                        <div class="p-2 bg-emerald-50 rounded-lg text-emerald-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                        </div>
                    </div>

                    <div class="p-6">
                        {{-- 🔥 Action ใส่ # เพื่อไม่ให้ Error --}}
                        <form action="#" method="POST" enctype="multipart/form-data">

                            {{-- ส่วนอัปโหลดรูปภาพ (Mockup Image Upload) --}}
                            <div class="flex flex-col sm:flex-row items-center gap-6 mb-8" x-data="{ photoName: null, photoPreview: null }">
                                <div
                                    class="relative w-24 h-24 sm:w-28 sm:h-28 rounded-full overflow-hidden border-2 border-gray-100 shadow-sm bg-gray-50 flex-shrink-0">
                                    <img x-show="!photoPreview"
                                        src="https://ui-avatars.com/api/?name=Somchai+Rakdee&background=10b981&color=fff&size=128"
                                        class="w-full h-full object-cover">
                                    <img x-show="photoPreview" :src="photoPreview" class="w-full h-full object-cover"
                                        style="display: none;">
                                </div>

                                <div class="text-center sm:text-left">
                                    <h3 class="font-medium text-gray-900 mb-1">รูปโปรไฟล์</h3>
                                    <p class="text-xs text-gray-500 mb-3">ไฟล์ JPG, PNG ขนาดไม่เกิน 2MB</p>

                                    {{-- Input file จริง (ซ่อนไว้) --}}
                                    <input type="file" name="photo" id="photo" class="hidden" x-ref="photo"
                                        x-on:change="
                                            photoName = $refs.photo.files[0].name;
                                            const reader = new FileReader();
                                            reader.onload = (e) => { photoPreview = e.target.result; };
                                            reader.readAsDataURL($refs.photo.files[0]);
                                        ">

                                    <button type="button"
                                        class="btn btn-sm btn-outline text-emerald-600 hover:bg-emerald-50 hover:border-emerald-600 border-gray-300 normal-case gap-2"
                                        x-on:click="$refs.photo.click()">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        อัปโหลดรูปใหม่
                                    </button>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                {{-- ชื่อ-นามสกุล (Mockup Value) --}}
                                <div class="form-control w-full">
                                    <label class="label"><span
                                            class="label-text font-medium text-gray-700">ชื่อ-นามสกุล</span></label>
                                    <input type="text" value="สมชาย รักดี"
                                        class="input input-bordered w-full focus:input-primary focus:ring-2 focus:ring-emerald-200 transition-all" />
                                </div>

                                {{-- ชื่อผู้ใช้ (Mockup Value) --}}
                                <div class="form-control w-full">
                                    <label class="label"><span
                                            class="label-text font-medium text-gray-700">ชื่อผู้ใช้</span></label>
                                    <input type="text" value="somchai.rakdee" disabled
                                        class="input input-bordered w-full bg-gray-50 text-gray-500 cursor-not-allowed" />
                                </div>

                                {{-- อีเมล (Mockup Value) --}}
                                <div class="form-control w-full">
                                    <label class="label"><span
                                            class="label-text font-medium text-gray-700">อีเมล</span></label>
                                    <input type="email" value="somchai@example.com"
                                        class="input input-bordered w-full focus:input-primary focus:ring-2 focus:ring-emerald-200 transition-all" />
                                </div>

                                {{-- เบอร์โทรศัพท์ (Mockup Value) --}}
                                <div class="form-control w-full">
                                    <label class="label"><span
                                            class="label-text font-medium text-gray-700">เบอร์โทรศัพท์</span></label>
                                    <input type="tel" value="081-234-5678"
                                        class="input input-bordered w-full focus:input-primary focus:ring-2 focus:ring-emerald-200 transition-all" />
                                </div>
                            </div>

                            <div class="mt-8 flex justify-end pt-6 border-t border-gray-50">
                                <button type="button"
                                    class="btn bg-emerald-600 hover:bg-emerald-700 text-white border-none shadow-md min-w-[150px]">
                                    บันทึกข้อมูล
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- Card 2: เปลี่ยนรหัสผ่าน --}}
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                        <div>
                            <h2 class="text-lg font-bold text-gray-800">ความปลอดภัย</h2>
                            <p class="text-gray-500 text-sm">เปลี่ยนรหัสผ่านเพื่อความปลอดภัย</p>
                        </div>
                        <div class="p-2 bg-emerald-50 rounded-lg text-emerald-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                    </div>

                    <div class="p-6">
                        {{-- 🔥 Action ใส่ # --}}
                        <form action="#" method="POST">

                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="form-control w-full">
                                    <label class="label"><span
                                            class="label-text font-medium text-gray-700">รหัสผ่านปัจจุบัน</span></label>
                                    <input type="password" placeholder="••••••••"
                                        class="input input-bordered w-full focus:input-primary" />
                                </div>

                                <div class="form-control w-full">
                                    <label class="label"><span
                                            class="label-text font-medium text-gray-700">รหัสผ่านใหม่</span></label>
                                    <input type="password" placeholder="••••••••"
                                        class="input input-bordered w-full focus:input-primary" />
                                </div>

                                <div class="form-control w-full">
                                    <label class="label"><span
                                            class="label-text font-medium text-gray-700">ยืนยันรหัสผ่านใหม่</span></label>
                                    <input type="password" placeholder="••••••••"
                                        class="input input-bordered w-full focus:input-primary" />
                                </div>
                            </div>

                            <div class="mt-6 flex justify-end">
                                <button type="button"
                                    class="btn btn-outline border-gray-300 text-gray-600 hover:bg-emerald-50 hover:text-emerald-700 hover:border-emerald-300">
                                    เปลี่ยนรหัสผ่าน
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
