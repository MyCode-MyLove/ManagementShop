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
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('provider_id')->constrained('providers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('products', function (Blueprint $table) {
        //     $table->dropForeign('cart_items_cart_id_foreign');
        //     $table->dropForeign('cart_items_product_id_foreign');

        //     $table->dropColumn('category_id', 'provider_id');

        //     kết hợp  php artisan migrate:rollback thì xóa khóa ngoại
        // });
    }
};
