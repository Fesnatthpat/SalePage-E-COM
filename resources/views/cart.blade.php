@extends('layout')

@section('content')
    <div class="container px-4 mx-auto md:px-8 lg:p-12">

        {{-- Card Container --}}
        <div class="p-6 bg-white shadow rounded-lg border-gray-200 md:p-8 lg:p-12">

            {{-- ★★★ 1. เปิด Form เพื่อส่งข้อมูลสินค้าที่เลือกไปยังหน้า Payment ★★★ --}}
            {{-- ปรับ method และ action ตาม Route ของคุณ (เช่น GET เพื่อส่ง id ไปทาง URL) --}}
            <form action="/payment" method="GET" id="checkout-form">

                <div class="">
                    {{-- Header --}}
                    <div class="mb-6 border-b border-gray-200 pb-4 flex items-center gap-3">
                        {{-- ★★★ Checkbox เลือกทั้งหมด ★★★ --}}
                        @if (!$items->isEmpty())
                            <div class="flex items-center">
                                <input type="checkbox" id="select-all" checked
                                    class="w-5 h-5 text-emerald-600 rounded border-gray-300 focus:ring-emerald-500 cursor-pointer"
                                    onclick="toggleAll(this)">
                            </div>
                        @endif
                        <h1 class="text-2xl font-bold text-gray-800">ตะกร้าสินค้า</h1>
                    </div>

                    {{-- เช็คว่าตะกร้าว่างไหม --}}
                    @if (!$items->isEmpty())
                        {{-- Loop แสดงรายการสินค้า --}}
                        @foreach ($items as $item)
                            @php
                                $quantity = $item->quantity;
                                $price = $item->price;
                                $originalPrice = $item->attributes->has('original_price')
                                    ? $item->attributes->original_price
                                    : $price;
                                $totalPrice = $item->getPriceSum(); // ราคารวมของสินค้านี้ (ราคา x จำนวน)
                                $totalOriginalPrice = $originalPrice * $quantity;
                                $hasDiscount = $originalPrice > $price;
                            @endphp

                            <div
                                class="flex flex-col md:flex-row md:items-start md:justify-between border-b border-gray-200 py-6 gap-4">

                                {{-- ★★★ 2. ส่วน Checkbox และ รูปสินค้า ★★★ --}}
                                <div class="flex flex-row gap-4 w-full md:w-auto items-start">
                                    {{-- Checkbox รายการ --}}
                                    <div class="mt-8 md:mt-10"> <input type="checkbox" name="selected_items[]"
                                            value="{{ $item->id }}" checked data-price="{{ $totalPrice }}"
                                            class="item-checkbox w-5 h-5 text-emerald-600 rounded border-gray-300 focus:ring-emerald-500 cursor-pointer"
                                            onchange="calculateTotal()">
                                    </div>

                                    {{-- รูปภาพ --}}
                                    <div class="flex-shrink-0">
                                        <img src="https://crm.kawinbrothers.com/product_images/{{ $item->attributes->image }}"
                                            alt="{{ $item->name }}"
                                            class="w-20 h-20 object-cover rounded-lg md:w-24 md:h-24" />
                                    </div>
                                    <div class="flex-1 mt-1">
                                        <h1 class="font-bold text-gray-800 text-sm md:text-base">{{ $item->name }}</h1>
                                    </div>
                                </div>

                                {{-- 3. ราคาและปุ่มจัดการ --}}
                                <div
                                    class="flex flex-row justify-between items-center md:flex-col md:items-end gap-4 w-full md:w-auto mt-2 md:mt-0 pl-9 md:pl-0">

                                    {{-- ส่วนแสดงราคา --}}
                                    <div class="flex flex-col items-end">
                                        @if ($hasDiscount)
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="text-sm text-gray-400 line-through">฿{{ number_format($totalOriginalPrice) }}</span>
                                            </div>
                                            <div class="text-2xl font-bold text-red-600">
                                                ฿{{ number_format($totalPrice) }}
                                            </div>
                                            <span
                                                class="text-[10px] md:text-xs bg-red-100 text-red-600 px-2 py-0.5 rounded-full mt-1">
                                                ประหยัด ฿{{ number_format($totalOriginalPrice - $totalPrice) }}
                                            </span>
                                        @else
                                            <div class="text-2xl font-bold text-gray-900">
                                                ฿{{ number_format($totalPrice) }}
                                            </div>
                                        @endif
                                    </div>

                                    {{-- ปุ่มจัดการจำนวนและลบ --}}
                                    <div class="flex flex-col sm:flex-row items-end sm:items-center gap-3">
                                        {{-- กล่องแสดงจำนวน --}}
                                        <div class="flex items-center border border-gray-300 rounded h-10 md:h-12 bg-white">
                                            <a href="{{ route('cart.update', ['id' => $item->id, 'action' => 'decrease']) }}"
                                                class="px-3 py-1 text-gray-600 hover:bg-gray-100 h-full flex items-center text-lg">-</a>

                                            <span class="font-bold text-gray-700 text-sm md:text-base w-12 text-center">
                                                {{ $quantity }}
                                            </span>

                                            <a href="{{ route('cart.update', ['id' => $item->id, 'action' => 'increase']) }}"
                                                class="px-3 py-1 text-gray-600 hover:bg-gray-100 h-full flex items-center text-lg">+</a>
                                        </div>

                                        {{-- ปุ่มลบสินค้า --}}
                                        <a href="{{ route('cart.remove', $item->id) }}"
                                            class="text-red-500 hover:text-red-700 font-medium text-sm md:text-base underline md:no-underline md:btn md:btn-ghost md:btn-sm md:text-red-500">
                                            ลบรายการ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- Footer Section --}}
                        <div class="flex flex-col lg:flex-row justify-end gap-5 mt-10">
                            <div class="w-full lg:w-[400px]">
                                {{-- ส่วนแสดงราคารวม (Initial Render) --}}
                                <div class="flex justify-between mt-5 text-base text-gray-600">
                                    <div>ยอดรวมสินค้า (<span id="selected-count">{{ count($items) }}</span> รายการ)</div>
                                    {{-- ใช้ span id เพื่อให้ JS มาอัปเดตค่าตรงนี้ --}}
                                    <div class="font-medium">฿<span
                                            id="subtotal-display">{{ number_format($total) }}</span></div>
                                </div>
                                <div class="border-t border-gray-200 my-4"></div>
                                <div class="flex justify-between items-center mb-6">
                                    <div>
                                        <h1 class="font-bold text-xl md:text-2xl text-gray-800">ยอดรวมที่เลือก</h1>
                                        <p class="text-xs text-gray-500">(รวมภาษีมูลค่าเพิ่มแล้ว)</p>
                                    </div>
                                    <div>
                                        <h1 class="text-emerald-600 font-bold text-2xl md:text-3xl">
                                            {{-- ใช้ span id เพื่อให้ JS มาอัปเดตค่าตรงนี้ --}}
                                            ฿<span id="total-display">{{ number_format($total) }}</span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-3">
                                    @auth
                                        {{-- เปลี่ยนจาก <a> เป็น <button> เพื่อ Submit Form --}}
                                        <button type="submit" id="checkout-btn"
                                            class="btn btn-success text-white w-full text-lg h-12">
                                            ดำเนินการชำระเงิน
                                        </button>
                                    @else
                                        <a href="/login"
                                            class="btn btn-success text-white w-full text-lg h-12 flex items-center justify-center">
                                            เข้าสู่ระบบเพื่อชำระเงิน
                                        </a>
                                    @endauth

                                    <a href="/allproducts"
                                        class="btn btn-outline border-gray-300 text-gray-600 hover:bg-gray-50 w-full flex items-center justify-center">
                                        ซื้อสินค้าต่อ
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        {{-- กรณีตะกร้าว่าง --}}
                        <div class="text-center py-20 bg-gray-50 rounded-lg border-2 border-dashed border-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto text-gray-300 mb-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <h2 class="text-2xl font-bold text-gray-400 mb-2">ตะกร้าของคุณว่างเปล่า</h2>
                            <p class="text-gray-500 mb-6">ดูเหมือนคุณยังไม่ได้เลือกสินค้าลงตะกร้าเลย</p>
                            <a href="/allproducts" class="btn btn-primary text-white px-8">ไปเลือกซื้อสินค้า</a>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>

    {{-- ★★★ Script สำหรับคำนวณราคาแบบ Real-time ★★★ --}}
    <script>
        // ฟังก์ชันจัดรูปแบบตัวเลขให้มีลูกน้ำ (Comma)
        function numberWithCommas(x) {
            // เพิ่มการป้องกันกรณีค่าเป็น null หรือ undefined
            if (x === undefined || x === null) return "0";
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        // ฟังก์ชันเลือกทั้งหมด / ไม่เลือกทั้งหมด
        function toggleAll(source) {
            const checkboxes = document.querySelectorAll('.item-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = source.checked;
            });
            calculateTotal();
        }

        // ฟังก์ชันคำนวณราคารวม
        function calculateTotal() {
            let total = 0;
            let count = 0;
            const checkboxes = document.querySelectorAll('.item-checkbox');
            const checkoutBtn = document.getElementById('checkout-btn');

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    // ดึงราคาจาก data-price ที่เราฝังไว้ใน input
                    // เพิ่ม parseFloat เพื่อความชัวร์ว่าเป็นตัวเลข
                    let price = parseFloat(checkbox.getAttribute('data-price'));
                    if (!isNaN(price)) {
                        total += price;
                    }
                    count++;
                }
            });

            // อัปเดตตัวเลขบนหน้าจอ
            const totalDisplay = document.getElementById('total-display');
            const subtotalDisplay = document.getElementById('subtotal-display');
            const selectedCount = document.getElementById('selected-count');

            // เพิ่มการเช็คว่ามี element อยู่จริงไหมก่อนอัปเดตป้องกัน error
            if (totalDisplay) totalDisplay.innerText = numberWithCommas(total);
            if (subtotalDisplay) subtotalDisplay.innerText = numberWithCommas(total);
            if (selectedCount) selectedCount.innerText = count;

            // ตรวจสอบสถานะปุ่ม Checkbox เลือกทั้งหมด
            const selectAllCheckbox = document.getElementById('select-all');
            if (selectAllCheckbox) {
                if (count === checkboxes.length && count > 0) {
                    selectAllCheckbox.checked = true;
                    selectAllCheckbox.indeterminate = false;
                } else if (count === 0) {
                    selectAllCheckbox.checked = false;
                    selectAllCheckbox.indeterminate = false;
                } else {
                    selectAllCheckbox.checked = false;
                    selectAllCheckbox.indeterminate = true; // สถานะขีดกลาง
                }
            }

            // จัดการปุ่มชำระเงิน (ปิดปุ่มถ้าไม่ได้เลือกอะไรเลย)
            if (checkoutBtn) {
                if (count === 0) {
                    checkoutBtn.disabled = true;
                    checkoutBtn.classList.add('opacity-50', 'cursor-not-allowed');
                } else {
                    checkoutBtn.disabled = false;
                    checkoutBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                }
            }
        }

        // ==========================================
        // ★★★ ส่วนที่เพิ่ม: สั่งคำนวณทันทีเมื่อโหลดหน้า ★★★
        // ==========================================

        // 1. ทำงานทันทีเมื่อโหลดหน้าเว็บเสร็จ (สำหรับการเข้าครั้งแรก หรือ Refresh)
        document.addEventListener("DOMContentLoaded", function() {
            calculateTotal();
        });

        // 2. ทำงานเมื่อกดปุ่ม Back กลับมา (สำหรับ Browser ที่ใช้ Page Cache)
        window.addEventListener("pageshow", function(event) {
            // event.persisted เป็น true ถ้าหน้านี้ถูกโหลดมาจาก Cache (กด Back)
            if (event.persisted) {
                calculateTotal();
            } else {
                // บาง Browser ไม่ส่ง persisted แต่เราก็ควรคำนวณใหม่เพื่อความชัวร์
                calculateTotal();
            }
        });
    </script>
@endsection
