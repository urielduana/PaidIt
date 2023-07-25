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
        Schema::create('businesses_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('mount', 10, 4);
            $table->timestamps();
            $table->unsignedBigInteger('business_id');
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses_transactions');
    }
};
