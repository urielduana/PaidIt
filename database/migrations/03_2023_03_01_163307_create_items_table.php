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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->string('description');
            $table->string('image')->nullable();
            $table->integer('stock');
            $table->timestamps();
            $table->unsignedBigInteger('Business_id');
            $table->foreign('Business_id')->references('id')->on('businesses')->onDelete('cascade');
            $table->unsignedBigInteger('Item_type_id');
            $table->foreign('Item_type_id')->references('id')->on('item_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
