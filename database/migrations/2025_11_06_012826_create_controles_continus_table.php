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
        Schema::create('controles_continus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('semestre_id')->constrained('niveaus')->onDelete('cascade');
            $table->foreignId('niveau_id')->constrained('niveaus')->onDelete('cascade');
            $table->foreignId('matiere_id')->constrained('matieres')->onDelete('cascade');
            $table->integer('ordre')->default(1);
            $table->string('file')->nullable();
            $table->string('title_btn')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('controles_continus');
    }
};