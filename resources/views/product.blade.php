@extends('layout')

@section('content')
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

                            {{-- ป้าย SALE --}}
                            @if (isset($product->prom_price_total) &&
                                    $product->prom_price_total < $product->pd_price &&
                                    $product->prom_price_total > 0)
                                <div
                                    class="absolute top-4 left-4 badge badge-error text-white gap-1 text-sm font-bold shadow-md px-3 py-1">
                                    SALE</div>
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

                    {{-- แสดงราคา --}}
                    <div class="bg-gray-50 p-4 rounded-lg mb-6 border border-gray-100">
                        <h2 class="text-3xl lg:text-4xl font-bold text-emerald-600">
                            @if (isset($product->prom_price_total) &&
                                    $product->prom_price_total < $product->pd_price &&
                                    $product->prom_price_total > 0)
                                ฿{{ number_format($product->prom_price_total) }}
                                <span
                                    class="text-lg text-gray-400 font-normal line-through ml-2">฿{{ number_format($product->pd_price) }}</span>
                            @else
                                ฿{{ number_format($product->pd_price) }}
                            @endif
                        </h2>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3 pt-2">
                        <div class="flex items-center border border-gray-300 rounded h-12 w-full sm:w-32 bg-white">
                            <button @click="quantity > 1 ? quantity-- : null"
                                class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold rounded-l">-</button>
                            <input type="number" x-model="quantity"
                                class="w-full h-full text-center border-none focus:ring-0 text-gray-900 font-bold text-lg m-0"
                                readonly>
                            <button @click="quantity++"
                                class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold rounded-r">+</button>
                        </div>
                        <a href="{{ route('cart.add', ['id' => $product->pd_id]) }}"
                            class="flex-1 btn bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-lg rounded h-12 flex items-center justify-center shadow-md transition">เพิ่มลงตะกร้า</a>
                    </div>
                </div>

                {{-- ส่วนรายละเอียด --}}
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
