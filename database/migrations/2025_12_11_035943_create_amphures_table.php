<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('amphures', function (Blueprint $table) {
            $table->id(); // PK, Auto Increment
            $table->string('code', 4)->index();
            $table->string('name_th', 150);
            $table->string('name_en', 150);

            // Foreign Key
            $table->unsignedBigInteger('province_id')->default(0)->index();

            $table->timestamps();

            // Constraint
            $table->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('amphures');
    }
};
