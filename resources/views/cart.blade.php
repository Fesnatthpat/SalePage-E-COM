@extends('layout')

@section('content')
    {{-- Alpine.js --}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    {{-- container-1 : ปรับ Padding ให้เหมาะสมกับแต่ละหน้าจอ --}}
    <div class="container px-4 mx-auto md:px-8 lg:p-12" x-data="{ quantity: 1 }">

        {{-- Card Container : ปรับ Padding ภายในให้ยืดหยุ่น --}}
        <div class="p-6 bg-white shadow rounded-lg border-gray-200 md:p-8 lg:p-12">
            {{-- con-2 --}}
            <div class="">
                {{-- 1 Header --}}
                <div class="mb-6 border-b border-gray-200 pb-4">
                    <h1 class="text-2xl font-bold text-gray-800">ตะกร้าสินค้า</h1>
                </div>

                {{-- ================= ITEM 1 ================= --}}
                {{-- ปรับ flex-col (มือถือ) -> md:flex-row (แท็บเล็ต/PC) --}}
                <div class="flex flex-col md:flex-row md:items-start md:justify-between border-b border-gray-200 py-6 gap-4">
                    
                    {{-- Left Side: Image + Details --}}
                    <div class="flex flex-row gap-4 w-full md:w-auto">
                        <div class="flex-shrink-0">
                            {{-- ปรับขนาดรูปให้ responsive --}}
                            <img class="w-20 h-24 md:w-24 md:h-28 object-cover rounded-md" src="/images/T-Shirt-1.png" alt="">
                        </div>
                        <div class="flex-1 mt-1">
                            <h1 class="font-bold text-gray-800 text-sm md:text-base">-เสื้อยืด Oversize Cotton 100%</h1>
                            <h1 class="font-bold text-gray-600 text-sm md:text-base">-M</h1>
                            <h1 class="font-bold text-gray-600 text-sm md:text-base">-ครีม</h1>
                        </div>
                    </div>

                    {{-- Right Side: Price + Qty + Action --}}
                    <div class="flex flex-row justify-between items-center md:flex-col md:items-end gap-4 w-full md:w-auto mt-2 md:mt-0">
                        <div class="text-2xl font-bold text-gray-900">
                            $390
                        </div>

                        {{-- Quantity & Remove --}}
                        <div class="flex flex-col sm:flex-row items-end sm:items-center gap-3">
                            {{-- Quantity Input --}}
                            <div class="flex items-center border border-gray-300 rounded h-10 md:h-12 w-32 md:w-36 bg-white">
                                <button @click="quantity > 1 ? quantity-- : null"
                                    class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold transition rounded-l cursor-pointer">
                                    -
                                </button>
                                <input type="text" x-model="quantity"
                                    class="w-full h-full text-center border-none focus:ring-0 text-gray-900 font-medium text-lg p-0"
                                    readonly>
                                <button @click="quantity++"
                                    class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold transition rounded-r cursor-pointer">
                                    +
                                </button>
                            </div>

                            <div>
                                {{-- ปุ่มลบ ปรับให้ดูแลง่าย --}}
                                <button class="text-red-500 hover:text-red-700 font-medium text-sm md:text-base underline md:no-underline md:btn md:btn-ghost md:btn-sm md:text-red-500">
                                    ลบ
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ================= ITEM 2 ================= --}}
                <div class="flex flex-col md:flex-row md:items-start md:justify-between border-b border-gray-200 py-6 gap-4">
                    
                    {{-- Left Side --}}
                    <div class="flex flex-row gap-4 w-full md:w-auto">
                        <div class="flex-shrink-0">
                            <img class="w-20 h-24 md:w-24 md:h-28 object-cover rounded-md" src="/images/T-Shirt-B.png" alt="">
                        </div>
                        <div class="flex-1 mt-1">
                            <h1 class="font-bold text-gray-800 text-sm md:text-base">-เสื้อยืด Oversize Cotton 100%</h1>
                            <h1 class="font-bold text-gray-600 text-sm md:text-base">-M</h1>
                            <h1 class="font-bold text-gray-600 text-sm md:text-base">-ดำ</h1>
                        </div>
                    </div>

                    {{-- Right Side --}}
                    <div class="flex flex-row justify-between items-center md:flex-col md:items-end gap-4 w-full md:w-auto mt-2 md:mt-0">
                        <div class="text-2xl font-bold text-gray-900">
                            $390
                        </div>

                        <div class="flex flex-col sm:flex-row items-end sm:items-center gap-3">
                            <div class="flex items-center border border-gray-300 rounded h-10 md:h-12 w-32 md:w-36 bg-white">
                                <button @click="quantity > 1 ? quantity-- : null"
                                    class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold transition rounded-l cursor-pointer">
                                    -
                                </button>
                                <input type="text" x-model="quantity"
                                    class="w-full h-full text-center border-none focus:ring-0 text-gray-900 font-medium text-lg p-0"
                                    readonly>
                                <button @click="quantity++"
                                    class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold transition rounded-r cursor-pointer">
                                    +
                                </button>
                            </div>
                            <div>
                                <button class="text-red-500 hover:text-red-700 font-medium text-sm md:text-base underline md:no-underline md:btn md:btn-ghost md:btn-sm md:text-red-500">
                                    ลบ
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 3 Footer Section --}}
                <div class="flex flex-col lg:flex-row justify-end gap-5 mt-10">
                    
                    {{-- ส่วน Summary --}}
                    <div class="w-full lg:w-[550px]">
                        {{-- Summary --}}
                        <div class="flex justify-between mt-5 text-base md:text-lg">
                            <div class="text-black flex font-bold">
                                ยอดรวม
                                <div class="text-gray-400 ml-2">( <span x-text="quantity"></span> ชิ้น )</div>
                            </div>
                            <div>
                                <h1 class="font-bold">$390</h1>
                            </div>
                        </div>

                        <div class="flex justify-between mt-2 text-base md:text-lg">
                            <div class="text-black flex font-bold">ส่วนลด</div>
                            <div>
                                <h1 class="font-bold text-red-500">-$0.00</h1>
                            </div>
                        </div>

                        {{-- Total --}}
                        <div class="border-t-2 mt-5 border-gray-200 pt-5">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h1 class="font-bold text-xl md:text-2xl">ยอดรวมทั้งสิ้น</h1>
                                </div>
                                <div>
                                    <h1 class="text-green-500 font-bold text-xl md:text-2xl">
                                        $<span x-text="quantity * 390"></span>
                                    </h1>
                                </div>
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="mt-8 flex flex-col-reverse sm:flex-row sm:justify-end gap-3 sm:gap-x-3">
                            <a href="/product" class="btn btn-outline w-full sm:w-auto">กลับ</a>
                            <a href="/payment" class="btn btn-success text-white w-full sm:w-auto">ดำเนินการชำระเงิน</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection