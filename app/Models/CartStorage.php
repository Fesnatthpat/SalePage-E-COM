<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartStorage extends Model
{
    use HasFactory;

    // จำเป็นต้องกำหนด $fillable เพื่อให้สามารถบันทึกข้อมูล user_id และ cart_data ได้
    protected $fillable = [
        'user_id',
        'cart_data'
    ];
}