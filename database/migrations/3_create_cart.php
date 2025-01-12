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
        Schema::create('Cart', function (Blueprint $table) {
            $table->id('cart_id');
            $table->integer('amount');
            $table->float('totalPrice');
            $table->unsignedBigInteger('product_id');
            $table ->foreign('product_id')->references('product_id')->on('Product');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cart');
    }
};
