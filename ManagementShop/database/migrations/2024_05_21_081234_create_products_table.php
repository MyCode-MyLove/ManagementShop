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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('author');
            $table->string('publishing_company');
            $table->string('cover_form');
            $table->integer('publishing_year')->nullable();
            $table->string('packaging_size')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('quantity');
            $table->text('description_long');
            $table->boolean('delete_flag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
