<?php

namespace App\Http\Controllers;

use App\Models\Amphure;
use App\Models\DeliveryAddress;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // [สำคัญ] ต้องมีเพื่อเรียกใช้ Auth::id()

class AddressController extends Controller
{
    // 1. แสดงหน้าฟอร์ม
    public function index()
    {
        // 1.1 ดึงข้อมูลจังหวัด (สำหรับ Dropdown)
        $provinces = Province::orderBy('name_th', 'asc')->get();

        // 1.2 ดึงข้อมูลที่อยู่ทั้งหมด "เฉพาะของผู้ใช้ที่ล็อกอินอยู่"
        // ใช้ where('user_id', Auth::id()) เพื่อกรอง
        $addresses = DeliveryAddress::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        // 1.3 ส่งตัวแปร $provinces และ $addresses ไปที่หน้า View
        return view('payment', compact('provinces', 'addresses'));
    }

    // 2. API: ดึงอำเภอตาม ID จังหวัด
    public function getAmphures($province_id)
    {
        $amphures = Amphure::where('province_id', $province_id)
            ->orderBy('name_th', 'asc')
            ->get();

        return response()->json($amphures);
    }

    // 3. API: ดึงตำบลตาม ID อำเภอ
    public function getDistricts($amphure_id)
    {
        $districts = District::where('amphure_id', $amphure_id)
            ->orderBy('name_th', 'asc')
            ->get();

        return response()->json($districts);
    }

    // 4. บันทึกข้อมูลที่อยู่ใหม่
    public function saveAddress(Request $request)
    {
        // ตรวจสอบข้อมูล
        $request->validate([
            'fullname' => 'required',
            'phone' => 'required',
            'address_line1' => 'required',
            'province_id' => 'required',
            'amphure_id' => 'required',
            'district_id' => 'required',
            'zipcode' => 'required',
        ]);

        // บันทึกลงฐานข้อมูล
        DeliveryAddress::create([
            'user_id' => Auth::id(), // [สำคัญ] ระบุว่าที่อยู่นี้เป็นของใคร
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'address_line1' => $request->address_line1,
            'address_line2' => $request->address_line2,
            'province_id' => $request->province_id,
            'amphure_id' => $request->amphure_id,
            'district_id' => $request->district_id,
            'zipcode' => $request->zipcode,
            'note' => $request->note,
        ]);

        return back()->with('success', 'บันทึกที่อยู่จัดส่งเรียบร้อยแล้ว!');
    }

    // 5. อัปเดตข้อมูล (แก้ไข)
    public function update(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'required',
            'phone' => 'required',
            'address_line1' => 'required',
            'province_id' => 'required',
            'amphure_id' => 'required',
            'district_id' => 'required',
            'zipcode' => 'required',
        ]);

        // ค้นหาที่อยู่ โดยต้องเป็นของ User คนนี้เท่านั้น (ป้องกันการแอบแก้ของคนอื่น)
        $address = DeliveryAddress::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $address->update([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'address_line1' => $request->address_line1,
            'address_line2' => $request->address_line2,
            'province_id' => $request->province_id,
            'amphure_id' => $request->amphure_id,
            'district_id' => $request->district_id,
            'zipcode' => $request->zipcode,
            'note' => $request->note,
        ]);

        return back()->with('success', 'แก้ไขที่อยู่เรียบร้อยแล้ว!');
    }

    // 6. ลบข้อมูล
    public function destroy($id)
    {
        // ค้นหาที่อยู่ โดยต้องเป็นของ User คนนี้เท่านั้น
        $address = DeliveryAddress::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $address->delete();

        return back()->with('success', 'ลบที่อยู่เรียบร้อยแล้ว!');
    }
}