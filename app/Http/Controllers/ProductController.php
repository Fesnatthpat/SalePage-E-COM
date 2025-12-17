<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = DB::table('product')
            ->select(
                'product.*',               
                'brand.brand_name',        
                'promotion.prom_price_total'
            )
            ->leftJoin('promotion', 'product.pd_id', '=', 'promotion.promotion_id')
            ->leftJoin('brand', 'product.brand_id', '=', 'brand.brand_id')
            ->where('product.pd_id', $id)  
            ->first();

        if (!$product) {
            return redirect('/')->with('error', 'ไม่พบสินค้านี้');
        }

        return view('product', compact('product'));
    }
}