@extends('layout')

@section('content')
    {{-- content for payment page --}}
    <div class="container mx-auto p-4">
        {{-- address --}}
        <div class="border-2 border-gray-100 p-5 rounded-lg shadow-lg mb-4 bg-white">
            <div class="mb-4">
                <h1 class="font-bold text-xl">ที่อยู่ในการจัดส่งสินค้า</h1>
            </div>

            {{-- 1 --}}
            @for ($i = 0; $i < 2; $i++)
                @php
                    $modalId = "modal_edit_$i"; // สร้าง ID ที่ไม่ซ้ำกันสำหรับแต่ละ modal
                @endphp

                <div
                    class="border-2 border-gray-100 p-5 rounded-lg shadow-lg mb-4 bg-white hover:border-gray-600 hover:border-2 transition-all duration-300 ease-in-out">
                    <div class="mt-2 flex lg:justify-between flex-col lg:flex-row lg:items-center gap-2">
                        <div class="">
                            <span class="font-bold text-black">บ้านของฉัน</span>
                            <span class="border border-green-500 p-2 rounded-md">ค่าตั้งต้น</span>
                        </div>
                        <div class="text-gray-500">
                            <p>ชื่อ-นามสกุล: สมชาย ใจร้าย</p>
                            <p>ที่อยู่: 99/6 ถนนสุขสวัสดิ์ แขวงบางปะกอก เขตบางขุนเทียน กรุงเทพมหานคร 10150</p>
                            <p>เบอร์โทรศัพท์: 013456789</p>
                        </div>

                        {{-- ปุ่มเปิด modal --}}
                        <button class="btn" onclick="{{ $modalId }}.showModal()">แก้ไขที่อยู่</button>
                    </div>

                    {{-- modal ต้องอยู่นอก flex --}}
                    <dialog id="{{ $modalId }}" class="modal">
                        <div class="modal-box">
                            <div class="mt-5">
                                <div class="">
                                    <form action="" class="flex flex-col gap-3">
                                        <div class="">
                                            <h1 class="font-bold">แก้ไขที่อยู่</h1>
                                        </div>
                                        <div class="mb-5">
                                            <div class="btn btn-outline btn-sm">บ้าน</div>
                                            <div class="btn btn-outline btn-sm">ที่ทำงาน</div>
                                        </div>
                                        <input type="text" placeholder="ชื่อ-นามสกุล"
                                            class="input input-bordered w-full" />
                                        <input type="text" placeholder="ที่อยู่"
                                            class="input input-bordered w-full mt-3" />
                                        <input type="text" placeholder="เบอร์โทรศัพท์"
                                            class="input input-bordered w-full mt-3" />
                                    </form>
                                </div>
                            </div>
                            <div class="modal-action">
                                <form method="dialog">
                                    <button class="btn bg-green-600 text-white">ตกลง</button>
                                    <button class="btn bg-red-500 text-white">ยกเลิก</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                </div>
            @endfor
        </div>

        {{-- สั่งซื้อสินค้าแล้ว --}}
        <div class="w-full h-full border-2 border-gray-100 p-5 rounded-lg shadow-lg mb-4 bg-white">
            <h1 class="font-bold text-xl border-b-2 border-gray-200 pb-4 mb-4">สั่งซื้อสินค้าแล้ว</h1>
            <div class=" p-2 rounded-lg ">
                {{-- list-product --}}
                <div
                    class="w-full hover:border-gray-600 hover:border-2 transition-all duration-300 ease-in-out h-full flex justify-between items-center border-2 border-gray-100 p-5 rounded-lg shadow-lg mb-4 bg-white">
                    {{-- img-pd --}}
                    <div class="w-32 h-32 mr-5 object-cover">
                        <img src="/images/T-Shirt-1.png" alt="เสื้อยืด Oversize Cotton 100%"
                            class="w-full h-full object-cover float-left rounded-md mr-5">
                    </div>
                    {{-- detail-pd --}}
                    <div class="flex flex-col justify-between p-2 flex-grow">
                        <h1 class="font-bold text-lg">เสื้อยืด Oversize Cotton 100%</h1>
                        <p class="text-gray-500">ขนาด: M | สี: ครีม</p>
                    </div>
                    {{-- qty & price --}}
                    <div class="p-2 flex flex-col items-end">
                        <p class="text-gray-500">จำนวน: 2 ชิ้น</p>
                        <p class="font-bold text-xl mt-2 text-red-500">$780</p>
                    </div>
                </div>

                <div
                    class="w-full hover:border-gray-500 hover:border-2 transition-all duration-300 ease-in-out h-full flex justify-between items-center border-2 border-gray-100 p-5 rounded-lg shadow-lg mb-4 bg-white">
                    {{-- img-pd --}}
                    <div class="w-32 h-32 mr-5 object-cover">
                        <img src="/images/T-Shirt-B.png" alt="เสื้อยืด Oversize Cotton 100%"
                            class="w-full h-full object-cover float-left rounded-md mr-5">
                    </div>
                    {{-- detail-pd --}}
                    <div class="flex flex-col justify-between p-2 flex-grow">
                        <h1 class="font-bold text-lg">เสื้อยืด Oversize Cotton 100%</h1>
                        <p class="text-gray-500">ขนาด: M | สี: ดำ</p>
                    </div>
                    {{-- qty & price --}}
                    <div class="p-2 flex flex-col items-end">
                        <p class="text-gray-500">จำนวน: 2 ชิ้น</p>
                        <p class="font-bold text-xl mt-2 text-red-500">$780</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- วิธีชำระเงิน --}}
        <div class="w-full h-full border-2 border-gray-100 p-5 rounded-lg shadow-lg mb-4 bg-white">
            <div class="">
                <h1 class="font-bold text-xl border-b-2 border-gray-200 pb-4 mb-4">วิธีชำระเงิน</h1>

                <select class="select select-bordered w-full">
                    <option disabled selected>เลือกวิธีชำระเงิน</option>
                    <option>ชำระเงินปลายทาง</option>
                    <option>โอนผ่านธนาคาร</option>
                    <option>บัตรเครดิต/เดบิต</option>
                </select>

                {{-- qr พร้อมเพย์ --}}
                <div class="border-b-2 border-gray-200 pb-4">
                    <div class="mt-5 w-[150px] h-full flex items-center gap-2 ">
                        <input type="checkbox" class="checkbox" />
                        <img src="/images/ci-qrpayment-img-01.png" alt="พร้อมเพย์ QR Code"
                            class="w-full h-full object-cover">
                    </div>
                </div>

                {{-- ยอดรวม --}}
                <div class="mt-5 flex w-full flex-col gap-2 lg:items-end p-2">
                    <div class="w-full lg:w-72">
                        <div class="text-lg font-bold mb-2 flex items-start">ยอดรวม</div>
                        <div class="text-lg flex justify-between w-full lg:w-72">
                            <span class="text-gray-600">รวมการสั่งซื้อ</span>
                            <span class="text-gray-600">$780</span>
                        </div>
                        <div class="text-lg flex justify-between w-full lg:w-72">
                            <span class="text-gray-600">การจัดส่ง</span>
                            <span class="text-gray-600">$10</span>
                        </div>
                        <div class="text-lg flex justify-between w-full lg:w-72">
                            <span class="text-gray-600">ส่วนลด</span>
                            <span class="text-gray-600">-$50</span>
                        </div>
                        <div class="text-lg flex justify-between w-full lg:w-72 border-t-2 border-gray-200 pt-2 font-bold">
                            <span class="text-gray-600">ยอดชำระทั้งหมด</span>
                            <span class="text-gray-600">$740</span>
                        </div>


                        {{-- btn-pay --}}
                        <div class="mt-4 w-full lg:w-72 flex flex-col gap-2">
                            <a href="/cart" class="btn">ยกเลิกคำสั่งซื้อ</a>
                            <a href="/qr" class="btn btn-primary btn-lg">ชำระเงิน</a>
                        </div>
                    </div>

                    {{-- payment methods --}}
                    <div class="mt-5  border-t-2 pt-5 border-gray-200">
                        {{-- logo payments --}}
                        <div class="">
                            <div class="flex items-center justify-around border-2 border-gray-100 p-3 rounded-lg shadow-lg">
                                <img src="/images/master-card.png" alt="master-card"
                                    class="object-cover w-14 h-10 inline-block mr-2">
                                <img src="/images/visa.png" alt="visa"
                                    class="object-cover w-14 h-10 inline-block mr-2">
                                <img src="/images/jcb.png" alt="jcb"
                                    class="object-cover w-14 h-10 inline-block mr-2">
                                <img src="/images/union-pay.png" alt="union-pay"
                                    class="object-cover w-14 h-10 inline-block mr-2">
                            </div>
                        </div>

                        <div class="">
                            <div class="mt-3 text-gray-400 text-sm">
                                การชำระเงินทั้งหมดดำเนินการผ่านการเชื่อมต่อที่ปลอดภัย SSL
                            </div>
                            <div class="mt-3 text-gray-400 text-sm">
                                เราไม่เก็บข้อมูลบัตรเครดิตของคุณ
                            </div>
                            <div class="mt-3 text-gray-400 text-sm">
                                สินค้าของคุณจะถูกจัดส่งภายใน 3-5 วันทำการ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
