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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('room_id');
            $table->string('room_number');
            $table->string('check_in');
            $table->string('check_out');
            $table->string('b_fname');
            $table->string('b_lname');
            $table->string('b_tel');
            $table->string('b_email');
            $table->string('amount'); //จำนวนผู้เข้าพัก
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
