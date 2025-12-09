@extends('layout')

@section('content')
    {{-- Mock Data: จำลองสถานะปัจจุบัน (1=สั่งซื้อ, 2=เตรียมของ, 3=จัดส่ง, 4=สำเร็จ) --}}
    @php
        $currentStep = 3; // <--- ลองเปลี่ยนเลขตรงนี้เป็น 1, 2, 3 หรือ 4 เพื่อดูการเปลี่ยนแปลง

        $steps = [
            1 => [
                'label' => 'สั่งซื้อสินค้า',
                'date' => '09 ธ.ค. 10:30',
                'icon' =>
                    'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
            ],
            2 => [
                'label' => 'กำลังเตรียมของ',
                'date' => '09 ธ.ค. 14:00',
                'icon' => 'M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4',
            ],
            3 => [
                'label' => 'จัดส่งแล้ว',
                'date' => '10 ธ.ค. 09:15',
                'icon' =>
                    'M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0zM13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v9h1m14.39 2.09A2.518 2.518 0 0018.63 8c-.314 0-.621.06-.91.17l-9.72 3.61A1 1 0 007 12.73V16m9 0h2.5a.5.5 0 01.5.5v.5a.5.5 0 01-.5.5h-2a.5.5 0 01-.5-.5v-.5a.5.5 0 01.5-.5z',
            ],
            4 => [
                'label' => 'สำเร็จ',
                'date' => 'รอการจัดส่ง',
                'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
            ],
        ];
    @endphp

    <div class="container mx-auto px-4 py-8 lg:py-12 min-h-screen">

        <div class="max-w-4xl mx-auto">
            {{-- Header --}}
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">ติดตามคำสั่งซื้อ</h1>
                    <p class="text-gray-500">หมายเลขคำสั่งซื้อ: <span class="text-gray-900 font-medium">#ORD-2568001</span>
                    </p>
                </div>
                <div class="flex gap-3">
                    <a href="/contact" class="btn btn-outline btn-sm">ติดต่อร้านค้า</a>
                    <a href="/payment" class="btn btn-ghost btn-sm">ย้อนกลับ</a>
                </div>
            </div>

            {{-- ================= TRACKING STATUS BAR ================= --}}
            <div class="bg-white p-6 lg:p-10 rounded-xl shadow-lg border border-gray-100 mb-8 overflow-hidden">
                <div class="relative">
                    {{-- Progress Line Background (สีเทา) --}}
                    <div class="absolute top-5 left-5 right-5 h-1 bg-gray-200 rounded-full -z-10 hidden md:block"></div>

                    {{-- Progress Line Active (สีเขียว) --}}
                    {{-- คำนวณความกว้าง: (step - 1) / (total - 1) * 100 --}}
                    <div class="absolute top-5 left-5 h-1 bg-emerald-500 rounded-full -z-10 transition-all duration-500 hidden md:block"
                        style="width: {{ (($currentStep - 1) / 3) * 100 }}%"></div>

                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 md:gap-0">
                        @foreach ($steps as $key => $step)
                            @php
                                $isActive = $key <= $currentStep;
                                $isCurrent = $key === $currentStep;
                            @endphp

                            {{-- Step Item --}}
                            <div
                                class="relative flex md:flex-col items-center gap-4 md:gap-2 w-full md:w-auto {{ $isActive ? 'text-emerald-600' : 'text-gray-400' }}">

                                {{-- Line for Mobile (Vertical) --}}
                                @if (!$loop->last)
                                    <div
                                        class="absolute left-[19px] top-10 bottom-[-24px] w-0.5 bg-gray-200 md:hidden -z-10">
                                    </div>
                                    @if ($isActive && $key < $currentStep)
                                        <div
                                            class="absolute left-[19px] top-10 bottom-[-24px] w-0.5 bg-emerald-500 md:hidden -z-10">
                                        </div>
                                    @endif
                                @endif

                                {{-- Icon Circle --}}
                                <div
                                    class="w-10 h-10 flex items-center justify-center rounded-full border-2 bg-white z-10 transition-all duration-300
                                    {{ $isActive ? 'border-emerald-500 bg-emerald-50' : 'border-gray-300' }}
                                    {{ $isCurrent ? 'ring-4 ring-emerald-100 scale-110' : '' }}">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="{{ $step['icon'] }}"></path>
                                    </svg>
                                </div>

                                {{-- Text --}}
                                <div class="flex flex-col md:items-center">
                                    <span
                                        class="font-bold text-sm md:text-base {{ $isActive ? 'text-gray-900' : 'text-gray-400' }}">
                                        {{ $step['label'] }}
                                    </span>
                                    <span class="text-xs text-gray-400 mt-1 md:mt-0">
                                        {{ $isActive ? $step['date'] : '' }}
                                    </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- ================= ORDER DETAILS ================= --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                {{-- Product List --}}
                <div class="lg:col-span-2 bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-800 border-b border-gray-100 pb-4 mb-4">รายการสินค้า</h3>

                    <div class="space-y-4">
                        {{-- Item 1 --}}
                        <div class="flex gap-4">
                            <img src="/images/T-Shirt-1.png"
                                class="w-20 h-20 rounded-md object-cover border border-gray-100">
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-900">เสื้อยืด Oversize Cotton 100%</h4>
                                <p class="text-sm text-gray-500">สี: ครีม | ไซซ์: M</p>
                                <div class="flex justify-between items-center mt-2">
                                    <span class="text-gray-500 text-sm">x1</span>
                                    <span class="font-bold text-gray-900">$390</span>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 my-2"></div>

                        {{-- Item 2 --}}
                        <div class="flex gap-4">
                            <img src="/images/T-Shirt-B.png"
                                class="w-20 h-20 rounded-md object-cover border border-gray-100">
                            <div class="flex-1">
                                <h4 class="font-medium text-gray-900">เสื้อยืด Oversize Cotton 100%</h4>
                                <p class="text-sm text-gray-500">สี: ดำ | ไซซ์: M</p>
                                <div class="flex justify-between items-center mt-2">
                                    <span class="text-gray-500 text-sm">x1</span>
                                    <span class="font-bold text-gray-900">$390</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Totals --}}
                    <div class="bg-gray-50 rounded-lg p-4 mt-6 space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">รวมการสั่งซื้อ</span>
                            <span>$780</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">ค่าจัดส่ง</span>
                            <span>$10</span>
                        </div>
                        <div class="flex justify-between text-sm text-green-600">
                            <span>ส่วนลด</span>
                            <span>-$50</span>
                        </div>
                        <div class="flex justify-between text-lg font-bold border-t border-gray-200 pt-2 mt-2">
                            <span>ยอดรวมสุทธิ</span>
                            <span class="text-emerald-600">$740</span>
                        </div>
                    </div>
                </div>

                {{-- Shipping & Info --}}
                <div class="flex flex-col gap-6">
                    {{-- Address --}}
                    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                        <h3 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            ที่อยู่จัดส่ง
                        </h3>
                        <p class="font-medium text-gray-900">คุณสมชาย ใจร้าย</p>
                        <p class="text-sm text-gray-500 mt-1 leading-relaxed">
                            99/6 ถนนสุขสวัสดิ์ แขวงบางปะกอก<br>
                            เขตบางขุนเทียน กรุงเทพมหานคร 10150<br>
                            โทร: 089-123-4567
                        </p>
                    </div>

                    {{-- Courier Info (ถ้าส่งแล้ว) --}}
                    @if ($currentStep >= 3)
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                            <h3 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                ข้อมูลการจัดส่ง
                            </h3>
                            <div class="flex items-center gap-3 mb-3">
                                <div
                                    class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center font-bold text-white text-xs">
                                    FLASH</div>
                                <div>
                                    <p class="text-sm font-bold text-gray-900">Flash Express</p>
                                    <p class="text-xs text-gray-500">TH0123456789</p>
                                </div>
                            </div>
                            <button class="btn btn-sm btn-outline w-full text-xs">เช็คเลขพัสดุ</button>
                        </div>
                    @endif

                    {{-- Help --}}
                    <div class="bg-blue-50 p-4 rounded-xl border border-blue-100 text-center">
                        <p class="text-sm text-blue-800 mb-2">มีปัญหากับคำสั่งซื้อ?</p>
                        <button class="text-blue-600 font-bold text-sm underline">ติดต่อศูนย์ช่วยเหลือ</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
