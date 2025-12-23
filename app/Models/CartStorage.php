<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartStorage extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'cart_data'];

    // [ต้องมีบรรทัดนี้] เพื่อแปลง JSON เป็น Array อัตโนมัติ
    protected $casts = [
        'cart_data' => 'array',
    ];
}