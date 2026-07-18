<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('preinscription_demandes', function (Blueprint $table) {
            $table->id();
            $table->string('prenom_eleve');
            $table->string('nom_eleve');
            $table->date('date_naissance');
            $table->string('ecole'); // Albaraime I ou Albaraime II
            $table->string('cycle'); // Préscolaire, Primaire, Collège, Lycée
            $table->string('niveau')->nullable(); // CP, CE1, 1ère Année, etc.
            $table->string('nom_parent');
            $table->string('prenom_parent');
            $table->string('telephone');
            $table->string('email');
            $table->text('message')->nullable();
            $table->enum('statut', ['en_attente', 'accepte', 'refuse'])->default('en_attente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('preinscription_demandes');
    }
};
