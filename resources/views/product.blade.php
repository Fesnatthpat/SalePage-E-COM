@extends('layout')

@section('content')
    <div x-data="{
        activeImage: '/images/T-Shirt-1.png',
        images: [
            '/images/T-Shirt-1.png',
            '/images/T-Shirt-W.png',
            '/images/T-Shirt-B.png'
        ],
        quantity: 1
    }" class="container mx-auto px-4 py-8">

        {{-- กล่องขาวใหญ่ใบเดียว (Single Container) --}}
        <div class="bg-white shadow-lg rounded-xl border border-gray-200 overflow-hidden">

            {{-- Grid Layout --}}
            <div class="grid grid-cols-1 lg:grid-cols-2">

                {{-- ==========================================
                      ส่วนที่ 1: รูปภาพ (Gallery) 
                    ========================================== --}}
                <div class="p-6 lg:p-10 lg:border-r border-gray-200 lg:col-start-1 lg:row-start-1">
                    <div class="flex flex-col gap-4">
                        {{-- รูปใหญ่ --}}
                        <div
                            class="w-full relative aspect-square lg:aspect-[4/3] overflow-hidden rounded-lg bg-gray-50 flex items-center justify-center border border-gray-100">
                            <img :src="activeImage"
                                class="w-full h-full object-contain transition-opacity duration-300 ease-in-out">
                        </div>
                        {{-- รูปเล็ก --}}
                        <div class="flex gap-3 overflow-x-auto pb-2 scrollbar-hide justify-center lg:justify-start">
                            <template x-for="img in images">
                                <button @click="activeImage = img"
                                    class="w-16 h-16 lg:w-20 lg:h-20 flex-shrink-0 border-2 rounded-md overflow-hidden transition-all duration-200"
                                    :class="activeImage === img ? 'border-emerald-500 opacity-100' :
                                        'border-transparent hover:border-gray-300 opacity-70 hover:opacity-100'">
                                    <img :src="img" class="w-full h-full object-cover">
                                </button>
                            </template>
                        </div>
                    </div>
                </div>

                {{-- ==========================================
                      ส่วนที่ 2: ข้อมูลสินค้า + ปุ่มซื้อ (Product Info)
                    ========================================== --}}
                <div class="p-6 lg:p-10 lg:col-start-2 lg:row-start-1">
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 leading-tight">เสื้อยืด Oversize Cotton 100%
                    </h1>
                    <p class="text-gray-500 mt-2 text-sm lg:text-base">รุ่น Premium Comfortable ใส่สบาย ระบายอากาศดี</p>

                    <div class="flex items-center gap-2 mt-3 mb-6">
                        <div class="flex text-yellow-400 text-sm">★★★★★</div>
                        <span class="text-sm text-gray-400">5.0 (Review 99+) | ขายแล้ว 1.2k ชิ้น</span>
                    </div>

                    {{-- ราคา --}}
                    <div class="bg-gray-50 p-4 rounded-lg mb-6 border border-gray-100">
                        <h2 class="text-3xl lg:text-4xl font-bold text-emerald-600">฿390.00 <span
                                class="text-lg text-gray-400 font-normal line-through ml-2">฿590.00</span></h2>
                    </div>

                    {{-- ตัวเลือก --}}
                    <div class="space-y-4">
                        <div>
                            <span class="font-medium text-gray-900 block mb-2">สี (Color)</span>
                            <div class="flex flex-wrap gap-2">
                                <button
                                    class="px-4 py-2 border rounded hover:border-black focus:ring-1 focus:ring-black bg-white text-sm transition">ครีม</button>
                                <button
                                    class="px-4 py-2 border rounded hover:border-black focus:ring-1 focus:ring-black bg-white text-sm transition">ขาว</button>
                                <button
                                    class="px-4 py-2 border rounded hover:border-black focus:ring-1 focus:ring-black bg-white text-sm transition">ดำ</button>
                            </div>
                        </div>

                        {{-- ปุ่มกดซื้อ --}}
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
                            <a href="/cart"
                                class="flex-1 btn bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-lg rounded h-12 flex items-center justify-center shadow-md transition">
                                ซื้อเลย
                            </a>
                        </div>
                    </div>
                </div>

                {{-- ==========================================
                      ส่วนที่ 3: รายละเอียดสินค้า (Description)
                    ========================================== --}}
                <div class="p-6 lg:p-10 border-t lg:border-r border-gray-200 lg:col-start-1 lg:row-start-2 bg-gray-50/50">
                    <h3 class="text-lg font-bold text-gray-900 border-b-2 border-emerald-500 inline-block pb-1 mb-4">
                        รายละเอียดสินค้า</h3>

                    <div class="text-gray-700 text-sm leading-7 space-y-4">
                        <p>เสื้อยืดทรง Oversize สไตล์เกาหลี ผลิตจากผ้า Cotton 100% เกรดพรีเมียม สัมผัสนุ่ม ใส่สบาย
                            ระบายอากาศได้ดีเยี่ยม เหมาะกับอากาศเมืองไทย ไม่ย้วยง่ายแม้ผ่านการซักหลายครั้ง</p>

                        <ul class="list-disc list-inside bg-white p-4 rounded-lg border border-gray-200">
                            <li>ทรง: Regular Fit / Oversize</li>
                            <li>วัสดุ: Cotton Comb 100% No.32</li>
                            <li>การดูแลรักษา: ซักเครื่องได้ (แนะนำใส่ถุงถนอมผ้า)</li>
                        </ul>

                        <div class="grid grid-cols-2 gap-3 mt-4">
                            <img src="/images/T-Shirt-W.png" class="w-full h-auto rounded border border-gray-200">
                            <img src="/images/T-Shirt-B.png" class="w-full h-auto rounded border border-gray-200">
                            <img src="/images/T-Shirt-1.png" class="w-full h-auto rounded border border-gray-200">
                        </div>
                    </div>
                </div>

                {{-- ==========================================
                      ส่วนที่ 4: รีวิว (Reviews) - ปรับปรุงใหม่เพิ่มรูป
                    ========================================== --}}
                <div class="p-6 lg:p-10 border-t border-gray-200 lg:col-start-2 lg:row-start-2">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-bold text-gray-900">รีวิวจากผู้ซื้อ (3)</h3>
                        <a href="#" class="text-emerald-600 text-sm hover:underline">ดูทั้งหมด</a>
                    </div>

                    {{-- สรุปคะแนน --}}
                    <div class="flex items-center gap-4 bg-gray-50 p-4 rounded-lg border border-gray-100 mb-6">
                        <div class="text-center px-2">
                            <div class="text-3xl font-bold text-gray-800">4.8</div>
                            <div class="text-xs text-gray-500">เต็ม 5</div>
                        </div>
                        <div class="flex-1 border-l border-gray-200 pl-4">
                            <div class="flex text-yellow-400 text-sm mb-1">★★★★★</div>
                            <p class="text-xs text-gray-500">ลูกค้าส่วนใหญ่พึงพอใจมาก</p>
                        </div>
                    </div>

                    {{-- รายการรีวิว --}}
                    <div class="space-y-6">
                        {{-- รีวิว 1 --}}
                        <div class="border-b border-gray-100 pb-6 last:border-0 last:pb-0">
                            <div class="flex gap-4">
                                {{-- Avatar ลูกค้า --}}
                                <img src="https://ui-avatars.com/api/?name=Bas&background=0D9488&color=fff"
                                    class="w-10 h-10 rounded-full border border-gray-200 flex-shrink-0" alt="Avatar">

                                <div class="flex-1">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <span class="font-semibold text-sm text-gray-900">คุณบาส</span>
                                            <div class="text-yellow-400 text-xs mt-0.5">★★★★★</div>
                                        </div>
                                        <span class="text-xs text-gray-400">3 วันที่แล้ว</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2 leading-relaxed">ผ้านุ่มมาก ใส่สบายจริง ๆ
                                        สีตรงปก ส่งไว แนะนำเลยครับ!</p>

                                    {{-- รูปรีวิวจากลูกค้า --}}
                                    <div class="flex gap-2 mt-3">
                                        <img src="/images/T-Shirt-1.png"
                                            class="w-16 h-16 rounded-md object-cover border border-gray-200 cursor-pointer hover:opacity-80">
                                        <img src="/images/T-Shirt-B.png"
                                            class="w-16 h-16 rounded-md object-cover border border-gray-200 cursor-pointer hover:opacity-80">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- รีวิว 2 --}}
                        <div class="border-b border-gray-100 pb-6 last:border-0 last:pb-0">
                            <div class="flex gap-4">
                                {{-- Avatar ลูกค้า --}}
                                <img src="https://ui-avatars.com/api/?name=May&background=random"
                                    class="w-10 h-10 rounded-full border border-gray-200 flex-shrink-0" alt="Avatar">

                                <div class="flex-1">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <span class="font-semibold text-sm text-gray-900">คุณเมย์</span>
                                            <div class="text-yellow-400 text-xs mt-0.5">★★★★☆</div>
                                        </div>
                                        <span class="text-xs text-gray-400">1 สัปดาห์</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2 leading-relaxed">เนื้อผ้าดีมาก แต่ไซซ์ Oversize
                                        ใหญ่ไปนิดสำหรับผู้หญิงตัวเล็ก</p>
                                </div>
                            </div>
                        </div>

                        {{-- รีวิว 3 --}}
                        <div class="border-b border-gray-100 pb-6 last:border-0 last:pb-0">
                            <div class="flex gap-4">
                                {{-- Avatar ลูกค้า --}}
                                <img src="https://ui-avatars.com/api/?name=Ton&background=random"
                                    class="w-10 h-10 rounded-full border border-gray-200 flex-shrink-0" alt="Avatar">

                                <div class="flex-1">
                                    <div class="flex justify-between items-start">
                                        <div>
                                            <span class="font-semibold text-sm text-gray-900">คุณต้น</span>
                                            <div class="text-yellow-400 text-xs mt-0.5">★★★★★</div>
                                        </div>
                                        <span class="text-xs text-gray-400">2 สัปดาห์</span>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-2 leading-relaxed">คุณภาพเกินราคา
                                        เดี๋ยวจะกลับมาซื้อเพิ่มอีกหลายตัว!</p>

                                    {{-- รูปรีวิวจากลูกค้า --}}
                                    <div class="flex gap-2 mt-3">
                                        <img src="/images/T-Shirt-W.png"
                                            class="w-16 h-16 rounded-md object-cover border border-gray-200 cursor-pointer hover:opacity-80">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
