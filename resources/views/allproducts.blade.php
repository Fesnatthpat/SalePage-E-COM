@extends('layout')

@section('content')

    <div class="bg-gray-50 min-h-screen py-8">
        <div class="container mx-auto px-4">

            {{-- Header --}}
            <div class="flex flex-col lg:flex-row gap-8">

                {{-- SIDEBAR --}}
                <aside class="w-full lg:w-1/4">
                    <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100 sticky top-4">
                        <h3 class="font-bold text-lg mb-4 text-gray-700">ตัวกรองค้นหา</h3>
                        <form action="{{ route('allproducts') }}" method="GET">
                            <div class="form-control mb-4">
                                <label class="label"><span class="label-text">ค้นหาชื่อสินค้า</span></label>
                                <div class="relative">
                                    <input type="text" name="search" value="{{ request('search') }}"
                                        placeholder="พิมพ์คำค้นหา..."
                                        class="input input-bordered w-full pr-10 bg-gray-50" />
                                    <button type="submit"
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
                            <div class="mb-4">
                                <label class="label"><span class="label-text font-bold">หมวดหมู่</span></label>
                                <ul class="menu bg-base-100 w-full p-0 text-gray-600">
                                    <li><a href="{{ route('allproducts') }}"
                                            class="{{ !request('category') ? 'active' : '' }}">ทั้งหมด</a></li>
                                    {{-- ตรวจสอบตัวแปร categories ก่อน loop เพื่อป้องกัน error --}}
                                    @if (isset($categories))
                                        @foreach ($categories as $cat)
                                            <li><a href="#">{{ $cat }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <button type="submit"
                                class="btn btn-primary btn-block text-white mt-4 shadow-md">ค้นหา</button>
                        </form>
                    </div>
                </aside>

                {{-- MAIN CONTENT --}}
                <main class="w-full lg:w-3/4">
                    <div
                        class="bg-white p-3 rounded-lg shadow-sm border border-gray-100 mb-6 flex justify-between items-center">
                        <span class="text-gray-500 text-sm hidden sm:inline">พบสินค้า {{ $products->total() }} รายการ</span>
                    </div>

                    @if ($products->count() > 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                            @foreach ($products as $product)
                                {{-- ========================================================= --}}
                                {{-- [Logic คำนวณราคา แบบเดียวกับหน้า Index] --}}
                                {{-- ========================================================= --}}
                                @php
                                    // 1. ราคาขายปัจจุบัน (pd_price)
                                    $currentPrice = (float) $product->pd_price;

                                    // 2. ราคาเต็มก่อนลด (pd_full_price)
                                    $fullPrice = isset($product->pd_full_price) ? (float) $product->pd_full_price : 0;

                                    // 3. ส่วนลด (pd_sp_discount)
                                    $discount = isset($product->pd_sp_discount) ? (float) $product->pd_sp_discount : 0;

                                    // 4. เช็คว่ามีส่วนลดไหม
                                    $isOnSale = $discount > 0;
                                @endphp
                                {{-- ========================================================= --}}

                                <div
                                    class="card bg-white border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all rounded-b-md overflow-hidden duration-300 group">
                                    <a href="{{ url('/product/' . $product->pd_id) }}">
                                        <figure class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                                            <img src="https://crm.kawinbrothers.com/product_images/{{ $product->pd_img }}"
                                                alt="{{ $product->pd_name }}"
                                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500" />

                                            {{-- [แก้ใหม่] ป้าย SALE: แสดงยอดเงินที่ลด --}}
                                            @if ($isOnSale)
                                                <div
                                                    class="absolute top-2 left-2 bg-red-500 p-2 rounded-2xl text-white gap-1 text-xs font-bold shadow-sm">
                                                    ลด ฿{{ number_format($discount) }}
                                                </div>
                                            @endif
                                        </figure>
                                    </a>

                                    <div class="card-body p-4">
                                        <h2
                                            class="card-title text-sm font-bold text-gray-800 leading-tight min-h-[2.5em] line-clamp-2">
                                            <a href="{{ url('/product/' . $product->pd_id) }}"
                                                class="hover:text-emerald-600 transition">{{ $product->pd_name }}</a>
                                        </h2>
                                        <div class="flex justify-between items-end mt-2">
                                            <div class="flex flex-col">

                                                {{-- [แก้ใหม่] ส่วนแสดงราคา --}}
                                                @if ($isOnSale)
                                                    {{-- กรณีมีส่วนลด: แสดงราคาขายปัจจุบัน (สีเขียว) + ราคาเต็มขีดฆ่า (สีเทา) --}}
                                                    <span
                                                        class="text-lg font-bold text-emerald-600">฿{{ number_format($currentPrice) }}</span>
                                                    <span
                                                        class="text-xs text-gray-400 line-through">฿{{ number_format($fullPrice) }}</span>
                                                @else
                                                    {{-- กรณีไม่มีส่วนลด: แสดงราคาปกติสีเขียว --}}
                                                    <span
                                                        class="text-lg font-bold text-emerald-600">฿{{ number_format($currentPrice) }}</span>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-8 flex justify-center">
                            {{ $products->appends(request()->query())->links() }}
                        </div>
                    @else
                        <div class="text-center py-20 bg-white rounded-lg border border-dashed">
                            <p class="text-gray-500 text-lg">ไม่พบสินค้าที่คุณค้นหา</p>
                        </div>
                    @endif
                </main>
            </div>
        </div>
    </div>
@endsection
