<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

// (เผื่อใช้ในอนาคต)

class HomeController extends Controller
{
    public function index()
    {
        // ใช้ groupBy เพื่อรวมสินค้าที่ซ้ำกัน และใช้ MAX เลือกราคาโปรฯ
        $recommendedProducts = DB::table('product_salepage')
            ->select(
                'product.pd_id',
                'product.pd_code',
                'product.pd_name',
                'product.pd_price',
                'product.pd_img',
                // เลือกราคาโปรโมชั่นที่สูงที่สุด (เพื่อเลี่ยงค่า 0 หรือค่าว่าง)
                DB::raw('MAX(promotion.prom_price_total) as prom_price_total')
            )
            ->join('product', 'product_salepage.pd_id', '=', 'product.pd_id')
            // Join ตารางโปรโมชั่นด้วย pd_id ให้ถูกต้อง
            ->leftJoin('promotion', 'product.pd_id', '=', 'promotion.pd_id')
            ->leftJoin('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->where('product.pd_status', 1)

            // --- จัดกลุ่มข้อมูลเพื่อไม่ให้สินค้าแสดงซ้ำ ---
            ->groupBy(
                'product.pd_id',
                'product.pd_code',
                'product.pd_name',
                'product.pd_price',
                'product.pd_img'
            )
            // ----------------------------------------

            ->orderBy('product.pd_id', 'desc')
            ->limit(4)
            ->get();

        return view('index', compact('recommendedProducts'));
    }
}
