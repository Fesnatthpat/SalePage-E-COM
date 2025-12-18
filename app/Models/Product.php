<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // 1. ระบุชื่อตารางให้ตรงกับฐานข้อมูล (ของคุณน่าจะเป็น 'product')
    protected $table = 'product';

    // 2. ระบุ Primary Key (ของคุณใช้ 'pd_id' แทน 'id')
    protected $primaryKey = 'pd_id';

    // 3. ปิด Timestamp หากตารางไม่มี updated_at, created_at
    // public $timestamps = false;

    // 4. อนุญาตให้แก้ไขข้อมูลได้ (ถ้าจำเป็น)
    protected $guarded = [];
}
