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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('price');
            $table->decimal('total');
            $table->timestamps();
            $table->unsignedBigInteger('Order_id');
            $table->foreign('Order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('Item_id');
            $table->foreign('Item_id')->references('id')->on('items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
