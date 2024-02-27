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
        Schema::create('guest_information', function (Blueprint $table){
            $table->id();
            $table->integer('booking_id'); //ให้มันทำงานคู่กับ booking
            $table->string('b_fname');
            $table->string('b_lname');
            $table->string('b_tel');
            $table->string('b_email');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
