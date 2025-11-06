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
        Schema::create('cursus_scolaires', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description'); 
            $table->string('service1'); 
            $table->string('service2'); 
            $table->string('service3'); 
            $table->string('service4'); 
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
        Schema::dropIfExists('cursus_scolaires');
    }
};
