<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        // dd('Reached HomeController index method');
        // ดึงเฉพาะข้อมูลที่จำเป็น: รหัส, ชื่อ, ราคา, รูป, (และราคาเต็มเผื่อไว้คำนวณส่วนลด)
        // หมายเหตุ: ตรวจสอบว่าใน DB ของคุณมีคอลัมน์ 'pd_original_price' หรือไม่ ถ้าไม่มีให้ลบออกจาก select
        // $recommendedProducts = DB::table('product')
        //     ->select('pd_id', 'pd_name', 'pd_price', 'pd_img')
        //     ->where('pd_status', 1) // เลือกเฉพาะที่เปิดขาย
        //     ->orderBy('pd_id', 'desc') // สินค้าใหม่สุด
        //     ->limit(8)
        //     ->get();
        $recommendedProducts = DB::table('product_salepage')
            ->select('product.pd_id',
                'product.pd_code',
                'product.pd_name',
                'product.pd_type',
                'product.pd_status',
                'product.pd_price',
                'promotion.prom_price_total',
                'product.pd_img')
            ->join('product', 'product_salepage.pd_id', '=', 'product.pd_id')
            ->leftJoin('promotion', 'product.pd_id', '=', 'promotion.promotion_id')
            ->leftJoin('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->where('product.pd_status', 1) // เลือกเฉพาะที่เปิดขาย และไม่เอาสินค้ารวมชุด
            // ->where('product.pd_type', 0) // เอาเฉพาะสินค้าปกติ ไม่เอาสินค้ารวมชุด
            ->orderBy('product.pd_id', 'desc') // สินค้าใหม่สุด
            ->limit(4)
            ->get();

        // !!! แทรกบรรทัดนี้เพื่อตรวจสอบข้อมูล !!!
        // dd($recommendedProducts);

        // ส่งตัวแปร $recommendedProducts ไปที่ View 'index'
        return view('index', compact('recommendedProducts'));
    }
}
