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
        Schema::create('temoignages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description'); 
            $table->string('temoignage1');
            $table->text('nom1'); 
            $table->string('temoignage2');
            $table->text('nom2'); 
            $table->string('temoignage3');
            $table->text('nom3'); 
            $table->string('temoignage4');
            $table->text('nom4'); 
            $table->string('avatar_1');
            $table->string('avatar_2');
            $table->string('avatar_3');
            $table->string('avatar_4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temoignages');
    }
};
