<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'ord_id'; // ระบุ PK ให้ตรงกับตาราง orders

    protected $guarded = [];

    public function details()
    {
        return $this->hasMany(OrderDetail::class, 'ord_id', 'ord_id');
    }
}