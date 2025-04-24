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
        Schema::create('classes',function(BluePrint $table){
            $table->bigIncrements('id_bultien');
            $table->unsignedBigInteger('stagaire_id')->unique();
            $table->float('la_note');
            $table->string('description');
            $table->foreign('stagaire_id')->references('stagaire_id')->on('stagaires')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bultien');
    }
};
