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
        Schema::create('primaires', function (Blueprint $table) {
            $table->id();
            $table->string('niveau'); 
            $table->string('title'); 
            $table->text('description');    
            $table->string('image'); 
            $table->string('alt_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('primaires');
    }
};
