<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    use HasFactory;

    protected $table = 'delivery_addresses';

    protected $fillable = [
        'fullname',
        'phone',
        'address_line1',
        'address_line2',
        'province_id',
        'amphure_id',
        'district_id',
        'zipcode',
        'note',
    ];

    // --- เพิ่ม Relation เพื่อดึงชื่อไทย ---
    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function amphure()
    {
        return $this->belongsTo(Amphure::class, 'amphure_id');
    }

    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
    }
}