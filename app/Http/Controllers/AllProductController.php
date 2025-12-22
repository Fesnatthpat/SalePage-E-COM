<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllProductController extends Controller
{
    public function index(Request $request)
    {
        // [แก้ไข 1] เริ่มต้น Query จากตาราง product_salepage (เหมือนหน้า Index)
        $query = DB::table('product_salepage')
            ->select(
                'product.pd_id',
                'product.pd_code', // ควรดึง code มาด้วยเผื่อใช้
                'product.pd_name',
                'product.pd_img',
                'product.pd_price',      // ราคาขายปัจจุบัน
                'product.pd_full_price', // ราคาก่อนลด
                'product_salepage.pd_sp_discount' // ส่วนลด
            )
            // [แก้ไข 2] Join ไปหาตาราง product (สินค้า)
            ->join('product', 'product_salepage.pd_id', '=', 'product.pd_id')
            
            // [แก้ไข 3] กรองเฉพาะรายการที่ Active ใน salepage และ product ต้องเปิดขาย
            ->where('product_salepage.pd_sp_active', 1)
            ->where('product.pd_status', 1);

        // --- Search Logic ---
        if ($request->has('search') && $request->search != '') {
            $query->where('product.pd_name', 'like', '%' . $request->search . '%');
        }

        // --- Category Logic (ถ้ามี) ---
        if ($request->has('category') && $request->category != '') {
             // $query->where(...) 
        }

        // [แก้ไข 4] Group By ตามจำนวน field ที่ Select มาให้ครบ
        $products = $query->groupBy(
            'product.pd_id',
            'product.pd_code',
            'product.pd_name',
            'product.pd_img',
            'product.pd_price',
            'product.pd_full_price',
            'product_salepage.pd_sp_discount'
        )
        ->orderBy('product.pd_id', 'desc')
        ->paginate(12);

        // ดึง Category (ตัวอย่าง)
        $categories = []; 

        return view('allproducts', compact('products', 'categories'));
    }
}