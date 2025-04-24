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
        Schema::create('stagaires',function(Blueprint $table){
            $table->bigIncrements('stagaire_id');
            $table->string('nom',30);
            $table->string('prénom',30);
            $table->string('email',40)->unique();
            $table->string('phone');
            $table->integer('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagaires');
    }
};
