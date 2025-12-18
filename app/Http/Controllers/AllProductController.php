<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllProductController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('product_salepage')
            ->select(
                'product.pd_id',
                'product.pd_name',
                'product.pd_price',
                'product.pd_img',
                'promotion.prom_price_total',
                // ''
            )
            ->join('product', 'product_salepage.pd_id', '=', 'product.pd_id')
            ->leftJoin('promotion', 'product.pd_id', '=', 'promotion.promotion_id')
            ->where('product.pd_status', 1);

        // ค้นหาชื่อสินค้า
        if ($request->has('search') && $request->search != '') {
            $query->where('product.pd_name', 'like', '%'.$request->search.'%');
        }

        // เรียงลำดับจากใหม่ไปเก่า
        $products = $query->orderBy('product.pd_id', 'desc')->paginate(12);

        // หมวดหมู่จำลอง (เพื่อให้ Sidebar ไม่ Error)
        $categories = ['เสื้อยืด', 'กางเกง', 'รองเท้า', 'หมวก'];

        return view('allproducts', compact('products', 'categories'));
    }
}
