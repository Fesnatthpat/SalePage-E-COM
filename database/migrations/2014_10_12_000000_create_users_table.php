<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable(); // อาจจะต้องยอมให้เป็น Nullable
            $table->string('line_id')->unique()->nullable(); // เพิ่มคอลัมน์นี้
            $table->string('avatar')->nullable(); // เพิ่มคอลัมน์นี้
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable(); // อาจจะต้องยอมให้เป็น Nullable ถ้าล็อกอินด้วย LINE อย่างเดียว
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
