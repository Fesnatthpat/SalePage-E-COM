@extends('layout')

@section('content')
    {{-- 
        Alpine Data:
        - currentTab: จัดการแท็บ
        - showModal: สถานะเปิดปิด Modal
        - rating: คะแนนดาว
    --}}
    <div x-data="{
        currentTab: 'all',
        showModal: false,
        rating: 0,
        hoverRating: 0,
        reviewText: '',
    
        openModal() {
            this.showModal = true;
            this.rating = 0;
            this.reviewText = '';
        },
        closeModal() {
            this.showModal = false;
        },
        setRating(val) {
            this.rating = val;
        }
    }" class="container mx-auto px-4 py-8 lg:py-12 min-h-screen relative">

        {{-- Header --}}
        <div class="mb-6 md:mb-8">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900">ประวัติการสั่งซื้อ</h1>
            <p class="text-gray-500 mt-1 text-sm md:text-base">จัดการและดูสถานะคำสั่งซื้อของคุณ</p>
        </div>

        {{-- Tabs --}}
        <div class="flex overflow-x-auto pb-4 mb-6 scrollbar-hide border-b border-gray-200">
            <div class="flex gap-6 min-w-max px-2">
                <button @click="currentTab = 'all'" class="pb-3 text-sm font-medium transition-colors relative"
                    :class="currentTab === 'all' ? 'text-emerald-600 border-b-2 border-emerald-600' :
                        'text-gray-500 hover:text-gray-700'">ทั้งหมด</button>
                <button @click="currentTab = 'to_pay'" class="pb-3 text-sm font-medium transition-colors relative"
                    :class="currentTab === 'to_pay' ? 'text-emerald-600 border-b-2 border-emerald-600' :
                        'text-gray-500 hover:text-gray-700'">ที่ต้องชำระ</button>
                <button @click="currentTab = 'to_ship'" class="pb-3 text-sm font-medium transition-colors relative"
                    :class="currentTab === 'to_ship' ? 'text-emerald-600 border-b-2 border-emerald-600' :
                        'text-gray-500 hover:text-gray-700'">ที่ต้องจัดส่ง</button>
                <button @click="currentTab = 'to_receive'" class="pb-3 text-sm font-medium transition-colors relative"
                    :class="currentTab === 'to_receive' ? 'text-emerald-600 border-b-2 border-emerald-600' :
                        'text-gray-500 hover:text-gray-700'">ที่ต้องได้รับ</button>
                <button @click="currentTab = 'completed'" class="pb-3 text-sm font-medium transition-colors relative"
                    :class="currentTab === 'completed' ? 'text-emerald-600 border-b-2 border-emerald-600' :
                        'text-gray-500 hover:text-gray-700'">สำเร็จ</button>
                <button @click="currentTab = 'cancelled'" class="pb-3 text-sm font-medium transition-colors relative"
                    :class="currentTab === 'cancelled' ? 'text-emerald-600 border-b-2 border-emerald-600' :
                        'text-gray-500 hover:text-gray-700'">ยกเลิก</button>
            </div>
        </div>

        {{-- Order List --}}
        <div class="space-y-4 md:space-y-6">

            {{-- CARD 1: ที่ต้องได้รับ (To Receive) --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200 overflow-hidden"
                x-show="currentTab === 'all' || currentTab === 'to_receive'">

                {{-- Card Header --}}
                <div class="bg-gray-50 px-4 py-3 md:px-6 flex justify-between items-center border-b border-gray-100">
                    <div class="flex flex-col md:flex-row md:items-center gap-1 md:gap-4">
                        <span class="font-bold text-gray-800">#ORD-2568001</span>
                        <span class="text-xs text-gray-500">สั่งเมื่อ: 09 ธ.ค. 2025</span>
                    </div>
                    <div
                        class="flex items-center gap-2 text-blue-600 bg-blue-50 px-3 py-1 rounded-full text-xs font-bold border border-blue-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                            </path>
                        </svg>
                        ที่ต้องได้รับ
                    </div>
                </div>

                {{-- Card Body --}}
                <div class="p-4 md:p-6">
                    {{-- Item 1 --}}
                    <div class="flex gap-4">
                        <div class="w-20 h-20 flex-shrink-0 border border-gray-200 rounded-md overflow-hidden">
                            <img src="/images/T-Shirt-1.png" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm md:text-base font-bold text-gray-900 line-clamp-2">เสื้อยืด Oversize
                                    Cotton 100%</h3>
                                <p class="text-xs md:text-sm text-gray-500 mt-1">สี: ครีม, ไซซ์: M</p>
                            </div>
                            <div class="flex justify-between items-end mt-2">
                                <span class="text-xs text-gray-500">x 1</span>
                                <span class="text-sm font-bold text-gray-900">฿390</span>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-100 my-4"></div>

                    {{-- Item 2 --}}
                    <div class="flex gap-4">
                        <div class="w-20 h-20 flex-shrink-0 border border-gray-200 rounded-md overflow-hidden">
                            <img src="/images/T-Shirt-B.png" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm md:text-base font-bold text-gray-900 line-clamp-2">เสื้อยืด Oversize
                                    Cotton 100%</h3>
                                <p class="text-xs md:text-sm text-gray-500 mt-1">สี: ดำ, ไซซ์: M</p>
                            </div>
                            <div class="flex justify-between items-end mt-2">
                                <span class="text-xs text-gray-500">x 1</span>
                                <span class="text-sm font-bold text-gray-900">฿390</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Card Footer --}}
                <div
                    class="px-4 py-4 md:px-6 border-t border-gray-100 flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="w-full sm:w-auto flex justify-between sm:block items-center">
                        <span class="text-sm text-gray-500 mr-2">ยอดคำสั่งซื้อรวม:</span>
                        <span class="text-xl font-bold text-emerald-600">฿740</span>
                    </div>
                    <div class="flex gap-3 w-full sm:w-auto">
                        <a href="/ordertracking" class="flex-1 sm:flex-none btn btn-outline btn-sm">ติดตามพัสดุ</a>
                        <button
                            class="flex-1 sm:flex-none btn bg-emerald-600 hover:bg-emerald-700 text-white btn-sm border-none">ฉันได้ตรวจสอบและรับของแล้ว</button>
                    </div>
                </div>
            </div>

            {{-- CARD 2: สำเร็จ (Completed) - มีปุ่มให้คะแนน --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200 overflow-hidden"
                x-show="currentTab === 'all' || currentTab === 'completed'">

                <div class="bg-gray-50 px-4 py-3 md:px-6 flex justify-between items-center border-b border-gray-100">
                    <div class="flex flex-col md:flex-row md:items-center gap-1 md:gap-4">
                        <span class="font-bold text-gray-800">#ORD-2567882</span>
                        <span class="text-xs text-gray-500">สั่งเมื่อ: 01 ธ.ค. 2025</span>
                    </div>
                    <div
                        class="flex items-center gap-2 text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full text-xs font-bold border border-emerald-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        สำเร็จ
                    </div>
                </div>

                <div class="p-4 md:p-6">
                    <div class="flex gap-4">
                        <div class="w-20 h-20 flex-shrink-0 border border-gray-200 rounded-md overflow-hidden">
                            <img src="/images/T-Shirt-W.png" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm md:text-base font-bold text-gray-900 line-clamp-2">เสื้อยืด Oversize
                                    Cotton 100%</h3>
                                <p class="text-xs md:text-sm text-gray-500 mt-1">สี: ขาว, ไซซ์: L</p>
                            </div>
                            <div class="flex justify-between items-end mt-2">
                                <span class="text-xs text-gray-500">x 2</span>
                                <span class="text-sm font-bold text-gray-900">฿780</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="px-4 py-4 md:px-6 border-t border-gray-100 flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="w-full sm:w-auto flex justify-between sm:block items-center">
                        <span class="text-sm text-gray-500 mr-2">ยอดคำสั่งซื้อรวม:</span>
                        <span class="text-xl font-bold text-emerald-600">฿790</span>
                    </div>
                    <div class="flex gap-3 w-full sm:w-auto">
                        {{-- ปุ่มกดให้คะแนน (Trigger Modal) --}}
                        <button @click="openModal()"
                            class="flex-1 sm:flex-none btn btn-outline btn-sm text-yellow-600 hover:text-yellow-700 hover:bg-yellow-50 hover:border-yellow-600 border-yellow-500">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                </path>
                            </svg>
                            ให้คะแนน
                        </button>
                        <button
                            class="flex-1 sm:flex-none btn bg-emerald-600 hover:bg-emerald-700 text-white btn-sm border-none">ซื้ออีกครั้ง</button>
                    </div>
                </div>
            </div>

            {{-- CARD 3: ยกเลิก (Cancelled) --}}
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-200 overflow-hidden opacity-75"
                x-show="currentTab === 'all' || currentTab === 'cancelled'">

                <div class="bg-gray-50 px-4 py-3 md:px-6 flex justify-between items-center border-b border-gray-100">
                    <div class="flex flex-col md:flex-row md:items-center gap-1 md:gap-4">
                        <span class="font-bold text-gray-800">#ORD-2567500</span>
                        <span class="text-xs text-gray-500">สั่งเมื่อ: 28 พ.ย. 2025</span>
                    </div>
                    <div
                        class="flex items-center gap-2 text-red-600 bg-red-50 px-3 py-1 rounded-full text-xs font-bold border border-red-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        ยกเลิกแล้ว
                    </div>
                </div>

                <div class="p-4 md:p-6">
                    <div class="flex gap-4">
                        <div class="w-20 h-20 flex-shrink-0 border border-gray-200 rounded-md overflow-hidden grayscale">
                            <img src="/images/T-Shirt-1.png" class="w-full h-full object-cover">
                        </div>
                        <div class="flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="text-sm md:text-base font-bold text-gray-600 line-clamp-2">เสื้อยืด Oversize
                                    Cotton 100%</h3>
                                <p class="text-xs md:text-sm text-gray-400 mt-1">สี: ครีม, ไซซ์: XL</p>
                            </div>
                            <div class="flex justify-between items-end mt-2">
                                <span class="text-xs text-gray-400">x 1</span>
                                <span class="text-sm font-bold text-gray-500">฿390</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="px-4 py-4 md:px-6 border-t border-gray-100 flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="w-full sm:w-auto flex justify-between sm:block items-center">
                        <span class="text-sm text-gray-500 mr-2">ยอดคำสั่งซื้อรวม:</span>
                        <span class="text-xl font-bold text-gray-600">฿390</span>
                    </div>
                    <div class="flex gap-3 w-full sm:w-auto">
                        <button class="flex-1 sm:flex-none btn btn-outline btn-sm w-full sm:w-auto">ดูรายละเอียด</button>
                    </div>
                </div>
            </div>

        </div>

        {{-- ===========================================
             RATING MODAL (หน้าต่างให้คะแนน)
             =========================================== --}}

        <div x-show="showModal" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4"
            style="display: none;">

            <div @click.away="closeModal()" class="bg-white rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden">

                {{-- Modal Header --}}
                <div class="bg-gray-50 px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                    <h3 class="text-lg font-bold text-gray-800">ให้คะแนนสินค้า</h3>
                    <button @click="closeModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                {{-- Modal Body --}}
                <div class="p-6">
                    <div class="flex gap-4 mb-6">
                        <img src="/images/T-Shirt-W.png" class="w-16 h-16 rounded object-cover border border-gray-100">
                        <div>
                            <p class="font-bold text-gray-800">เสื้อยืด Oversize Cotton 100%</p>
                            <p class="text-sm text-gray-500">สี: ขาว, ไซซ์: L</p>
                        </div>
                    </div>

                    {{-- Stars --}}
                    <div class="flex flex-col items-center mb-6">
                        <p class="text-gray-600 mb-2 text-sm">คุณพึงพอใจกับสินค้านี้แค่ไหน?</p>
                        <div class="flex gap-2">
                            <template x-for="i in 5">
                                <button @click="setRating(i)" @mouseenter="hoverRating = i" @mouseleave="hoverRating = 0"
                                    class="transition-transform hover:scale-110 focus:outline-none">
                                    <svg class="w-10 h-10"
                                        :class="(hoverRating || rating) >= i ? 'text-yellow-400 fill-current' : 'text-gray-300'"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                                        </path>
                                    </svg>
                                </button>
                            </template>
                        </div>
                        {{-- Rating Text --}}
                        <div class="h-6 mt-1">
                            <span x-show="rating === 5" class="text-emerald-600 text-sm font-bold">ยอดเยี่ยมมาก!</span>
                            <span x-show="rating === 4" class="text-emerald-600 text-sm font-bold">ดีมาก</span>
                            <span x-show="rating === 3" class="text-yellow-600 text-sm font-bold">พอใช้</span>
                            <span x-show="rating === 2" class="text-orange-500 text-sm font-bold">พอใช้</span>
                            <span x-show="rating === 1" class="text-red-500 text-sm font-bold">ควรปรับปรุง</span>
                        </div>
                    </div>

                    {{-- Review Text --}}
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-1">ความคิดเห็นเพิ่มเติม</label>
                        <textarea x-model="reviewText" rows="3"
                            class="textarea textarea-bordered w-full focus:ring-emerald-500 focus:border-emerald-500"
                            placeholder="บอกเราว่าคุณชอบสินค้าตรงไหน..."></textarea>
                    </div>

                    {{-- Upload --}}
                    <div class="mb-2">
                        <label
                            class="btn btn-outline btn-sm w-full border-dashed border-gray-300 text-gray-500 hover:bg-gray-50 hover:border-gray-400 normal-case font-normal">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0010.07 4h3.86a2 2 0 001.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            เพิ่มรูปภาพสินค้า
                            <input type="file" class="hidden">
                        </label>
                    </div>
                </div>

                {{-- Modal Footer --}}
                <div class="bg-gray-50 px-6 py-4 flex gap-3 justify-end">
                    <button @click="closeModal()" class="btn btn-ghost text-gray-500">ยกเลิก</button>
                    <button class="btn bg-emerald-600 hover:bg-emerald-700 text-white" :disabled="rating === 0"
                        @click="closeModal(); alert('ขอบคุณสำหรับการรีวิว!')">
                        ส่งคะแนน
                    </button>
                </div>
            </div>
        </div>

    </div>
@endsection
    