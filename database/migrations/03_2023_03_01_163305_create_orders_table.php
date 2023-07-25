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
            $table->string('status')->default('pending');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('Customer_id');
            $table->foreign('Customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->timestamps();
            //relacionar con la tabla de status
            $table->unsignedBigInteger('Status_id')->nullable();
            $table->foreign('Status_id')->references('id')->on('status_order')->onDelete('cascade');
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
