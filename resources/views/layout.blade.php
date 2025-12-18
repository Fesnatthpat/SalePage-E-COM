<!doctype html>
<html lang="th">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">
    <title>H&M-R Store</title>
</head>

<body class="font-['Noto_Sans_Thai'] bg-[#f9fafb]">

    {{-- [แก้ไข] Logic คำนวณจำนวนสินค้าในตะกร้า --}}
    @php
        $cartCount = 0;
        // ตรวจสอบว่า Login หรือยัง? ถ้า Login แล้วค่อยดึงข้อมูลตะกร้า
        if (Auth::check()) {
            $cartSessionId = Auth::id();
            $cartCount = \Cart::session($cartSessionId)->getTotalQuantity();
        }
    @endphp

    {{-- Navbar Container --}}
    <div class="sticky top-0 z-50 bg-white shadow-sm border-b border-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <div class="navbar min-h-[4rem] px-0">

                {{-- ================= 1. NAVBAR START (ซ้าย) ================= --}}
                <div class="navbar-start">
                    {{-- 1.1 Mobile: Hamburger Menu --}}
                    <div class="dropdown md:hidden">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle -ml-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </div>
                        <ul tabindex="-1"
                            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-50 mt-3 w-64 p-2 shadow-lg">
                            <li><a href="/" class="py-3 font-bold">หน้าหลัก</a></li>
                            <li><a href="/allproducts" class="py-3 font-bold">สินค้าทั้งหมด</a></li>

                            @auth
                                <li><a href="/orderhistory" class="py-3 font-bold">ประวัติการสั่งซื้อ</a></li>
                                <li><a href="/ordertracking" class="py-3 font-bold">เช็คสถานะ</a></li>
                                <li class="border-t mt-2 pt-2">
                                    <div class="flex items-center gap-2 p-2">
                                        @if (Auth::user()->avatar)
                                            <img src="{{ Auth::user()->avatar }}" class="w-8 h-8 rounded-full border">
                                        @else
                                            <div class="w-8 h-8 rounded-full bg-gray-200"></div>
                                        @endif
                                        <span class="font-bold text-gray-700">{{ Auth::user()->name }}</span>
                                    </div>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="w-full">
                                        @csrf
                                        <button type="submit"
                                            class="text-red-500 font-bold py-2 w-full text-left">ออกจากระบบ</button>
                                    </form>
                                </li>
                            @else
                                <div class="p-2 mt-2">
                                    <a href="/login"
                                        class="btn bg-[#06C755] hover:bg-[#00B900] text-white w-full border-none">
                                        เข้าสู่ระบบด้วย LINE
                                    </a>
                                </div>
                            @endauth
                        </ul>
                    </div>

                    {{-- 1.2 Desktop: Logo --}}
                    <a href="/" class="hidden md:flex btn btn-ghost text-xl p-0 hover:bg-transparent">
                        <img src="/images/logo_hm.png" alt="Logo" class="h-10 md:h-12 w-auto object-contain">
                    </a>
                </div>


                {{-- ================= 2. NAVBAR CENTER (กลาง) ================= --}}
                <div class="navbar-center">
                    {{-- 2.1 Mobile: Logo --}}
                    <a href="/" class="md:hidden btn btn-ghost text-xl p-0 hover:bg-transparent">
                        <img src="/images/logo_hm.png" alt="Logo" class="h-10 w-auto object-contain">
                    </a>

                    {{-- 2.2 Desktop: Menu Links --}}
                    <ul class="menu menu-horizontal px-1 gap-6 text-base font-medium text-gray-600 hidden md:flex">
                        <li><a href="/" class="hover:text-emerald-600 hover:bg-transparent">หน้าหลัก</a></li>
                        <li><a href="/allproducts" class="hover:text-emerald-600 hover:bg-transparent">สินค้า</a></li>

                        @auth
                            <li><a href="/orderhistory"
                                    class="hover:text-emerald-600 hover:bg-transparent">ประวัติการสั่งซื้อ</a></li>
                            <li><a href="/ordertracking" class="hover:text-emerald-600 hover:bg-transparent">เช็คสถานะ</a>
                            </li>
                        @else
                            <li><a href="/login" class="hover:text-emerald-600 hover:bg-transparent">ประวัติการสั่งซื้อ</a>
                            </li>
                            <li><a href="/login" class="hover:text-emerald-600 hover:bg-transparent">เช็คสถานะ</a></li>
                        @endauth
                    </ul>
                </div>


                {{-- ================= 3. NAVBAR END (ขวา) ================= --}}
                <div class="navbar-end flex items-center gap-2 md:gap-4">

                    {{-- [แก้ไข] Cart Icon พร้อมตัวเลขจำนวนสินค้า (Badge) --}}
                    {{-- ครอบด้วย @auth เพื่อให้แสดงเฉพาะตอนล็อกอิน --}}
                    @auth
                        <a href="/cart" class="btn btn-ghost btn-circle relative hover:bg-gray-100">
                            <div class="indicator">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                @if ($cartCount > 0)
                                    <span class="badge badge-sm indicator-item bg-red-500 text-white border-none">
                                        {{ $cartCount }}
                                    </span>
                                @endif
                            </div>
                        </a>
                    @endauth

                    {{-- Login / User Profile --}}
                    @guest
                        <a href="/login"
                            class="hidden md:flex items-center gap-2 btn bg-[#06C755] hover:bg-[#00B900] text-white border-none px-5 rounded-full shadow-sm hover:shadow-md transition">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M472 0H40C17.9 0 0 17.9 0 40v304c0 22.1 17.9 40 40 40h214.3l98.4 91.8c6.6 6.2 16.8 6.7 23.9 1.4 5.9-4.3 9.4-11 9.4-18.3v-74.9H472c22.1 0 40-17.9 40-40V40c0-22.1-17.9-40-40-40zM362.2 178.6c11.7 0 21.1 9.4 21.1 21.1 0 11.7-9.4 21.1-21.1 21.1-11.7 0-21.1-9.4-21.1-21.1 0-11.7 9.5-21.1 21.1-21.1zm-88.7 0c11.7 0 21.1 9.4 21.1 21.1 0 11.7-9.4 21.1-21.1 21.1-11.7 0-21.1-9.4-21.1-21.1 0-11.7 9.4-21.1 21.1-21.1zm-88.7 0c11.7 0 21.1 9.4 21.1 21.1 0 11.7-9.4 21.1-21.1 21.1-11.7 0-21.1-9.4-21.1-21.1 0-11.7 9.4-21.1 21.1-21.1z" />
                            </svg>
                            เข้าสู่ระบบ
                        </a>
                    @endguest

                    @auth
                        <div class="dropdown dropdown-end hidden md:block">
                            <div tabindex="0" role="button"
                                class="btn btn-ghost btn-circle avatar border border-emerald-200 ring-2 ring-transparent hover:ring-emerald-400 transition">
                                <div class="w-10 rounded-full">
                                    @if (Auth::user()->avatar)
                                        <img src="{{ Auth::user()->avatar }}" alt="Profile" />
                                    @else
                                        <img
                                            src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=0D8ABC&color=fff" />
                                    @endif
                                </div>
                            </div>
                            <ul tabindex="-1"
                                class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow-xl bg-white rounded-xl w-64 border border-gray-100">
                                <li class="menu-title px-4 py-3 bg-gray-50 rounded-t-lg border-b border-gray-100 mb-2">
                                    <div class="flex flex-col gap-0.5">
                                        <span class="text-xs font-normal text-gray-500">เข้าสู่ระบบโดย</span>
                                        <span class="text-sm font-bold text-gray-800 truncate w-full"
                                            title="{{ Auth::user()->name }}">
                                            {{ Auth::user()->name }}
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    {{-- <a href="/profile"
                                        class="py-3 text-gray-600 hover:text-emerald-600 hover:bg-emerald-50 active:bg-emerald-100 rounded-lg transition-colors duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                        <span class="font-medium">ข้อมูลส่วนตัว</span>
                                    </a> --}}
                                </li>
                                <div class="divider my-1 before:bg-gray-100 after:bg-gray-100"></div>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="w-full p-0 block">
                                        @csrf
                                        <button type="submit"
                                            class="w-full text-left py-3 px-4 text-red-500 hover:bg-red-50 hover:text-red-600 rounded-lg flex items-center gap-3 transition-colors duration-200">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                            </svg>
                                            <span class="font-medium">ออกจากระบบ</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endauth

                </div>
            </div>
        </div>
    </div>

    {{-- Contents --}}
    <div class="min-h-screen">
        @yield('content')
    </div>

    {{-- Footer --}}
    <div class="bg-base-200 text-base-content mt-10">
        <footer class="footer sm:footer-horizontal p-10 container mx-auto">
            <nav>
                <h6 class="footer-title text-emerald-600 opacity-100">ศูนย์ช่วยเหลือ</h6>
                @auth
                    <a href="/ordertracking" class="link link-hover">ติดตามสถานะคำสั่งซื้อ</a>
                @else
                    <a href="/login" class="link link-hover">ติดตามสถานะคำสั่งซื้อ</a>
                @endauth
                <a href="#" class="link link-hover">การจัดส่งสินค้า</a>
                <a href="#" class="link link-hover">การคืนสินค้าและการคืนเงิน</a>
                <a href="#" class="link link-hover">วิธีการสั่งซื้อ</a>
                <a href="/contactus" class="link link-hover">ติดต่อเรา</a>
            </nav>

            <nav>
                <h6 class="footer-title text-emerald-600 opacity-100">เลือกซื้อสินค้า</h6>
                <a href="#" class="link link-hover">เสื้อยืด Oversize</a>
                <a href="#" class="link link-hover">เสื้อเชิ้ต</a>
                <a href="#" class="link link-hover">กางเกงขายาว</a>
                <a href="#" class="link link-hover">สินค้ามาใหม่</a>
                <a href="#" class="link link-hover text-red-500 font-bold">สินค้าลดราคา</a>
            </nav>

            <nav>
                <h6 class="footer-title text-emerald-600 opacity-100">เกี่ยวกับ H&M-R</h6>
                <a href="#" class="link link-hover">เรื่องราวของเรา</a>
                <a href="#" class="link link-hover">ร่วมงานกับเรา</a>
                <a href="#" class="link link-hover">นโยบายความเป็นส่วนตัว</a>
                <a href="#" class="link link-hover">เงื่อนไขการใช้งาน</a>
            </nav>

            <form>
                <h6 class="footer-title text-emerald-600 opacity-100">รับข่าวสารและโปรโมชั่น</h6>
                <fieldset class="form-control w-80">
                    <label class="label">
                        <span class="label-text">กรอกอีเมลเพื่อรับส่วนลด 10%</span>
                    </label>
                    <div class="join">
                        <input type="text" placeholder="username@site.com"
                            class="input input-bordered join-item w-full" />
                        <button
                            class="btn bg-emerald-600 hover:bg-emerald-700 text-white join-item border-none">สมัคร</button>
                    </div>
                </fieldset>
            </form>
        </footer>

        <footer class="footer bg-base-300 text-base-content border-base-300 border-t px-10 py-4 container mx-auto">
            <aside class="grid-flow-col items-center">
                <div class="w-10 h-10 grayscale opacity-70">
                    <img src="/images/logo_hm.png" alt="Logo" class="w-full h-full object-contain">
                </div>
                <p>
                    <span class="font-bold text-lg">H&M-R Store Thailand</span>
                    <br />
                    แฟชั่นนำเทรนด์ ส่งตรงถึงบ้านคุณ © 2025
                </p>
            </aside>
            <nav class="md:place-self-center md:justify-self-end">
                <div class="grid grid-flow-col gap-4">
                    <a class="cursor-pointer hover:text-blue-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                            </path>
                        </svg>
                    </a>
                    <a class="cursor-pointer hover:text-red-600 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                            </path>
                        </svg>
                    </a>
                    <a class="cursor-pointer hover:text-blue-800 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            class="fill-current">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                            </path>
                        </svg>
                    </a>
                </div>
            </nav>
        </footer>
    </div>

</body>

</html>
