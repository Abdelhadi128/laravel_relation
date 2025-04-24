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
        Schema::create('employee_details', function(Blueprint $table){
            $table->bigIncrements('employee_detail_id')->unique();
            $table->string('phone')->unique();
            $table->string('adress')->unique();
            $table->unsignedBigInteger('employeeId')->unique();
            $table->timestamps();
            $table->foreign('employeeId')->references('employeeId')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('employee_details');
    }
};
