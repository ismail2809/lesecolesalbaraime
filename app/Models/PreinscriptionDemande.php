<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreinscriptionDemande extends Model
{
    use HasFactory;

    protected $table = 'preinscription_demandes';

    protected $fillable = [
        'prenom_eleve',
        'nom_eleve',
        'date_naissance',
        'ecole',
        'cycle',
        'niveau',
        'nom_parent',
        'prenom_parent',
        'telephone',
        'email',
        'message',
        'transport',
        'statut',
    ];
}
