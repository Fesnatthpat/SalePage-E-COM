<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = DB::table('product')
            ->select(
                'product.*',
                'brand.brand_name',
                // [เพิ่ม] ดึงราคาก่อนลดและส่วนลด
                'product.pd_full_price',
                'product_salepage.pd_sp_discount'
            )
            // [แก้ไข] เปลี่ยนมา Join ตาราง product_salepage แทน promotion
            ->leftJoin('product_salepage', function ($join) {
                $join->on('product.pd_id', '=', 'product_salepage.pd_id')
                    ->where('product_salepage.pd_sp_active', 1);
            })
            ->leftJoin('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->where('product.pd_id', $id)
            ->first();

        // dd($product);

        if (! $product) {
            return redirect('/')->with('error', 'ไม่พบสินค้านี้');
        }

        return view('product', compact('product'));
    }
}
