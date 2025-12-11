<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id(); // PK, Auto Increment
            $table->string('code', 2)->index(); // code varchar(2)
            $table->string('name_th', 150);
            $table->string('name_en', 150);
            $table->integer('geography_id')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};