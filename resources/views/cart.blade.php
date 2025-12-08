@extends('layout')

@section('content')
    {{-- Alpine.js --}}
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    {{-- container-1 --}}
    <div class="container p-12 mx-auto " x-data="{ quantity: 1 }">

        <div class="p-12 border-gray-200 shadow bg-white rounded-lg">
            {{-- con-2 --}}
            <div class="">
                {{-- 1 --}}
                <div class="mb-5 border-b-1 border-gray-200">
                    <h1 class="text-2xl">ตะกร้าสินค้า</h1>
                </div>

                {{-- 2 --}}
                <div class="flex items-center justify-between border-b-2 border-gray-200">
                    {{-- img --}}
                    <div class="mb-5 flex flex-row">
                        <div class="w-full h-full">
                            <img class="w-22 h-full object-cover" src="/images/T-Shirt-1.png" alt="">
                        </div>
                        <div class=" w-[110px] md:w-full mt-5">
                            <h1 class="font-bold">-เสื้อยืด Oversize Cotton 100%</h1>
                            <h1 class="font-bold">-M</h1>
                            <h1 class="font-bold">-ครีม</h1>
                        </div>
                    </div>

                    {{-- dt --}}
                    <div class="">
                        <div class="text-2xl font-bold">
                            $390
                        </div>

                        {{-- Quantity & Remove --}}
                        <div class="flex flex-col sm:flex-row md:items-center gap-4 mt-2">

                            {{-- Quantity Input (แก้ไขเรียบร้อย) --}}
                            <div class="flex items-center border border-gray-300 rounded h-12 w-36 bg-white">

                                {{-- - BTN --}}
                                <button @click="quantity > 1 ? quantity-- : null"
                                    class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold transition rounded-l cursor-pointer">
                                    -
                                </button>

                                {{-- DISPLAY QTY --}}
                                <input type="text" x-model="quantity"
                                    class="w-full h-full text-center border-none focus:ring-0 text-gray-900 font-medium text-lg"
                                    readonly>

                                {{-- + BTN --}}
                                <button @click="quantity++"
                                    class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold transition rounded-r cursor-pointer">
                                    +
                                </button>

                            </div>

                            <div>
                                <div class="btn text-red-500 w-full">ลบ</div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="flex items-center justify-between border-b-2 border-gray-200">
                    {{-- img --}}
                    <div class="mb-5 flex flex-row">
                        <div class="w-full h-full">
                            <img class="w-22 h-full object-cover" src="/images/T-Shirt-B.png" alt="">
                        </div>
                        <div class=" w-[110px] md:w-full mt-5">
                            <h1 class="font-bold">-เสื้อยืด Oversize Cotton 100%</h1>
                            <h1 class="font-bold">-M</h1>
                            <h1 class="font-bold">-ดำ</h1>
                        </div>
                    </div>

                    {{-- dt --}}
                    <div class="">
                        <div class="text-2xl font-bold">
                            $390
                        </div>

                        {{-- Quantity & Remove --}}
                        <div class="flex flex-col sm:flex-row md:items-center gap-4 mt-2">

                            {{-- Quantity Input (แก้ไขเรียบร้อย) --}}
                            <div class="flex items-center border border-gray-300 rounded h-12 w-36 bg-white">

                                {{-- - BTN --}}
                                <button @click="quantity > 1 ? quantity-- : null"
                                    class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold transition rounded-l cursor-pointer">
                                    -
                                </button>

                                {{-- DISPLAY QTY --}}
                                <input type="text" x-model="quantity"
                                    class="w-full h-full text-center border-none focus:ring-0 text-gray-900 font-medium text-lg"
                                    readonly>

                                {{-- + BTN --}}
                                <button @click="quantity++"
                                    class="w-10 h-full text-gray-500 hover:bg-gray-100 text-xl font-bold transition rounded-r cursor-pointer">
                                    +
                                </button>

                            </div>

                            <div>
                                <div class="btn text-red-500 w-full">ลบ</div>
                            </div>

                        </div>

                    </div>
                </div>

                {{-- 3 --}}
                <div class="flex flex-col lg:flex-row justify-end gap-5 mt-10">
                    {{-- 1 --}}
                    {{-- <div class="w-full">
                    เลือกที่อยู่จัดส่ง
                    <div class="mt-5"></div>
                    <select class="select select-bordered w-full">
                        <option disabled selected>เลือกที่อยู่จัดส่ง</option>
                        <option>ที่อยู่ 1
                            <div class="">123/1 กทม 10060 ธนบุรี</div>
                        </option>
                        <option>ที่อยู่ 2
                            <div class="">456/2 กทม 10060 บางกอกน้อย</div>
                        </option>
                        <option>ที่อยู่ 3
                            <div class="">789/3 กทม 10060 บางพลัด</div>
                        </option>
                    </select>
                    btn-add-address
                    <div class="mt-5">
                        <div class="">
                            <form action="">
                                <input type="text" placeholder="ชื่อ-นามสกุล" class="input input-bordered w-full" />
                                <input type="text" placeholder="ที่อยู่" class="input input-bordered w-full mt-3" />
                                <input type="text" placeholder="เบอร์โทรศัพท์" class="input input-bordered w-full mt-3" />
                            </form>
                        </div>
                        <div class="btn btn-outline w-full mt-3">เพิ่มที่อยู่ใหม่</div>
                    </div>
                </div> --}}
                    {{-- 2 --}}
                    <div class="w-full lg:w-[550px]">
                        {{-- Summary --}}
                        <div class="flex justify-between mt-5">
                            <div class="text-black flex font-bold">
                                ยอดรวม
                                <div class="text-gray-400">( <span x-text="quantity"></span> ชิ้น )</div>
                            </div>
                            <div>
                                <h1 class="font-bold">$390</h1>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <div class="text-black flex font-bold">ส่วนลด</div>
                            <div>
                                <h1 class="font-bold text-red-500">-$0.00</h1>
                            </div>
                        </div>

                        {{-- Total --}}
                        <div class="border-t-2 mt-5 border-gray-200">
                            <div class="mt-5 flex justify-between">
                                <div>
                                    <h1 class="font-bold">ยอดรวมทั้งสิ้น</h1>
                                </div>
                                <div>
                                    <h1 class="text-green-500 font-bold">
                                        $<span x-text="quantity * 390"></span>
                                    </h1>
                                </div>
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="mt-5 flex md:justify-end justify-between md:gap-x-3">
                            <div class="btn"><a href="/product">กลับ</a></div>
                            <div class="btn btn-success text-white "><a href="/payment">ดำเนินการชำระเงิน</a></div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    @endsection
