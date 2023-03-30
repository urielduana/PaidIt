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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->decimal('total')->default(0);
            $table->string('status')->default("Active"); // Active or Completed
            $table->unsignedBigInteger('Customer_id');
            $table->foreign('Customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->unsignedBigInteger('Employee_id');
            $table->foreign('Employee_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
