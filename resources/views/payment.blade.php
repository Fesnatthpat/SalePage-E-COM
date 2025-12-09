@extends('layout')

@section('content')
    {{-- content for payment page --}}
    <div class="container mx-auto p-4 lg:p-8">
        
        {{-- ==================== 1. Address Section ==================== --}}
        <div class="border border-gray-200 p-5 rounded-lg shadow-sm mb-6 bg-white">
            <div class="mb-4 border-b border-gray-100 pb-2">
                <h1 class="font-bold text-xl text-gray-800">ที่อยู่ในการจัดส่งสินค้า</h1>
            </div>

            @for ($i = 0; $i < 2; $i++)
                @php
                    $modalId = "modal_edit_$i"; 
                @endphp

                <div class="border border-gray-200 p-4 lg:p-5 rounded-lg mb-4 bg-white hover:border-emerald-500 transition-all duration-300 ease-in-out group">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                        
                        {{-- Address Info --}}
                        <div class="flex flex-col gap-2">
                            <div class="flex items-center gap-2">
                                <span class="font-bold text-black text-lg">บ้านของฉัน</span>
                                <span class="text-xs border border-emerald-500 text-emerald-600 px-2 py-0.5 rounded">ค่าตั้งต้น</span>
                            </div>
                            <div class="text-gray-600 text-sm lg:text-base space-y-1">
                                <p><span class="font-semibold">ชื่อ-นามสกุล:</span> สมชาย ใจร้าย</p>
                                <p><span class="font-semibold">ที่อยู่:</span> 99/6 ถนนสุขสวัสดิ์ แขวงบางปะกอก เขตบางขุนเทียน กรุงเทพมหานคร 10150</p>
                                <p><span class="font-semibold">เบอร์โทรศัพท์:</span> 013456789</p>
                            </div>
                        </div>

                        {{-- Edit Button --}}
                        <button class="btn btn-outline btn-sm lg:btn-md w-full lg:w-auto" onclick="{{ $modalId }}.showModal()">
                            แก้ไขที่อยู่
                        </button>
                    </div>

                    {{-- Modal (คงเดิมแต่จัด Layout ภายในนิดหน่อย) --}}
                    <dialog id="{{ $modalId }}" class="modal modal-bottom sm:modal-middle">
                        <div class="modal-box">
                            <h3 class="font-bold text-lg mb-4">แก้ไขที่อยู่</h3>
                            <form action="" class="flex flex-col gap-4">
                                <div class="flex gap-2">
                                    <div class="btn btn-sm btn-active btn-neutral">บ้าน</div>
                                    <div class="btn btn-sm btn-outline">ที่ทำงาน</div>
                                </div>
                                <input type="text" placeholder="ชื่อ-นามสกุล" class="input input-bordered w-full" />
                                <input type="text" placeholder="ที่อยู่" class="input input-bordered w-full" />
                                <input type="text" placeholder="เบอร์โทรศัพท์" class="input input-bordered w-full" />
                            </form>
                            <div class="modal-action">
                                <form method="dialog" class="flex gap-2">
                                    <button class="btn bg-gray-200 text-gray-700 border-none hover:bg-gray-300">ยกเลิก</button>
                                    <button class="btn bg-emerald-600 text-white border-none hover:bg-emerald-700">ตกลง</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                </div>
            @endfor
        </div>

        {{-- ==================== 2. Product List Section ==================== --}}
        <div class="border border-gray-200 p-5 rounded-lg shadow-sm mb-6 bg-white">
            <h1 class="font-bold text-xl border-b border-gray-200 pb-4 mb-4 text-gray-800">สั่งซื้อสินค้าแล้ว</h1>
            
            <div class="space-y-4">
                {{-- Product Item 1 --}}
                <div class="w-full border border-gray-200 p-4 rounded-lg hover:shadow-md transition-all duration-300 ease-in-out bg-white">
                    <div class="flex flex-col sm:flex-row gap-4">
                        {{-- Image --}}
                        <div class="w-full sm:w-32 h-40 sm:h-32 flex-shrink-0">
                            <img src="/images/T-Shirt-1.png" alt="เสื้อยืด Oversize Cotton 100%"
                                class="w-full h-full object-cover rounded-md">
                        </div>
                        
                        {{-- Details --}}
                        <div class="flex flex-col sm:flex-row justify-between flex-grow gap-4">
                            <div class="flex flex-col justify-between">
                                <div>
                                    <h1 class="font-bold text-lg text-gray-900">เสื้อยืด Oversize Cotton 100%</h1>
                                    <p class="text-gray-500 text-sm mt-1">ขนาด: M | สี: ครีม</p>
                                </div>
                            </div>
                            
                            <div class="flex flex-row sm:flex-col justify-between items-center sm:items-end border-t sm:border-t-0 border-gray-100 pt-3 sm:pt-0">
                                <p class="text-gray-500 text-sm">จำนวน: 2 ชิ้น</p>
                                <p class="font-bold text-xl text-red-500">$780</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Product Item 2 --}}
                <div class="w-full border border-gray-200 p-4 rounded-lg hover:shadow-md transition-all duration-300 ease-in-out bg-white">
                    <div class="flex flex-col sm:flex-row gap-4">
                        {{-- Image --}}
                        <div class="w-full sm:w-32 h-40 sm:h-32 flex-shrink-0">
                            <img src="/images/T-Shirt-B.png" alt="เสื้อยืด Oversize Cotton 100%"
                                class="w-full h-full object-cover rounded-md">
                        </div>
                        
                        {{-- Details --}}
                        <div class="flex flex-col sm:flex-row justify-between flex-grow gap-4">
                            <div class="flex flex-col justify-between">
                                <div>
                                    <h1 class="font-bold text-lg text-gray-900">เสื้อยืด Oversize Cotton 100%</h1>
                                    <p class="text-gray-500 text-sm mt-1">ขนาด: M | สี: ดำ</p>
                                </div>
                            </div>
                            
                            <div class="flex flex-row sm:flex-col justify-between items-center sm:items-end border-t sm:border-t-0 border-gray-100 pt-3 sm:pt-0">
                                <p class="text-gray-500 text-sm">จำนวน: 2 ชิ้น</p>
                                <p class="font-bold text-xl text-red-500">$780</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ==================== 3. Payment Method Section ==================== --}}
        <div class="border border-gray-200 p-5 rounded-lg shadow-sm mb-6 bg-white">
            <h1 class="font-bold text-xl border-b border-gray-200 pb-4 mb-4 text-gray-800">วิธีชำระเงิน</h1>

            <div class="flex flex-col lg:flex-row lg:gap-8">
                
                {{-- Left Side: Selection --}}
                <div class="flex-1">
                    <select class="select select-bordered w-full text-base mb-4">
                        <option disabled selected>เลือกวิธีชำระเงิน</option>
                        <option>ชำระเงินปลายทาง</option>
                        <option>โอนผ่านธนาคาร</option>
                        <option>บัตรเครดิต/เดบิต</option>
                    </select>

                    {{-- QR Code Section --}}
                    <div class="border border-gray-200 rounded-lg p-4 bg-gray-50 flex items-center gap-4 w-full sm:w-max mb-6 lg:mb-0">
                        <input type="checkbox" class="checkbox checkbox-primary" />
                        <div class="w-32 h-auto">
                            <img src="/images/ci-qrpayment-img-01.png" alt="พร้อมเพย์ QR Code"
                                class="w-full h-full object-contain">
                        </div>
                        <span class="text-sm font-medium text-gray-600">ชำระผ่านพร้อมเพย์</span>
                    </div>
                </div>

                {{-- Right Side: Totals --}}
                <div class="w-full lg:w-96 flex flex-col gap-4 mt-4 lg:mt-0">
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <div class="text-lg font-bold mb-3 border-b border-gray-200 pb-2">สรุปยอดชำระ</div>
                        
                        <div class="space-y-2 text-base">
                            <div class="flex justify-between">
                                <span class="text-gray-600">รวมการสั่งซื้อ</span>
                                <span class="text-gray-900 font-medium">$780</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">การจัดส่ง</span>
                                <span class="text-gray-900 font-medium">$10</span>
                            </div>
                            <div class="flex justify-between text-green-600">
                                <span>ส่วนลด</span>
                                <span>-$50</span>
                            </div>
                            <div class="flex justify-between border-t border-gray-300 pt-3 mt-2 text-lg font-bold">
                                <span class="text-gray-800">ยอดชำระทั้งหมด</span>
                                <span class="text-red-500">$740</span>
                            </div>
                        </div>

                        {{-- Action Buttons --}}
                        <div class="mt-6 flex flex-col gap-3">
                            <a href="/qr" class="btn btn-primary w-full text-lg shadow-md hover:shadow-lg">ชำระเงิน</a>
                            <a href="/cart" class="btn btn-ghost w-full text-gray-500 hover:text-gray-700">ยกเลิกคำสั่งซื้อ</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Footer: Payment Logos & Security --}}
            <div class="mt-8 pt-6 border-t border-gray-200">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    
                    {{-- Logos --}}
                    <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                        <img src="/images/master-card.png" class="h-8 object-contain" alt="master-card">
                        <img src="/images/visa.png" class="h-8 object-contain" alt="visa">
                        <img src="/images/jcb.png" class="h-8 object-contain" alt="jcb">
                        <img src="/images/union-pay.png" class="h-8 object-contain" alt="union-pay">
                    </div>

                    {{-- Security Text --}}
                    <div class="text-center md:text-right text-xs text-gray-400 space-y-1">
                        <p>การชำระเงินทั้งหมดดำเนินการผ่านการเชื่อมต่อที่ปลอดภัย SSL</p>
                        <p>เราไม่เก็บข้อมูลบัตรเครดิตของคุณ</p>
                        <p>สินค้าของคุณจะถูกจัดส่งภายใน 3-5 วันทำการ</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection