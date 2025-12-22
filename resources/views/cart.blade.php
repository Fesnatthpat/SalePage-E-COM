@extends('layout')

@section('content')
    <div class="container px-4 mx-auto md:px-8 lg:p-12">

        {{-- Card Container --}}
        <div class="p-6 bg-white shadow rounded-lg border-gray-200 md:p-8 lg:p-12">

            {{-- Form ส่งข้อมูลไปหน้า Payment --}}
            <form action="/payment" method="GET" id="checkout-form">

                <div class="">
                    {{-- Header --}}
                    <div class="mb-6 border-b border-gray-200 pb-4 flex items-center gap-3">
                        {{-- Checkbox เลือกทั้งหมด --}}
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

                                // ราคาขายจริง (Sale Price) ต่อชิ้น ที่มาจาก Controller
                                $price = $item->price;

                                // ราคาเต็ม (Original Price) ต่อชิ้น ดึงจาก attributes
                                // ถ้าไม่มีให้ใช้ราคา price ปกติ (กัน Error กรณีสินค้าเก่าค้างในตะกร้า)
                                $originalPrice = $item->attributes->has('original_price')
                                    ? $item->attributes->original_price
                                    : 0;

                                    $discounPrice = $item->attributes->has('discount')
                                        ? $item->attributes->discount
                                        : 0;
                    
                                // คำนวณราคารวมของแถวนี้
                                $totalPrice = $price * $quantity; // ราคาทีต้องจ่ายจริง
                                $totalOriginalPrice = $originalPrice * $quantity; // ราคาเต็มรวม

                                // เช็คว่ามีส่วนลดหรือไม่
                                $hasDiscount = $totalOriginalPrice > $totalPrice;
                            @endphp

                            <div
                                class="flex flex-col md:flex-row md:items-start md:justify-between border-b border-gray-200 py-6 gap-4">

                                {{-- 1. ส่วน Checkbox และ รูปสินค้า --}}
                                <div class="flex flex-row gap-4 w-full md:w-auto items-start">
                                    {{-- Checkbox --}}
                                    <div class="mt-8 md:mt-10">
                                        <input type="checkbox" name="selected_items[]" value="{{ $item->id }}" checked
                                            data-price="{{ $totalPrice }}"
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
                                        <p class="text-xs text-gray-500 mt-1">ราคาต่อชิ้น: ฿{{ number_format($totalOriginalPrice) }}</p>
                                    </div>
                                </div>

                                {{-- 2. ราคาและปุ่มจัดการ --}}
                                <div
                                    class="flex flex-row justify-between items-center md:flex-col md:items-end gap-4 w-full md:w-auto mt-2 md:mt-0 pl-9 md:pl-0">

                                    {{-- ส่วนแสดงราคา --}}
                                    <div class="flex flex-col items-end">
                                        @if ($hasDiscount)
                                            {{-- กรณีมีส่วนลด --}}
                                            <div class="flex items-center gap-2">
                                                {{-- <span
                                                    class="text-sm text-gray-400 line-through">฿{{ number_format($totalOriginalPrice) }}</span> --}}
                                            </div>
                                            <div class="text-2xl font-bold text-red-600">
                                                ฿{{ number_format($totalPrice) }}
                                            </div>
                                            <span
                                                class="text-[10px] md:text-xs bg-red-100 text-red-600 px-2 py-0.5 rounded-full mt-1">
                                                ประหยัด ฿{{ number_format($totalOriginalPrice - $totalPrice) }}
                                            </span>
                                        @else
                                            {{-- กรณีราคาปกติ --}}
                                            <div class="text-2xl font-bold text-emerald-600">
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
                                {{-- ส่วนแสดงราคารวม --}}
                                <div class="flex justify-between mt-5 text-base text-gray-600">
                                    <div>ยอดรวมสินค้า (<span id="selected-count">{{ count($items) }}</span> รายการ)</div>
                                    <div class="font-medium">฿<span
                                            id="subtotal-display">{{ number_format($totalPrice) }}</span></div>
                                </div>
                                <div class="border-t border-gray-200 my-4"></div>
                                <div class="flex justify-between items-center mb-6">
                                    <div>
                                        <h1 class="font-bold text-xl md:text-2xl text-gray-800">ยอดรวมที่เลือก</h1>
                                        <p class="text-xs text-gray-500">(รวมภาษีมูลค่าเพิ่มแล้ว)</p>
                                    </div>
                                    <div>
                                        <h1 class="text-emerald-600 font-bold text-2xl md:text-3xl">
                                            ฿<span id="total-display">{{ number_format($totalOriginalPrice) }}</span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-3">
                                    @auth
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

    {{-- Script คำนวณราคา Real-time (คงเดิม) --}}
    <script>
        function numberWithCommas(x) {
            if (x === undefined || x === null) return "0";
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }

        function toggleAll(source) {
            const checkboxes = document.querySelectorAll('.item-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.checked = source.checked;
            });
            calculateTotal();
        }

        function calculateTotal() {
            let total = 0;
            let count = 0;
            const checkboxes = document.querySelectorAll('.item-checkbox');
            const checkoutBtn = document.getElementById('checkout-btn');

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    let price = parseFloat(checkbox.getAttribute('data-price'));
                    if (!isNaN(price)) {
                        total += price;
                    }
                    count++;
                }
            });

            const totalDisplay = document.getElementById('total-display');
            const subtotalDisplay = document.getElementById('subtotal-display');
            const selectedCount = document.getElementById('selected-count');

            if (totalDisplay) totalDisplay.innerText = numberWithCommas(total);
            if (subtotalDisplay) subtotalDisplay.innerText = numberWithCommas(total);
            if (selectedCount) selectedCount.innerText = count;

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
                    selectAllCheckbox.indeterminate = true;
                }
            }

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

        document.addEventListener("DOMContentLoaded", function() {
            calculateTotal();
        });

        window.addEventListener("pageshow", function(event) {
            if (event.persisted) {
                calculateTotal();
            } else {
                calculateTotal();
            }
        });
    </script>
@endsection
