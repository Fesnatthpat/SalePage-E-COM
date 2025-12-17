<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllProductController extends Controller
{
    public function index()
    {
        // Query ข้อมูลสินค้า
        $products = DB::table('product_salepage')
            ->select(
                'product.pd_id',
                'product.pd_name',
                'product.pd_price',
                'product.pd_img',
                'promotion.prom_price',
                'promotion.prom_price_total'
            
            )
            
            ->join('product', 'product_salepage.pd_id', '=', 'product.pd_id')
            ->leftJoin('promotion', 'product.pd_id', '=', 'promotion.promotion_id')
            ->where('product.pd_status', 1) // เลือกเฉพาะที่เปิดขาย
            // ->where('product.pd_type', 1) // เอาเฉพาะสินค้าปกติ ไม่เอาสินค้ารวมชุด 
            ->orderBy('product.pd_id', 'desc')
            ->paginate(12);
            
            // !!! แทรกบรรทัดนี้เพื่อตรวจสอบข้อมูล !!!
            // dd($products);
            

        $categories = ['เสื้อยืด', 'กางเกง', 'รองเท้า', 'หมวก'];

        return view('allproducts', compact('products', 'categories'));
    }
}