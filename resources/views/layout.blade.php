<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Sans+Thai:wght@100..900&display=swap"
        rel="stylesheet">
</head>

<body class="font-['Noto_Sans_Thai']"> {{-- เพิ่ม Font ให้ Body --}}

    <div class="container mx-auto max-w-full sticky top-0 z-50 ">
        <div class="navbar bg-base-100 shadow-sm flex justify-between px-5">
            {{-- LOGO H&M-R --}}
            <a href="/"
                class="navbar-center hidden md:block w-16 h-16 cursor-pointer hover:shadow-lg shadow-base-300 hover:shadow-base-500 hover:rounded-lg">
                <img src="/images/logo_hm.png" class="w-full h-full object-contain" alt="H&M-R Logo">
            </a>

            {{-- Top-Navbar-HBG (Mobile) --}}
            <div class="md:hidden">
                <div class="navbar-start">
                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h7" />
                            </svg>
                        </div>
                        <ul tabindex="-1"
                            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-50 mt-3 w-52 p-2 shadow">
                            <li class="font-bold"><a href="/">หน้าหลัก</a></li>
                            <li class="font-bold"><a href="/orderhistory">ประวัติการสั่งซื้อ</a></li>
                            <li class="font-bold"><a href="/ordertracking">เช็คสถานะ</a></li>
                            <li class="font-bold"><a href="/cart">รายการคำสั่งซื้อ</a></li>

                            <a href="/login" class="dropdown dropdown-end">
                                <div tabindex="0" role="button"
                                    class="btn btn-ghost btn-circle w-full shadow-2xl border-2 border-gray-100">
                                    <div class="indicator">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        <span class="badge badge-sm indicator-item bg-red-500 text-white">8</span>
                                    </div>
                                </div>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- LOGO H&M-R (Mobile Center) --}}
            <a href="/"
                class="navbar-center md:hidden w-12 h-12 cursor-pointer hover:shadow-lg shadow-base-300 hover:shadow-base-500 hover:rounded-lg">
                <img src="/images/logo_hm.png" class="w-full h-full object-contain" alt="">
            </a>
            
            {{-- Top-Navbar md --}}
            <div class="hidden md:block">
                <ul class="flex justify-between items-center w-full space-x-5">
                    <li class="font-bold hover:text-emerald-600 transition"><a href="/">หน้าหลัก</a></li>
                    <li class="font-bold hover:text-emerald-600 transition"><a href="/orderhistory">ประวัติการสั่งซื้อ</a></li>
                    <li class="font-bold hover:text-emerald-600 transition"><a href="/ordertracking">เช็คสถานะ</a></li>
                    <li class="font-bold hover:text-emerald-600 transition"><a href="/cart">รายการคำสั่งซื้อ</a></li>

                    <a href="/login" class="dropdown dropdown-end">
                        <div tabindex="0" role="button"
                            class="btn btn-ghost btn-circle shadow-md border border-gray-200 hover:bg-gray-100">
                            <div class="indicator">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="badge badge-sm indicator-item bg-red-500 text-white border-none">8</span>
                            </div>
                        </div>
                    </a>
                </ul>
            </div>
        </div>
    </div>

    {{-- Contents --}}
    <div class="min-h-screen bg-[#f9fafb]"> {{-- ปรับสีพื้นหลังให้อ่อนลงเล็กน้อย --}}
        @yield('content')
    </div>

    {{-- ================= FOOTER เริ่มตรงนี้ ================= --}}
    <div class="bg-base-200 text-base-content">
        <footer class="footer sm:footer-horizontal p-10 container mx-auto">
            {{-- Column 1: บริการลูกค้า --}}
            <nav>
                <h6 class="footer-title text-emerald-600 opacity-100">ศูนย์ช่วยเหลือ</h6>
                <a href="#" class="link link-hover">ติดตามสถานะคำสั่งซื้อ</a>
                <a href="#" class="link link-hover">การจัดส่งสินค้า</a>
                <a href="#" class="link link-hover">การคืนสินค้าและการคืนเงิน</a>
                <a href="#" class="link link-hover">วิธีการสั่งซื้อ</a>
                <a href="/contactus" class="link link-hover">ติดต่อเรา</a>
            </nav>
            
            {{-- Column 2: หมวดหมู่สินค้า --}}
            <nav>
                <h6 class="footer-title text-emerald-600 opacity-100">เลือกซื้อสินค้า</h6>
                <a href="#" class="link link-hover">เสื้อยืด Oversize</a>
                <a href="#" class="link link-hover">เสื้อเชิ้ต</a>
                <a href="#" class="link link-hover">กางเกงขายาว</a>
                <a href="#" class="link link-hover">สินค้ามาใหม่</a>
                <a href="#" class="link link-hover text-red-500 font-bold">สินค้าลดราคา</a>
            </nav>
            
            {{-- Column 3: เกี่ยวกับเรา --}}
            <nav>
                <h6 class="footer-title text-emerald-600 opacity-100">เกี่ยวกับ H&M-R</h6>
                <a href="#" class="link link-hover">เรื่องราวของเรา</a>
                <a href="#" class="link link-hover">ร่วมงานกับเรา</a>
                <a href="#" class="link link-hover">นโยบายความเป็นส่วนตัว</a>
                <a href="#" class="link link-hover">เงื่อนไขการใช้งาน</a>
            </nav>

            {{-- Column 4: Newsletter (เพิ่มมาให้ดูดีขึ้น) --}}
            <form>
                <h6 class="footer-title text-emerald-600 opacity-100">รับข่าวสารและโปรโมชั่น</h6>
                <fieldset class="form-control w-80">
                    <label class="label">
                        <span class="label-text">กรอกอีเมลเพื่อรับส่วนลด 10%</span>
                    </label>
                    <div class="join">
                        <input type="text" placeholder="username@site.com" class="input input-bordered join-item w-full" />
                        <button class="btn bg-emerald-600 hover:bg-emerald-700 text-white join-item border-none">สมัคร</button>
                    </div>
                </fieldset>
            </form>
        </footer>

        {{-- Footer Bottom --}}
        <footer class="footer bg-base-300 text-base-content border-base-300 border-t px-10 py-4 container mx-auto">
            <aside class="grid-flow-col items-center">
                {{-- Logo Small --}}
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