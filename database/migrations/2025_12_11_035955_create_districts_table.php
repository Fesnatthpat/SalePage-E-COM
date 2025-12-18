<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('districts', function (Blueprint $table) {
            // ใช้ unsignedBigInteger และ primary() เพื่อรองรับ ID แบบกำหนดเอง (เช่น 100101) ตามไฟล์ SQL
            $table->unsignedBigInteger('id')->primary();

            $table->integer('zip_code')->index();
            $table->string('name_th', 150);
            $table->string('name_en', 150);

            // Foreign Keys
            $table->unsignedBigInteger('amphure_id')->default(0)->index();
            $table->unsignedBigInteger('province_id')->index();

            $table->timestamps();

            // Constraints
            $table->foreign('amphure_id')
                ->references('id')
                ->on('amphures')
                ->cascadeOnDelete();

            $table->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
