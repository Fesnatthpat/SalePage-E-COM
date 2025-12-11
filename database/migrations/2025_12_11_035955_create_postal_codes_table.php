<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// เปลี่ยนเป็น return new class extends Migration (Anonymous Class)
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('postal_codes', function (Blueprint $table) {
            $table->id(); // ใช้ id() แทน integer('id')->primary() เพื่อความง่ายและมาตรฐาน
            $table->string('place', 255)->nullable();
            $table->string('province', 255)->nullable();
            $table->string('amphoe', 255)->nullable();
            $table->string('postal_code', 255)->nullable();
            $table->text('note')->nullable();
            $table->integer('province_id')->nullable()->index();
            $table->integer('amphure_id')->nullable()->index();

            // ลบ $table->primary('id'); ออกเพราะใช้ $table->id() แล้ว
            $table->index('postal_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postal_codes');
    }
};
