<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show($id)
    {
        // 1. ดึงข้อมูลสินค้า 1 ชิ้น (ตาม ID ที่ส่งมา)
        $product = DB::table('product')
            ->select(
                'product.*',               
                'brand.brand_name',        
                'promotion.prom_price',
                'product.pd_price',
                'promotion.prom_price_total'
            )
            ->leftJoin('promotion', 'product.pd_id', '=', 'promotion.promotion_id')
            ->leftJoin('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->where('product.pd_id', $id)  
            ->first(); // ดึงแค่ชิ้นเดียว

        // 2. ถ้าหาไม่เจอ ให้กลับหน้าแรก
        if (!$product) {
            return redirect('/')->with('error', 'ไม่พบสินค้านี้');
        }

        // 3. ส่งข้อมูลไปที่หน้า View
        return view('product', compact('product'));
    }
}