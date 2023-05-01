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
            $table->string('image');
            $table->string('product_code');
            $table->string('product_name');
            $table->string('slug');
            $table->string('product_type');
            $table->string('product_color')->nullable();
            $table->string('product_batch');
            $table->integer('product_price');
            // $table->char('product_size');
            $table->text('product_desc')->nullable();
            $table->integer('product_stock')->nullable();
            $table->boolean('product_status');
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
