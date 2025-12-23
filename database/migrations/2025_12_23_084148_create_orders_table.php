<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. ตาราง ORDERS
        Schema::create('orders', function (Blueprint $table) {
            $table->id('ord_id'); // Primary Key ชื่อ ord_id
            $table->string('ord_code')->unique(); // เลขที่ใบสั่งซื้อ
            $table->unsignedBigInteger('user_id');

            // ข้อมูลตัวเลข
            $table->decimal('total_price', 10, 2)->default(0); // ราคาสินค้ารวม
            $table->decimal('shipping_cost', 10, 2)->default(0); // ค่าส่ง
            $table->decimal('total_discount', 10, 2)->default(0); // ส่วนลดรวม
            $table->decimal('net_amount', 10, 2)->default(0); // ยอดสุทธิ (ต้องจ่ายจริง)

            // ข้อมูลสถานะและวันที่
            $table->timestamp('ord_date')->useCurrent(); // วันที่สั่งซื้อ
            $table->integer('status_id')->default(1); // 1=รอชำระ, 2=ชำระแล้ว (สมมติ)

            // ข้อมูลจัดส่ง (Snapshot)
            $table->string('shipping_name');
            $table->string('shipping_phone');
            $table->text('shipping_address'); // เก็บที่อยู่เต็มๆ
            $table->string('tracking_number')->nullable();

            $table->timestamps(); // updated_at (created_at จะไม่ได้ใช้เพราะมี ord_date แล้ว)
        });

        // 2. ตาราง ORDER_DETAIL
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id('ordd_id'); // Primary Key ชื่อ ordd_id
            $table->unsignedBigInteger('ord_id');
            $table->unsignedBigInteger('user_id'); // ตามที่คุณระบุ
            $table->unsignedBigInteger('pd_id');

            $table->decimal('pd_price', 10, 2); // ราคาต่อชิ้น
            $table->integer('ordd_count'); // จำนวน
            $table->decimal('pd_sp_discount', 10, 2)->default(0); // ส่วนลดต่อชิ้น

            $table->timestamp('ordd_create_date')->useCurrent();
            $table->timestamps();

            // FK
            $table->foreign('ord_id')->references('ord_id')->on('orders')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_detail');
        Schema::dropIfExists('orders');
    }
};
