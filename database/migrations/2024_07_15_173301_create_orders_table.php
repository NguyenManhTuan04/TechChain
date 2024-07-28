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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->unsignedBigInteger('user_id');
            $table->integer('quantity');
            $table->enum('status', ["Mới", "Chờ xác nhận", "Đã xác nhận", "Đang giao", "Hoàn thành", "Thất bại", "Đã hủy", "Đã hoàn tiền", "Chờ hoàn tiền"]);
            $table->unsignedBigInteger('cart_id')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('cart_id')->references('id')->on('carts')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('payment_id')->references('id')->on('payment_types')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
