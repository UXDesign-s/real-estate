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
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_details_id')->constrained('user_details')->onDelete('cascade');
            $table->string('meeting_branch')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('moblie_no')->nullable();
            $table->string('meeting_date');
            $table->string('meeting_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_details');
    }
};