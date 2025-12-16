<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // จำเป็นต้องมี

class HomeController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลจากตาราง product และ join กับ category
        $recommendedProducts = DB::table('product')
            ->leftJoin('category', 'product.ctg_id', '=', 'category.ctg_id')
            ->select('product.*', 'category.ctg_name') // เลือกฟิลด์ที่ต้องการ
            ->where('product.pd_status', 1) // เลือกเฉพาะที่เปิดขาย
            ->orderBy('product.pd_id', 'desc') // สินค้าใหม่สุดขึ้นก่อน
            ->limit(8) // ดึงมา 8 ชิ้น
            ->get();

        // ส่งตัวแปรไปที่ View
        return view('index', compact('recommendedProducts'));
    }
}