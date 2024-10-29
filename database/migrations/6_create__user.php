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
        Schema::create('User', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('password');
            $table->string('sex');
            $table->date('birthday');
            $table->foreign('address_id')->references('address_id')->on('User_address')->onDelete('');
            $table->foreign('wishlist_id')->references('wishlist_id')->on('Wishlist');
            $table->foreign('cart_id')->references('card_id')->on('Cart');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('User');
    }
};