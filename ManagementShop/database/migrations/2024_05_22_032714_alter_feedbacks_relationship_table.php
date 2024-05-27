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
        Schema::table('feedbacks', function (Blueprint $table) {
            // Check if the columns exist before adding them
            if (!Schema::hasColumn('feedbacks', 'user_id')) {
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            }

            if (!Schema::hasColumn('feedbacks', 'product_id')) {
                $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
