@extends('layout')

@section('content')

    {{-- ==================== MOCK DATA (จำลองข้อมูลตรงนี้เลย ไม่ต้องใช้ Controller) ==================== --}}
    @php
        // 1. จำลองหมวดหมู่
        $categories = ['เสื้อยืด', 'กางเกง', 'รองเท้า', 'หมวก', 'กระเป๋า', 'Accressories', 'เครื่องประดับ'];

        // 2. จำลองสินค้า 12 ชิ้น (สร้างเป็น Object เพื่อให้เรียกใช้ ->name ได้เหมือน DB จริง)
        $products = collect(range(1, 12))->map(function ($i) {
            return (object) [
                'id' => $i,
                'name' => 'สินค้าตัวอย่างที่ ' . $i . ' (Mockup)',
                'category' => 'เสื้อผ้า',
                'price' => rand(150, 1500), // สุ่มราคา
                'original_price' => rand(0, 1) ? rand(1600, 3000) : null, // สุ่มราคาเต็ม
                'image' => 'https://placehold.co/400x500/eaeaea/a0a0a0?text=Product+' . $i,
                'badge' => rand(0, 1) ? 'SALE' : null, // สุ่มป้าย
                'rating' => rand(1, 5), // สุ่มดาว
                'sold' => rand(10, 999), // สุ่มยอดขาย
            ];
        });

        // จำลอง request() ให้ว่างไว้เพื่อกัน error
        if (!function_exists('request')) {
            function request($key = null)
            {
                return null;
            }
        }
    @endphp
    {{-- ==================== จบส่วน MOCK DATA ==================== --}}

    <div class="bg-gray-50 min-h-screen py-8">
        <div class="container mx-auto px-4">

            {{-- Header & Breadcrumbs --}}
            <div class="flex flex-col md:flex-row justify-between items-center mb-6 gap-4">
                <h1 class="text-2xl font-bold text-gray-800">สินค้าทั้งหมด</h1>
                <div class="text-sm breadcrumbs text-gray-500"></div>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">

                {{-- ==================== SIDEBAR (ตัวกรอง) ==================== --}}
                <aside class="w-full lg:w-1/4">
                    <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100 sticky top-4">

                        <h3 class="font-bold text-lg mb-4 text-gray-700">ตัวกรองค้นหา</h3>

                        {{-- Search Form (ใส่ action="#" ไปก่อน) --}}
                        <form action="#" method="GET">

                            {{-- ช่องค้นหา --}}
                            <div class="form-control mb-4">
                                <label class="label"><span class="label-text">ค้นหาชื่อสินค้า</span></label>
                                <div class="relative">
                                    <input type="text" name="search" value="" placeholder="พิมพ์คำค้นหา..."
                                        class="input input-bordered w-full pr-10 bg-gray-50" />
                                    <button type="button"
                                        class="absolute right-2 top-2.5 text-gray-400 hover:text-emerald-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="divider my-2"></div>

                            {{-- หมวดหมู่ --}}
                            <div class="mb-4">
                                <label class="label"><span class="label-text font-bold">หมวดหมู่</span></label>
                                <ul class="menu bg-base-100 w-full p-0 text-gray-600">
                                    <li><a href="#" class="active">ทั้งหมด</a></li>
                                    @foreach ($categories as $cat)
                                        <li>
                                            <a href="#">{{ $cat }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="divider my-2"></div>

                            {{-- ช่วงราคา --}}
                            <div class="mb-4">
                                <label class="label"><span class="label-text font-bold">ช่วงราคา</span></label>
                                <div class="flex gap-2 items-center">
                                    <input type="number" name="min_price" placeholder="ต่ำสุด"
                                        class="input input-bordered input-sm w-full bg-gray-50">
                                    <span>-</span>
                                    <input type="number" name="max_price" placeholder="สูงสุด"
                                        class="input input-bordered input-sm w-full bg-gray-50">
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary btn-block text-white mt-4 shadow-md">
                                ค้นหา
                            </button>
                        </form>
                    </div>
                </aside>

                {{-- ==================== MAIN CONTENT (รายการสินค้า) ==================== --}}
                <main class="w-full lg:w-3/4">

                    {{-- Toolbar (Sort & Count) --}}
                    <div
                        class="bg-white p-3 rounded-lg shadow-sm border border-gray-100 mb-6 flex justify-between items-center">
                        <span class="text-gray-500 text-sm hidden sm:inline">พบสินค้า {{ count($products) }} รายการ</span>

                        <div class="flex items-center gap-2">
                            <span class="text-sm text-gray-600">เรียงตาม:</span>
                            <select class="select select-bordered select-sm bg-gray-50">
                                <option>ใหม่ล่าสุด</option>
                                <option>ราคาต่ำ -> สูง</option>
                                <option>ราคาสูง -> ต่ำ</option>
                            </select>
                        </div>
                    </div>

                    {{-- Product Grid --}}
                    @if (count($products) > 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                            @foreach ($products as $product)
                                {{-- CARD ITEM --}}
                                <div
                                    class="card bg-white border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group">
                                    <a href="/product">
                                        <figure class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                                            <img src="{{ $product->image }}" alt="{{ $product->name }}"
                                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />

                                            @if ($product->badge)
                                                <div
                                                    class="absolute top-2 left-2 badge badge-error text-white text-xs font-bold shadow-sm">
                                                    {{ $product->badge }}
                                                </div>
                                            @endif

                                            {{-- ปุ่มดูรายละเอียด --}}
                                            <div
                                                class="absolute bottom-4 left-0 right-0 px-4 translate-y-full group-hover:translate-y-0 transition duration-300 opacity-0 group-hover:opacity-100">
                                                <a href="/product"
                                                    class="btn btn-block bg-white/95 hover:bg-emerald-600 hover:text-white text-gray-800 border-none shadow-md text-sm h-10 min-h-0 backdrop-blur-sm">
                                                    ดูรายละเอียด
                                                </a>
                                            </div>
                                        </figure>
                                    </a>

                                    <div class="card-body p-4">
                                        <div class="text-xs text-gray-400 mb-1">{{ $product->category }}</div>
                                        <h2
                                            class="card-title text-sm font-bold text-gray-800 leading-tight min-h-[2.5em] line-clamp-2">
                                            <a href="/product"
                                                class="hover:text-emerald-600 transition">{{ $product->name }}</a>
                                        </h2>

                                        <div class="flex justify-between items-end mt-2">
                                            <div class="flex flex-col">
                                                <span
                                                    class="text-lg font-bold text-emerald-600">฿{{ number_format($product->price) }}</span>
                                                @if ($product->original_price)
                                                    <span
                                                        class="text-xs text-gray-400 line-through">฿{{ number_format($product->original_price) }}</span>
                                                @endif
                                            </div>

                                            @if ($product->rating)
                                                <div class="flex items-center gap-1 text-xs text-gray-500">
                                                    <svg class="w-3 h-3 text-orange-400 fill-current" viewBox="0 0 24 24">
                                                        <path
                                                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                                    </svg>
                                                    {{ $product->rating }}
                                                </div>
                                            @else
                                                <span class="text-xs text-gray-400">ขายแล้ว {{ $product->sold }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- Mockup Pagination --}}
                        <div class="mt-8 flex justify-center">
                            <div class="join">
                                <button class="join-item btn btn-sm">«</button>
                                <button class="join-item btn btn-sm btn-active btn-primary text-white">1</button>
                                <button class="join-item btn btn-sm">2</button>
                                <button class="join-item btn btn-sm">3</button>
                                <button class="join-item btn btn-sm">»</button>
                            </div>
                        </div>
                    @else
                        {{-- กรณีไม่พบสินค้า --}}
                        <div class="text-center py-20 bg-white rounded-lg border border-dashed">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-300 mb-4"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <p class="text-gray-500 text-lg">ไม่พบสินค้าที่คุณค้นหา</p>
                            <button class="btn btn-ghost btn-sm mt-2 text-emerald-600">ล้างคำค้นหา</button>
                        </div>
                    @endif
                </main>
            </div>
        </div>
    </div>

@endsection
