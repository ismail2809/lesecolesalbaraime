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
        Schema::create('apropos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description'); 
            $table->string('quote'); 
            $table->string('title_service1'); 
            $table->string('text_service1'); 
            $table->string('title_service2'); 
            $table->string('text_service2'); 
            $table->string('qualite'); 
            $table->boolean('is_published')->default(0);
            $table->string('image1');
            $table->string('alt_image1');
            $table->string('image2');
            $table->string('alt_image2');
            $table->string('image3');
            $table->string('alt_image3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apropos');
    }
};
