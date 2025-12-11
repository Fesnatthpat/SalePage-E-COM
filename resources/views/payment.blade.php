@extends('layout')

@section('content')
    <div class="container mx-auto p-4 lg:p-8">

        {{-- ==================== 1. ส่วนที่อยู่ (Address Section) ==================== --}}
        <div class="border border-gray-200 p-5 rounded-lg shadow-sm mb-6 bg-white">
            <div class="mb-4 border-b border-gray-100 pb-2 flex justify-between items-center">
                <h1 class="font-bold text-xl text-gray-800">ที่อยู่ในการจัดส่งสินค้า</h1>
                {{-- ปุ่มเปิด Modal เพิ่มที่อยู่ใหม่ --}}
                <button onclick="modal_add_new.showModal()"
                    class="btn btn-sm btn-primary text-white shadow-sm hover:shadow-md transition-all">
                    + เพิ่มที่อยู่ใหม่
                </button>
            </div>

            {{-- Alert แสดงผล --}}
            @if (session('success'))
                <div class="alert alert-success mb-4 text-white shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            {{-- ใช้ x-data เพื่อจัดการสถานะการเลือกที่อยู่ (Active ID) --}}
            <div x-data="{ activeAddress: {{ $addresses->count() > 0 ? $addresses->first()->id : 'null' }} }">

                @if ($addresses->count() > 0)
                    @foreach ($addresses as $index => $address)
                        @php
                            $modalEditId = 'modal_edit_' . $address->id;
                        @endphp

                        {{-- การ์ดที่อยู่ --}}
                        <div class="border p-4 lg:p-5 rounded-lg mb-4 bg-white transition-all duration-300 ease-in-out relative"
                            :class="activeAddress === {{ $address->id }} ?
                                'border-emerald-500 ring-1 ring-emerald-500 bg-emerald-50/10' :
                                'border-gray-200 hover:border-emerald-300'">

                            {{-- Checkmark Icon --}}
                            <div x-show="activeAddress === {{ $address->id }}"
                                class="absolute top-4 right-4 text-emerald-600">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="w-6 h-6">
                                    <path fill-rule="evenodd"
                                        d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <div class="flex flex-col gap-3">
                                <div class="flex items-center gap-2">
                                    <span class="font-bold text-gray-800 text-lg">ที่อยู่ #{{ $index + 1 }}</span>
                                </div>

                                <div class="text-gray-600 text-sm lg:text-base space-y-1 pl-1 cursor-pointer"
                                    @click="activeAddress = {{ $address->id }}">
                                    <p><span class="font-semibold text-gray-700">ชื่อ-นามสกุล:</span>
                                        {{ $address->fullname }}</p>
                                    <p><span class="font-semibold text-gray-700">เบอร์โทรศัพท์:</span> {{ $address->phone }}
                                    </p>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="font-semibold text-gray-700">ที่อยู่:</span>
                                        <span>{{ $address->address_line1 }}</span>
                                        <span>{{ $address->address_line2 ? 'หมู่ ' . $address->address_line2 : '' }}</span>
                                        <span>
                                            ต.{{ $address->district->name_th ?? '-' }}
                                            อ.{{ $address->amphure->name_th ?? '-' }}
                                            จ.{{ $address->province->name_th ?? '-' }}
                                            {{ $address->zipcode }}
                                        </span>
                                    </div>
                                    @if ($address->note)
                                        <p
                                            class="text-orange-600 text-xs mt-2 bg-orange-50 p-2 rounded border border-orange-100 inline-block">
                                            <span class="font-bold">หมายเหตุ:</span> {{ $address->note }}
                                        </p>
                                    @endif
                                </div>

                                {{-- ปุ่ม Action --}}
                                <div class="flex flex-wrap items-center gap-2 mt-2 pt-3 border-t border-gray-100">
                                    <button @click="activeAddress = {{ $address->id }}" class="btn btn-sm btn-ghost gap-2"
                                        :class="activeAddress === {{ $address->id }} ?
                                            'text-emerald-600 font-bold bg-emerald-50' : 'text-gray-500'">
                                        <span
                                            x-text="activeAddress === {{ $address->id }} ? 'เลือกแล้ว' : 'เลือกที่อยู่นี้'"></span>
                                    </button>

                                    <div class="flex-grow"></div>

                                    {{-- ปุ่มแก้ไข --}}
                                    <button onclick="{{ $modalEditId }}.showModal()"
                                        class="btn btn-sm btn-outline text-blue-600 hover:bg-blue-50 hover:border-blue-600 border-gray-300">
                                        แก้ไข
                                    </button>

                                    {{-- ปุ่มลบ --}}
                                    <form action="{{ route('address.destroy', $address->id) }}" method="POST"
                                        onsubmit="return confirm('ยืนยันที่จะลบที่อยู่นี้?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="btn btn-sm btn-outline text-red-600 hover:bg-red-50 hover:border-red-600 border-gray-300">
                                            ลบ
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- ==================== MODAL แก้ไข (แยกตาม ID) ==================== --}}
                        {{-- ใช้ x-init เรียก loadEditData เพื่อโหลดข้อมูลอำเภอ/ตำบลให้เสร็จก่อนเลือกค่า --}}
                        <dialog id="{{ $modalEditId }}" class="modal modal-middle" x-data="addressDropdown()"
                            x-init="loadEditData('{{ $address->province_id }}', '{{ $address->amphure_id }}', '{{ $address->district_id }}')">

                            <div
                                class="modal-box w-11/12 max-w-4xl p-0 overflow-hidden bg-gray-50 flex flex-col max-h-[90vh]">
                                <div
                                    class="bg-white px-6 py-4 border-b flex justify-between items-center sticky top-0 z-10 flex-shrink-0">
                                    <h3 class="font-bold text-lg text-gray-800">แก้ไขที่อยู่จัดส่ง</h3>
                                    <form method="dialog">
                                        <button class="btn btn-sm btn-circle btn-ghost">✕</button>
                                    </form>
                                </div>

                                <div class="p-6 overflow-y-auto flex-grow">
                                    <form action="{{ route('address.update', $address->id) }}" method="POST"
                                        class="flex flex-col gap-6">
                                        @csrf
                                        @method('PUT')

                                        <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-sm">
                                            <h4
                                                class="text-sm font-bold text-emerald-600 uppercase mb-4 tracking-wide border-b pb-2">
                                                1. ข้อมูลผู้รับ</h4>
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div class="form-control w-full">
                                                    <label class="label pt-0"><span
                                                            class="label-text font-medium text-gray-700">ชื่อ-นามสกุล</span></label>
                                                    <input type="text" name="fullname" value="{{ $address->fullname }}"
                                                        class="input input-bordered w-full focus:input-primary" required />
                                                </div>
                                                <div class="form-control w-full">
                                                    <label class="label pt-0"><span
                                                            class="label-text font-medium text-gray-700">เบอร์โทรศัพท์</span></label>
                                                    <input type="tel" name="phone" value="{{ $address->phone }}"
                                                        class="input input-bordered w-full focus:input-primary" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-sm">
                                            <h4
                                                class="text-sm font-bold text-emerald-600 uppercase mb-4 tracking-wide border-b pb-2">
                                                2. รายละเอียดที่อยู่</h4>
                                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                                <div class="form-control md:col-span-3">
                                                    <label class="label pt-0"><span
                                                            class="label-text font-medium text-gray-700">บ้านเลขที่ /
                                                            ถนน</span></label>
                                                    <input type="text" name="address_line1"
                                                        value="{{ $address->address_line1 }}"
                                                        class="input input-bordered w-full focus:input-primary" required />
                                                </div>
                                                <div class="form-control md:col-span-1">
                                                    <label class="label pt-0"><span
                                                            class="label-text font-medium text-gray-700">หมู่ที่</span></label>
                                                    <input type="text" name="address_line2"
                                                        value="{{ $address->address_line2 }}"
                                                        class="input input-bordered w-full focus:input-primary" />
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                                                <div class="form-control">
                                                    <label class="label pt-0"><span
                                                            class="label-text font-medium text-gray-700">จังหวัด</span></label>
                                                    <select name="province_id" x-model="selectedProvince"
                                                        @change="fetchAmphures()"
                                                        class="select select-bordered w-full focus:select-primary"
                                                        required>
                                                        <option value="">-- เลือกจังหวัด --</option>
                                                        @foreach ($provinces as $province)
                                                            <option value="{{ $province->id }}">{{ $province->name_th }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-control">
                                                    <label class="label pt-0"><span
                                                            class="label-text font-medium text-gray-700">อำเภอ/เขต</span></label>
                                                    <select name="amphure_id" x-model="selectedAmphure"
                                                        @change="fetchDistricts()" :disabled="!selectedProvince"
                                                        class="select select-bordered w-full focus:select-primary disabled:bg-gray-100"
                                                        required>
                                                        <option value="">-- เลือกอำเภอ --</option>
                                                        <template x-for="amphure in amphures" :key="amphure.id">
                                                            <option :value="amphure.id" x-text="amphure.name_th">
                                                            </option>
                                                        </template>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <div class="form-control">
                                                    <label class="label pt-0"><span
                                                            class="label-text font-medium text-gray-700">ตำบล/แขวง</span></label>
                                                    <select name="district_id" x-model="selectedDistrict"
                                                        :disabled="!selectedAmphure"
                                                        class="select select-bordered w-full focus:select-primary disabled:bg-gray-100"
                                                        required>
                                                        <option value="">-- เลือกตำบล --</option>
                                                        <template x-for="district in districts" :key="district.id">
                                                            <option :value="district.id" x-text="district.name_th">
                                                            </option>
                                                        </template>
                                                    </select>
                                                </div>
                                                <div class="form-control">
                                                    <label class="label pt-0"><span
                                                            class="label-text font-medium text-gray-700">รหัสไปรษณีย์</span></label>
                                                    <input type="text" name="zipcode" :value="getZipCode()" readonly
                                                        class="input input-bordered w-full focus:input-primary bg-gray-100 font-bold text-gray-600"
                                                        required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-sm">
                                            <div class="form-control w-full">
                                                <label class="label pt-0"><span
                                                        class="label-text font-medium text-gray-700">หมายเหตุ</span></label>
                                                <textarea name="note" class="textarea textarea-bordered h-24 focus:textarea-primary">{{ $address->note }}</textarea>
                                            </div>
                                        </div>

                                        <button type="submit" class="hidden"
                                            id="btn_submit_edit_{{ $address->id }}"></button>
                                    </form>
                                </div>

                                <div
                                    class="modal-action border-t bg-white px-6 py-4 m-0 flex justify-end gap-3 sticky bottom-0 z-10 flex-shrink-0">
                                    <form method="dialog">
                                        <button class="btn btn-ghost hover:bg-gray-100 text-gray-600">ยกเลิก</button>
                                    </form>
                                    <button
                                        onclick="document.getElementById('btn_submit_edit_{{ $address->id }}').click()"
                                        class="btn bg-emerald-600 hover:bg-emerald-700 text-white border-none min-w-[140px] shadow-md">
                                        อัปเดตข้อมูล
                                    </button>
                                </div>
                            </div>
                        </dialog>
                    @endforeach
                @else
                    <div class="text-center py-10 bg-gray-50 rounded-lg border border-dashed border-gray-300">
                        <p class="text-gray-500 mb-4">ยังไม่มีข้อมูลที่อยู่จัดส่ง</p>
                        <button onclick="modal_add_new.showModal()"
                            class="btn btn-outline btn-sm">เพิ่มที่อยู่จัดส่งตอนนี้</button>
                    </div>
                @endif
            </div>
        </div>

        {{-- ==================== MODAL ฟอร์มเพิ่มที่อยู่ใหม่ ==================== --}}
        <dialog id="modal_add_new" class="modal modal-middle" x-data="addressDropdown()">
            <div class="modal-box w-11/12 max-w-4xl p-0 overflow-hidden bg-gray-50 flex flex-col max-h-[90vh]">
                <div class="bg-white px-6 py-4 border-b flex justify-between items-center sticky top-0 z-10 flex-shrink-0">
                    <h3 class="font-bold text-lg text-gray-800">เพิ่มที่อยู่จัดส่งใหม่</h3>
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost">✕</button>
                    </form>
                </div>

                <div class="p-6 overflow-y-auto flex-grow">
                    <form action="/update-address" method="POST" class="flex flex-col gap-6" id="addressForm">
                        @csrf
                        {{-- (เนื้อหาฟอร์มเพิ่มใหม่ เหมือนเดิม) --}}
                        <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-sm">
                            <h4 class="text-sm font-bold text-emerald-600 uppercase mb-4 tracking-wide border-b pb-2">1.
                                ข้อมูลผู้รับ</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="form-control w-full">
                                    <label class="label pt-0"><span
                                            class="label-text font-medium text-gray-700">ชื่อ-นามสกุล <span
                                                class="text-red-500">*</span></span></label>
                                    <input type="text" name="fullname" placeholder="ระบุชื่อผู้รับสินค้า"
                                        class="input input-bordered w-full focus:input-primary" required />
                                </div>
                                <div class="form-control w-full">
                                    <label class="label pt-0"><span
                                            class="label-text font-medium text-gray-700">เบอร์โทรศัพท์ <span
                                                class="text-red-500">*</span></span></label>
                                    <input type="tel" name="phone" placeholder="เช่น 0812345678"
                                        class="input input-bordered w-full focus:input-primary" required />
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-sm">
                            <h4 class="text-sm font-bold text-emerald-600 uppercase mb-4 tracking-wide border-b pb-2">2.
                                รายละเอียดที่อยู่</h4>
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                                <div class="form-control md:col-span-3">
                                    <label class="label pt-0"><span
                                            class="label-text font-medium text-gray-700">บ้านเลขที่ / ถนน <span
                                                class="text-red-500">*</span></span></label>
                                    <input type="text" name="address_line1" placeholder="เช่น 123/45 หมู่บ้าน..."
                                        class="input input-bordered w-full focus:input-primary" required />
                                </div>
                                <div class="form-control md:col-span-1">
                                    <label class="label pt-0"><span
                                            class="label-text font-medium text-gray-700">หมู่ที่</span></label>
                                    <input type="text" name="address_line2" placeholder="-"
                                        class="input input-bordered w-full focus:input-primary" />
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                                <div class="form-control">
                                    <label class="label pt-0"><span class="label-text font-medium text-gray-700">จังหวัด
                                            <span class="text-red-500">*</span></span></label>
                                    <select name="province_id" x-model="selectedProvince" @change="fetchAmphures()"
                                        class="select select-bordered w-full focus:select-primary" required>
                                        <option value="">-- เลือกจังหวัด --</option>
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->id }}">{{ $province->name_th }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-control">
                                    <label class="label pt-0"><span class="label-text font-medium text-gray-700">อำเภอ/เขต
                                            <span class="text-red-500">*</span></span></label>
                                    <select name="amphure_id" x-model="selectedAmphure" @change="fetchDistricts()"
                                        :disabled="!selectedProvince"
                                        class="select select-bordered w-full focus:select-primary disabled:bg-gray-100"
                                        required>
                                        <option value="">-- เลือกอำเภอ --</option>
                                        <template x-for="amphure in amphures" :key="amphure.id">
                                            <option :value="amphure.id" x-text="amphure.name_th"></option>
                                        </template>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="form-control">
                                    <label class="label pt-0"><span class="label-text font-medium text-gray-700">ตำบล/แขวง
                                            <span class="text-red-500">*</span></span></label>
                                    <select name="district_id" x-model="selectedDistrict" :disabled="!selectedAmphure"
                                        class="select select-bordered w-full focus:select-primary disabled:bg-gray-100"
                                        required>
                                        <option value="">-- เลือกตำบล --</option>
                                        <template x-for="district in districts" :key="district.id">
                                            <option :value="district.id" x-text="district.name_th"></option>
                                        </template>
                                    </select>
                                </div>
                                <div class="form-control">
                                    <label class="label pt-0"><span
                                            class="label-text font-medium text-gray-700">รหัสไปรษณีย์</span></label>
                                    <input type="text" name="zipcode" :value="getZipCode()" readonly
                                        class="input input-bordered w-full focus:input-primary bg-gray-100 font-bold text-gray-600"
                                        required />
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-5 rounded-lg border border-gray-200 shadow-sm">
                            <div class="form-control w-full">
                                <label class="label pt-0"><span
                                        class="label-text font-medium text-gray-700">หมายเหตุ</span></label>
                                <textarea name="note" class="textarea textarea-bordered h-24 focus:textarea-primary"
                                    placeholder="เช่น ฝากไว้ที่ป้อมยาม"></textarea>
                            </div>
                        </div>
                    </form>
                </div>

                <div
                    class="modal-action border-t bg-white px-6 py-4 m-0 flex justify-end gap-3 sticky bottom-0 z-10 flex-shrink-0">
                    <form method="dialog">
                        <button class="btn btn-ghost hover:bg-gray-100 text-gray-600">ยกเลิก</button>
                    </form>
                    <button onclick="document.getElementById('addressForm').submit()"
                        class="btn bg-emerald-600 hover:bg-emerald-700 text-white border-none min-w-[140px] shadow-md">
                        บันทึกข้อมูล
                    </button>
                </div>
            </div>
        </dialog>

        {{-- ==================== รายการสินค้า & ชำระเงิน (คงเดิม) ==================== --}}
        <div class="border border-gray-200 p-5 rounded-lg shadow-sm mb-6 bg-white">
            <h1 class="font-bold text-xl border-b border-gray-200 pb-4 mb-4 text-gray-800">สั่งซื้อสินค้าแล้ว</h1>
            <div class="space-y-4">
                <p class="text-gray-500 text-center py-4 bg-gray-50 rounded border border-dashed">... รายการสินค้า ...</p>
            </div>
        </div>

        <div class="border border-gray-200 p-5 rounded-lg shadow-sm mb-6 bg-white">
            <h1 class="font-bold text-xl border-b border-gray-200 pb-4 mb-4 text-gray-800">วิธีชำระเงิน</h1>
            <div class="flex flex-col lg:flex-row lg:gap-8">
                <div class="flex-1">
                    <select class="select select-bordered w-full text-base mb-4">
                        <option disabled selected>เลือกวิธีชำระเงิน</option>
                        <option>ชำระเงินปลายทาง</option>
                        <option>โอนผ่านธนาคาร</option>
                        <option>บัตรเครดิต/เดบิต</option>
                    </select>
                    <div
                        class="border border-gray-200 rounded-lg p-4 bg-gray-50 flex items-center gap-4 w-full sm:w-max mb-6 lg:mb-0">
                        <input type="checkbox" class="checkbox checkbox-primary" />
                        <div class="w-32 h-auto flex items-center justify-center bg-white p-2 border rounded">
                            <span class="text-xs">QR Code</span>
                        </div>
                        <span class="text-sm font-medium text-gray-600">ชำระผ่านพร้อมเพย์</span>
                    </div>
                </div>
                <div class="w-full lg:w-96 flex flex-col gap-4 mt-4 lg:mt-0">
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <div class="text-lg font-bold mb-3 border-b border-gray-200 pb-2">สรุปยอดชำระ</div>
                        <div class="space-y-2 text-base">
                            <div class="flex justify-between"><span class="text-gray-600">รวมการสั่งซื้อ</span><span
                                    class="text-gray-900 font-medium">$780</span></div>
                            <div class="flex justify-between"><span class="text-gray-600">การจัดส่ง</span><span
                                    class="text-gray-900 font-medium">$10</span></div>
                            <div class="flex justify-between text-green-600"><span>ส่วนลด</span><span>-$50</span></div>
                            <div class="flex justify-between border-t border-gray-300 pt-3 mt-2 text-lg font-bold"><span
                                    class="text-gray-800">ยอดชำระทั้งหมด</span><span class="text-red-500">$740</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-col gap-3">
                        <a href="/qr" class="btn btn-primary w-full text-lg shadow-md hover:shadow-lg">ชำระเงิน</a>
                        <a href="/cart"
                            class="btn btn-ghost w-full text-gray-500 hover:text-gray-700">ยกเลิกคำสั่งซื้อ</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Script สำหรับ Dropdown ที่อยู่ (Update ใหม่) --}}
    <script>
        function addressDropdown() {
            return {
                selectedProvince: '',
                selectedAmphure: '',
                selectedDistrict: '',
                amphures: [],
                districts: [],

                // ฟังก์ชันพิเศษ: โหลดข้อมูลอำเภอ/ตำบลมารอก่อน แล้วค่อยเลือกค่า (สำหรับหน้าแก้ไข)
                loadEditData(provinceId, amphureId, districtId) {
                    this.selectedProvince = provinceId;

                    // 1. ดึงข้อมูลอำเภอ
                    fetch(`/api/amphures/${provinceId}`)
                        .then(response => response.json())
                        .then(data => {
                            this.amphures = data;
                            // ข้อมูลมาแล้ว -> เลือกอำเภอ
                            this.selectedAmphure = amphureId;

                            // 2. ดึงข้อมูลตำบล (ถ้ามีอำเภอ)
                            if (amphureId) {
                                fetch(`/api/districts/${amphureId}`)
                                    .then(response => response.json())
                                    .then(data => {
                                        this.districts = data;
                                        // ข้อมูลมาแล้ว -> เลือกตำบล
                                        this.selectedDistrict = districtId;
                                    });
                            }
                        });
                },

                fetchAmphures() {
                    this.selectedAmphure = '';
                    this.selectedDistrict = '';
                    this.amphures = [];
                    this.districts = [];

                    if (this.selectedProvince) {
                        fetch(`/api/amphures/${this.selectedProvince}`)
                            .then(response => response.json())
                            .then(data => {
                                this.amphures = data;
                            })
                            .catch(error => console.error('Error fetching amphures:', error));
                    }
                },

                fetchDistricts() {
                    this.selectedDistrict = '';
                    this.districts = [];

                    if (this.selectedAmphure) {
                        fetch(`/api/districts/${this.selectedAmphure}`)
                            .then(response => response.json())
                            .then(data => {
                                this.districts = data;
                            })
                            .catch(error => console.error('Error fetching districts:', error));
                    }
                },

                getZipCode() {
                    if (!this.selectedDistrict || this.districts.length === 0) return '';
                    const district = this.districts.find(d => d.id == this.selectedDistrict);
                    return district ? (district.zip_code || district.zipcode) : '';
                }
            }
        }
    </script>
@endsection
