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
            $table->id(); //tự tăng
            $table->string('name');
            $table->string('user_name')->unique(); //duy nhất
            $table->string('user_email')->unique(); //duy nhất
            $table->string('user_password');
            $table->string('phone_number')->unique();//duy nhất
            $table->string('user_avatar')->nullable();
            $table->string('user_address');
            $table->boolean('user_type');
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
