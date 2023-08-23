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
        Schema::create('parent_data', function (Blueprint $table) {
            $table->id();
            $table->string('national_id_num')->unique();
            $table->string('national_id_face'); // You might need to define appropriate columns
            $table->string('national_id_background'); // You might need to define appropriate columns
            $table->string('address');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_data');
    }
};
