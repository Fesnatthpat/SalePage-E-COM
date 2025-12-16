@extends('layout')

@section('content')
    <div class="container px-4 mx-auto md:px-8 lg:p-12">

        {{-- Card Container --}}
        <div class="p-6 bg-white shadow rounded-lg border-gray-200 md:p-8 lg:p-12">
            <div class="">
                {{-- Header --}}
                <div class="mb-6 border-b border-gray-200 pb-4">
                    <h1 class="text-2xl font-bold text-gray-800">ตะกร้าสินค้า</h1>
                </div>

                {{-- เช็คว่าตะกร้าว่างไหม --}}
                @if (session('cart') && count(session('cart')) > 0)
                    {{-- Loop แสดงรายการสินค้าจาก Session --}}
                    @foreach (session('cart') as $id => $details)
                        {{-- คำนวณตัวแปรเบื้องต้นเพื่อความสะอาดของโค้ด --}}
                        @php
                            $quantity = $details['quantity'];
                            $price = $details['price'];
                            $originalPrice = isset($details['original_price']) ? $details['original_price'] : $price;

                            $totalPrice = $price * $quantity;
                            $totalOriginalPrice = $originalPrice * $quantity;
                            $hasDiscount = $originalPrice > $price;
                        @endphp

                        <div
                            class="flex flex-col md:flex-row md:items-start md:justify-between border-b border-gray-200 py-6 gap-4">

                            {{-- 1. รูปและชื่อสินค้า --}}
                            <div class="flex flex-row gap-4 w-full md:w-auto">
                                <div class="flex-shrink-0">
                                    {{-- รูปสินค้า --}}
                                    <img class="w-20 h-24 md:w-24 md:h-28 object-cover rounded-md border border-gray-100"
                                        src="{{ $details['image'] }}" alt="{{ $details['name'] }}">
                                </div>
                                <div class="flex-1 mt-1">
                                    <h1 class="font-bold text-gray-800 text-sm md:text-base">{{ $details['name'] }}</h1>
                                    {{-- ตัวอย่างแสดง Size/Color (ถ้ามี) --}}
                                    {{-- <p class="text-xs text-gray-500 mt-1">สี: ดำ, ไซส์: L</p> --}}
                                </div>
                            </div>

                            {{-- 2. ราคาและปุ่มจัดการ --}}
                            <div
                                class="flex flex-row justify-between items-center md:flex-col md:items-end gap-4 w-full md:w-auto mt-2 md:mt-0">

                                {{-- ส่วนแสดงราคา (อัปเกรดใหม่: รองรับโปรโมชัน) --}}
                                <div class="flex flex-col items-end">
                                    @if ($hasDiscount)
                                        {{-- กรณีมีส่วนลด --}}
                                        <div class="flex items-center gap-2">
                                            <span
                                                class="text-sm text-gray-400 line-through">฿{{ number_format($totalOriginalPrice) }}</span>
                                        </div>
                                        <div class="text-2xl font-bold text-red-600">
                                            ฿{{ number_format($totalPrice) }}
                                        </div>
                                        {{-- ป้ายบอกส่วนลด --}}
                                        <span
                                            class="text-[10px] md:text-xs bg-red-100 text-red-600 px-2 py-0.5 rounded-full mt-1">
                                            ประหยัด ฿{{ number_format($totalOriginalPrice - $totalPrice) }}
                                        </span>
                                    @else
                                        {{-- กรณีราคาปกติ --}}
                                        <div class="text-2xl font-bold text-gray-900">
                                            ฿{{ number_format($totalPrice) }}
                                        </div>
                                    @endif
                                </div>

                                {{-- ปุ่มจัดการจำนวนและลบ --}}
                                <div class="flex flex-col sm:flex-row items-end sm:items-center gap-3">

                                    {{-- กล่องแสดงจำนวน --}}
                                    <div
                                        class="flex items-center border border-gray-300 rounded h-10 md:h-12 w-32 md:w-36 bg-white px-3 justify-center">
                                        <span class="font-bold text-gray-700 text-sm md:text-base">จำนวน:
                                            {{ $quantity }}</span>
                                    </div>

                                    {{-- ปุ่มลบสินค้า --}}
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <button type="submit"
                                            class="text-red-500 hover:text-red-700 font-medium text-sm md:text-base underline md:no-underline md:btn md:btn-ghost md:btn-sm md:text-red-500">
                                            ลบรายการ
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Footer Section (สรุปยอด) --}}
                    <div class="flex flex-col lg:flex-row justify-end gap-5 mt-10">
                        <div class="w-full lg:w-[400px]"> {{-- ปรับขนาดกล่องสรุปให้กระชับขึ้น --}}

                            {{-- ยอดรวมย่อย --}}
                            <div class="flex justify-between mt-5 text-base text-gray-600">
                                <div>ยอดรวมสินค้า</div>
                                <div class="font-medium">฿{{ number_format($total) }}</div>
                            </div>

                            {{-- เส้นกั้น --}}
                            <div class="border-t border-gray-200 my-4"></div>

                            {{-- ยอดรวมทั้งสิ้น --}}
                            <div class="flex justify-between items-center mb-6">
                                <div>
                                    <h1 class="font-bold text-xl md:text-2xl text-gray-800">ยอดรวมทั้งสิ้น</h1>
                                    <p class="text-xs text-gray-500">(รวมภาษีมูลค่าเพิ่มแล้ว)</p>
                                </div>
                                <div>
                                    <h1 class="text-emerald-600 font-bold text-2xl md:text-3xl">
                                        ฿{{ number_format($total) }}
                                    </h1>
                                </div>
                            </div>

                            {{-- ปุ่ม Action --}}
                            <div class="flex flex-col gap-3">
                                @auth
                                    <a href="/payment"
                                        class="btn btn-success text-white w-full text-lg h-12">ดำเนินการชำระเงิน</a>
                                @else
                                    <a href="/login"
                                        class="btn btn-success text-white w-full text-lg h-12">เข้าสู่ระบบเพื่อชำระเงิน</a>
                                @endauth
                                <a href="/allproducts"
                                    class="btn btn-outline border-gray-300 text-gray-600 hover:bg-gray-50 w-full">ซื้อสินค้าต่อ</a>
                            </div>
                        </div>
                    </div>
                @else
                    {{-- กรณีตะกร้าว่าง --}}
                    <div class="text-center py-20 bg-gray-50 rounded-lg border-2 border-dashed border-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-gray-300 mb-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h2 class="text-2xl font-bold text-gray-400 mb-2">ตะกร้าของคุณว่างเปล่า</h2>
                        <p class="text-gray-500 mb-6">ดูเหมือนคุณยังไม่ได้เลือกสินค้าลงตะกร้าเลย</p>
                        <a href="/allproducts" class="btn btn-primary text-white px-8">ไปเลือกซื้อสินค้า</a>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
