@extends('layout')

@section('content')
    {{-- ========================================================= --}}
    {{-- [Logic คำนวณราคา แบบเดียวกับหน้า Index/AllProducts] --}}
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

    <div x-data="{
        activeImage: 'https://crm.kawinbrothers.com/product_images/{{ $product->pd_img }}',
        images: ['https://crm.kawinbrothers.com/product_images/{{ $product->pd_img }}'],
        quantity: 1
    }" class="container mx-auto px-4 py-8">

        <div class="bg-white shadow-lg rounded-xl border border-gray-200 overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                {{-- ส่วนรูปภาพ --}}
                <div class="p-6 lg:p-10 lg:border-r border-gray-200">
                    <div class="flex flex-col gap-4">
                        <div
                            class="w-full relative aspect-square lg:aspect-[4/3] overflow-hidden rounded-lg bg-gray-50 flex items-center justify-center border border-gray-100">
                            <img :src="activeImage" class="w-full h-full object-contain" alt="{{ $product->pd_name }}">

                            {{-- [แก้ใหม่] ป้าย SALE: แสดงยอดเงินที่ลด --}}
                            @if ($isOnSale)
                                <div
                                    class="absolute top-4 left-4 badge badge-error text-white gap-1 text-sm font-bold shadow-md px-3 py-1">
                                    ลด ฿{{ number_format($discount) }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- ส่วนข้อมูลสินค้า --}}
                <div class="p-6 lg:p-10">
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 leading-tight">{{ $product->pd_name }}</h1>
                    <p class="text-gray-500 mt-2 text-sm">
                        รหัส: {{ $product->pd_code }}
                        @if (isset($product->brand_name))
                            | แบรนด์: {{ $product->brand_name }}
                        @endif
                    </p>

                    <div class="flex items-center gap-2 mt-3 mb-6">
                        <div class="flex text-yellow-400 text-sm">★★★★★</div>
                        <span class="text-sm text-gray-400">สินค้าคุณภาพ (ประเภท: {{ $product->pd_type }})</span>
                    </div>

                    {{-- [แก้ใหม่] แสดงราคา --}}
                    <div class="bg-gray-50 p-4 rounded-lg mb-6 border border-gray-100">
                        <h2 class="text-3xl lg:text-4xl font-bold text-emerald-600 flex items-end gap-3">
                            @if ($isOnSale)
                                {{-- กรณีมีส่วนลด: แสดงราคาขายปัจจุบัน (สีเขียว) + ราคาเต็มขีดฆ่า (สีเทา) --}}
                                <span>฿{{ number_format($currentPrice) }}</span>
                                <span
                                    class="text-lg text-gray-400 font-normal line-through">฿{{ number_format($fullPrice) }}</span>
                            @else
                                {{-- กรณีไม่มีส่วนลด: แสดงราคาปกติสีเขียว --}}
                                <span>฿{{ number_format($currentPrice) }}</span>
                            @endif
                        </h2>
                    </div>

                    {{-- ฟอร์มเพิ่มสินค้า (คงเดิม) --}}
                    <form action="{{ route('cart.add', ['id' => $product->pd_id]) }}" method="GET"
                        class="flex flex-col sm:flex-row gap-3 pt-2">

                        <div class="flex items-center border border-gray-300 rounded h-12 w-full sm:w-32 bg-white">
                            <button type="button" @click="quantity > 1 ? quantity-- : null"
                                class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold rounded-l">-</button>

                            <input type="number" name="quantity" x-model="quantity"
                                class="w-full h-full text-center border-none focus:ring-0 text-gray-900 font-bold text-lg m-0"
                                readonly>

                            <button type="button" @click="quantity++"
                                class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold rounded-r">+</button>
                        </div>

                        <button type="submit"
                            class="flex-1 btn bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-lg rounded h-12 flex items-center justify-center shadow-md transition">
                            เพิ่มลงตะกร้า
                        </button>
                    </form>
                </div>

                {{-- ส่วนรายละเอียด (คงเดิม) --}}
                <div class="p-6 lg:p-10 border-t lg:border-r border-gray-200 lg:col-start-1 lg:row-start-2 bg-gray-50/50">
                    <h3 class="text-lg font-bold text-gray-900 border-b-2 border-emerald-500 inline-block pb-1 mb-4">
                        รายละเอียดสินค้า</h3>
                    <div class="text-gray-700 text-sm leading-7 space-y-4">
                        <p>{{ $product->pd_details ?? $product->pd_name }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
