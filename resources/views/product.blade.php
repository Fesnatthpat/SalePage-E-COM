@extends('layout')

@section('content')
    {{-- Logic PHP คงเดิม --}}
    @php
        $currentPrice = (float) $product->pd_price;
        $fullPrice = isset($product->pd_full_price) ? (float) $product->pd_full_price : 0;
        $discount = isset($product->pd_sp_discount) ? (float) $product->pd_sp_discount : 0;
        $isOnSale = $discount > 0;
    @endphp

    <div x-data="{
        activeImage: 'https://crm.kawinbrothers.com/product_images/{{ $product->pd_img }}',
        images: ['https://crm.kawinbrothers.com/product_images/{{ $product->pd_img }}'],
        quantity: 1
    }" class="container mx-auto px-4 py-8">

        <div class="bg-white shadow-lg rounded-xl border border-gray-200 overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                {{-- ส่วนรูปภาพ (คงเดิม) --}}
                <div class="p-6 lg:p-10 lg:border-r border-gray-200">
                    <div
                        class="w-full relative aspect-square lg:aspect-[4/3] overflow-hidden rounded-lg bg-gray-50 flex items-center justify-center border border-gray-100">
                        <img :src="activeImage" class="w-full h-full object-contain" alt="{{ $product->pd_name }}">
                        @if ($isOnSale)
                            <div
                                class="absolute top-4 left-4 badge badge-error text-white gap-1 text-sm font-bold shadow-md px-3 py-1">
                                ลด ฿{{ number_format($discount) }}
                            </div>
                        @endif
                    </div>
                </div>

                {{-- ส่วนข้อมูลสินค้า --}}
                <div class="p-6 lg:p-10">
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 leading-tight">{{ $product->pd_name }}</h1>

                    {{-- ... (ส่วนรายละเอียดสินค้าคงเดิม) ... --}}

                    <div class="bg-gray-50 p-4 rounded-lg mb-6 border border-gray-100 mt-4">
                        <h2 class="text-3xl lg:text-4xl font-bold text-emerald-600 flex items-end gap-3">
                            @if ($isOnSale)
                                <span>฿{{ number_format($currentPrice) }}</span>
                                <span
                                    class="text-lg text-gray-400 font-normal line-through">฿{{ number_format($fullPrice) }}</span>
                            @else
                                <span>฿{{ number_format($currentPrice) }}</span>
                            @endif
                        </h2>
                    </div>

                    {{-- ฟอร์มเพิ่มสินค้า (AJAX) --}}
                    <form id="add-to-cart-form" data-action="{{ route('cart.add', ['id' => $product->pd_id]) }}"
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

                        {{-- ★★★ [สำคัญ] ใส่ ID ให้ปุ่ม เพื่อให้ Animation อ้างอิงได้ ★★★ --}}
                        <button type="submit" id="btn-add-submit"
                            class="flex-1 btn bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-lg rounded h-12 flex items-center justify-center shadow-md transition">
                            เพิ่มลงตะกร้า
                        </button>
                    </form>
                </div>

                {{-- ส่วนล่างของ Grid (คงเดิม) --}}
                <div class="p-6 lg:p-10 border-t lg:border-r border-gray-200 lg:col-start-1 lg:row-start-2 bg-gray-50/50">
                    <h3 class="text-lg font-bold text-gray-900 border-b-2 border-emerald-500 inline-block pb-1 mb-4">
                        รายละเอียดสินค้า</h3>
                    <p class="text-gray-700 text-sm leading-7">{{ $product->pd_details ?? $product->pd_name }}</p>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.getElementById('add-to-cart-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const submitBtn = document.getElementById('btn-add-submit'); // อ้างอิงปุ่มกด
            const actionUrl = form.getAttribute('data-action');
            const quantity = form.querySelector('[name="quantity"]').value;
            const fetchUrl = `${actionUrl}?quantity=${quantity}`;

            fetch(fetchUrl, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {

                        // ★★★ 1. เรียก Animation ลอยไปตะกร้า (ถ้ามีฟังก์ชันนี้) ★★★
                        // (ฟังก์ชันนี้ควรอยู่ใน layout.blade.php ของคุณ)
                        if (typeof window.flyToCart === 'function') {
                            window.flyToCart(submitBtn);
                        }

                        // ★★★ 2. แสดง Popup ตรงกลาง (Center) ★★★
                        Swal.fire({
                            icon: 'success',
                            title: 'เพิ่มลงตะกร้าแล้ว',
                            text: 'สินค้าถูกเพิ่มเรียบร้อย',
                            position: 'center', // ปรับเป็นตรงกลาง
                            showConfirmButton: false,
                            timer: 1500
                        });

                        // ★★★ 3. หน่วงเวลาอัปเดตตัวเลขเล็กน้อย (เพื่อให้ของลอยถึงก่อนค่อยเปลี่ยนเลข) ★★★
                        setTimeout(() => {
                            if (window.updateCartBadge) {
                                window.updateCartBadge(data.cartCount);
                            }
                        }, 800); // รอ 800ms
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'เกิดข้อผิดพลาด',
                        text: 'ไม่สามารถเพิ่มสินค้าได้'
                    });
                });
        });
    </script>
@endsection
