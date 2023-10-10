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
        Schema::create('property_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_detail_id')->constrained('user_details')->onDelete('cascade');
            $table->string('postCode');
            $table->string('houseNo')->nullable();
            $table->string('property_type')->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('rent_length')->nullable();
            $table->string('points_analysed')->nullable();
            $table->string('radius')->nullable();
            $table->string('average_price')->nullable();
            $table->string('raw_data')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_details');
    }
};
