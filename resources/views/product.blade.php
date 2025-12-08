@extends('layout')

@section('content')
    {{-- Alpine.js Data: จัดการสถานะรูปภาพ (activeImage) และจำนวนสินค้า (quantity) --}}
    <div x-data="{
        activeImage: '/images/T-Shirt-1.png',
        images: [
            '/images/T-Shirt-1.png',
            '/images/T-Shirt-W.png',
            '/images/T-Shirt-B.png'
        ],
        quantity: 1
    }" class="container mx-auto px-4 py-8 lg:py-12">

        {{-- Grid Layout: มือถือ 1 คอลัมน์ / PC 2 คอลัมน์ --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 border-gray-200 shadow bg-white p-12 rounded-lg">

            {{-- ================= COLUMN 1: IMAGE GALLERY (ซ้าย) ================= --}}
            <div class="flex flex-col gap-4">

                {{-- รูปใหญ่ (Main Image) --}}
                <div
                    class="w-full relative aspect-square lg:aspect-[4/3] overflow-hidden rounded-lg bg-gray-50 flex items-center justify-center border border-gray-100">
                    <img :src="activeImage"
                        class="w-full h-full object-contain transition-opacity duration-300 ease-in-out" alt="Product Image">
                </div>

                {{-- รูปเล็ก (Thumbnails) --}}
                <div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide">
                    <template x-for="img in images">
                        <button @click="activeImage = img"
                            class="w-20 h-20 flex-shrink-0 border-2 rounded-md overflow-hidden transition-all duration-200"
                            :class="activeImage === img ? 'border-emerald-500 opacity-100' :
                                'border-transparent hover:border-gray-300 opacity-70 hover:opacity-100'">
                            <img :src="img" class="w-full h-full object-cover">
                        </button>
                    </template>
                </div>
            </div>

            {{-- ================= COLUMN 2: PRODUCT DETAILS (ขวา) ================= --}}
            <div class="flex flex-col gap-6">

                {{-- Header Section --}}
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 leading-tight">เสื้อยืด Oversize Cotton 100%</h1>
                    <p class="text-gray-500 mt-2 text-base">รุ่น Premium Comfortable ใส่สบาย ระบายอากาศดี ไม่ย้วยง่าย</p>

                    {{-- Rating --}}
                    <div class="flex items-center gap-2 mt-3">
                        <div class="flex text-yellow-400 text-sm">★★★★★</div>
                        <span class="text-sm text-gray-400">5.0 (Review 99+) | ขายแล้ว 1.2k ชิ้น</span>
                    </div>
                </div>

                <hr class="border-gray-200">

                {{-- Color Selection --}}
                <div>
                    <h3 class="font-medium text-gray-900 mb-3">สี (Color)</h3>
                    <div class="flex flex-wrap gap-3">
                        <button
                            class="px-6 py-2 border rounded hover:border-black focus:border-black focus:ring-1 focus:ring-black transition bg-white text-gray-700">
                            ครีม (Cream)
                        </button>
                        <button
                            class="px-6 py-2 border rounded hover:border-black focus:border-black focus:ring-1 focus:ring-black transition bg-white text-gray-700">
                            ขาว (White)
                        </button>
                        <button
                            class="px-6 py-2 border rounded hover:border-black focus:border-black focus:ring-1 focus:ring-black transition bg-white text-gray-700">
                            ดำ (Black)
                        </button>
                    </div>
                </div>

                {{-- Price --}}
                <div class="bg-gray-50 p-4 rounded-lg -mx-2 lg:mx-0">
                    <h2 class="text-4xl font-bold text-emerald-600">฿390.00 <span
                            class="text-lg text-gray-400 font-normal line-through ml-2">฿590.00</span></h2>
                </div>

                {{-- Quantity & Add to Cart --}}
                <div class="flex flex-col sm:flex-row gap-4 mt-2">

                    {{-- Quantity Input (แก้ไขให้กดได้แล้ว) --}}
                    <div class="flex items-center border border-gray-300 rounded h-12 w-36 bg-white">
                        <button @click="quantity > 1 ? quantity-- : null"
                            class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold transition rounded-l cursor-pointer">
                            -
                        </button>
                        <input type="number" x-model="quantity"
                            class="w-full h-full text-center border-none focus:ring-0 text-gray-900 font-medium text-lg appearance-none m-0"
                            readonly>
                        <button @click="quantity++"
                            class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold transition rounded-r cursor-pointer">
                            +
                        </button>
                    </div>

                    {{-- Buy Button --}}
                    <a href="/cart"
                        class="flex-1 btn bg-emerald-500 hover:bg-emerald-600 text-white font-bold text-lg rounded h-12 transition shadow-md hover:shadow-lg active:scale-[0.98]">
                        ซื้อเลย
                    </a>
                </div>

                {{-- Description Tabs --}}
                <div class="mt-8 border-t border-gray-100 pt-6">
                    <div class="flex gap-8 text-sm border-b border-gray-200">
                        <button
                            class="text-emerald-600 font-bold border-b-2 border-emerald-600 pb-2 px-1">รายละเอียดสินค้า</button>
                        {{-- <button class="text-gray-500 hover:text-gray-800 pb-2 px-1 transition">รีวิวจากผู้ซื้อ (120)</button> --}}
                    </div>
                    <div class="mt-4 text-gray-600 text-sm leading-7">
                        <p>เสื้อยืดทรง Oversize สไตล์เกาหลี ผลิตจากผ้า Cotton 100% เกรดพรีเมียม สัมผัสนุ่ม ใส่สบาย
                            ระบายอากาศได้ดีเยี่ยม เหมาะกับอากาศเมืองไทย</p>
                        <ul class="list-disc list-inside mt-2 space-y-1">
                            <li>ทรง: Regular Fit / Oversize</li>
                            <li>วัสดุ: Cotton Comb 100% No.32</li>
                            <li>การดูแลรักษา: ซักเครื่องได้ (แนะนำใส่ถุงถนอมผ้า)</li>
                        </ul>
                        {{-- img product --}}
                        <div class="flex flex-2 gap-5 mt-4">
                            <div class="mt-4">
                                <img src="/images/T-Shirt-1.png" alt="Product Detail Image"
                                    class="w-[350px] h-auto rounded-lg border border-gray-200">
                            </div>
                            <div class="mt-4">
                                <img src="/images/T-Shirt-B.png" alt="Product Detail Image"
                                    class="w-[350px] h-auto rounded-lg border border-gray-200">
                            </div>
                            <div class="mt-4">
                                <img src="/images/T-Shirt-W.png" alt="Product Detail Image"
                                    class="w-[350px] h-auto rounded-lg border border-gray-200">
                            </div>
                        </div>

                    </div>
                </div>

                {{-- รีวิว Tabs --}}
                <div class="mt-8 border-t border-gray-100 pt-6">

                    {{-- ปุ่มแท็บ --}}
                    <div class="flex gap-8 text-sm border-b border-gray-200">
                        <button class="text-gray-500 hover:text-gray-800 pb-2 px-1 transition">
                            รีวิวจากผู้ซื้อ (3)
                        </button>
                    </div>

                    {{-- สรุปคะแนนรวม --}}
                    <div class="mt-6 bg-gray-50 p-5 rounded-xl border border-gray-200">
                        <div class="flex items-center gap-6">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-emerald-600">4.8</div>
                                <div class="flex items-center justify-center mt-1 text-yellow-400 text-xl">
                                    ★★★★★
                                </div>
                                <p class="text-gray-600 text-sm mt-1">จาก 3 รีวิว</p>
                            </div>

                            <div class="flex-1">
                                {{-- แถบคะแนน --}}
                                @php
                                    $stars = [
                                        5 => 2,
                                        4 => 1,
                                        3 => 0,
                                        2 => 0,
                                        1 => 0,
                                    ];
                                @endphp

                                @foreach ($stars as $star => $count)
                                    @php
                                        $percent = ($count / 120) * 100;
                                    @endphp
                                    <div class="flex items-center gap-3 mb-1">
                                        <span class="w-6 text-sm text-gray-700">{{ $star }}★</span>
                                        <div class="flex-1 h-2 bg-gray-200 rounded">
                                            <div class="h-full bg-yellow-400 rounded" style="width: {{ $percent }}%">
                                            </div>
                                        </div>
                                        <span class="w-10 text-right text-sm text-gray-600">{{ $count }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- รีวิวจากผู้ใช้แบบจำลอง --}}
                    <div class="mt-6 space-y-6">

                        {{-- รีวิว 1 --}}
                        <div class="border-b pb-4">
                            <div class="flex items-center justify-between">
                                <div class="font-semibold text-gray-800">คุณบาส</div>
                                <div class="text-yellow-400 text-lg">★★★★★</div>
                            </div>
                            <p class="text-gray-600 text-sm mt-1">
                                ผ้านุ่มมาก ใส่สบายจริง ๆ สีตรงปก ส่งไว แนะนำเลยครับ!
                            </p>
                            <p class="text-gray-400 text-xs mt-1">รีวิวเมื่อ 3 วันที่แล้ว</p>
                        </div>

                        {{-- รีวิว 2 --}}
                        <div class="border-b pb-4">
                            <div class="flex items-center justify-between">
                                <div class="font-semibold text-gray-800">คุณเมย์</div>
                                <div class="text-yellow-400 text-lg">★★★★☆</div>
                            </div>
                            <p class="text-gray-600 text-sm mt-1">
                                เนื้อผ้าดีมาก แต่ไซซ์ Oversize ใหญ่ไปนิดสำหรับผู้หญิงตัวเล็กโดยรวมชอบค่ะ
                            </p>
                            <p class="text-gray-400 text-xs mt-1">รีวิวเมื่อ 1 สัปดาห์ที่แล้ว</p>
                        </div>

                        {{-- รีวิว 3 --}}
                        <div class="border-b pb-4">
                            <div class="flex items-center justify-between">
                                <div class="font-semibold text-gray-800">คุณต้น</div>
                                <div class="text-yellow-400 text-lg">★★★★★</div>
                            </div>
                            <p class="text-gray-600 text-sm mt-1">
                                คุณภาพเกินราคา เดี๋ยวจะกลับมาซื้อเพิ่มอีกหลายตัว!
                            </p>
                            <p class="text-gray-400 text-xs mt-1">รีวิวเมื่อ 2 สัปดาห์ที่แล้ว</p>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection


