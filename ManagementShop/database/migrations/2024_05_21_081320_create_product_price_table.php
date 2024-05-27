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
        Schema::create('product_price', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Thêm khóa ngoại
            //cascade đảm bảo khi product bị xóa thì các thông tin liên quan bên trong product_price cũng bị xóa theo
            $table->decimal('original_price');
            $table->decimal('discount_price');
            $table->integer('discount_percent');
            $table->timestamp('start_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('end_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('delete_flag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_price');
    }
};
