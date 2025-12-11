<?php

namespace App\Http\Controllers;

use App\Models\Amphure; // สำคัญมาก: ต้องมีบรรทัดนี้เพื่อรับค่าจากฟอร์ม
use App\Models\DeliveryAddress;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\Request; // สำคัญ: เรียกใช้ Model ที่อยู่จัดส่ง

class AddressController extends Controller
{
    public function index()
    {
        // 1. ดึงข้อมูลจังหวัด (สำหรับ Dropdown)
        $provinces = Province::orderBy('name_th', 'asc')->get();

        // 2. ดึงข้อมูลที่อยู่ทั้งหมด (สำคัญ! บรรทัดนี้คือตัวแก้ปัญหา)
        // ต้อง use App\Models\DeliveryAddress; ด้านบนด้วยนะครับ
        $addresses = DeliveryAddress::orderBy('created_at', 'desc')->get();

        // 3. ส่งตัวแปร $provinces และ $addresses ไปที่หน้า View
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

    // 4. บันทึกข้อมูล (ฟังก์ชันที่คุณขาดหายไป)
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

        return back()->with('success', 'บันทึกข้อมูลเรียบร้อยแล้ว!');
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

        $address = DeliveryAddress::findOrFail($id);
        $address->update($request->all());

        return back()->with('success', 'แก้ไขที่อยู่เรียบร้อยแล้ว!');
    }

    // 6. ลบข้อมูล
    public function destroy($id)
    {
        $address = DeliveryAddress::findOrFail($id);
        $address->delete();

        return back()->with('success', 'ลบที่อยู่เรียบร้อยแล้ว!');
    }
}
