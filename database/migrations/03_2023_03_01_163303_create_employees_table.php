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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('salary');
            $table->timestamps();
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('Business_id');
            $table->foreign('Business_id')->references('id')->on('businesses')->onDelete('cascade');
            $table->unsignedBigInteger('Employee_type_id');
            $table->foreign('Employee_type_id')->references('id')->on('employee_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
