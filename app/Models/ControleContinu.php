<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControleContinu extends Model
{
    use HasFactory;
	protected $table = 'controles_continus';
 
    protected $fillable = ['title', 'semestre_id','niveau_id', 'matiere_id', 'ordre', 'file', 'title_btn'];

    public function matieres()
    {
        return $this->belongsTo(Matiere::class,'matiere_id');
    }

    public function niveaus()
    {
        return $this->belongsTo(Niveau::class,'niveau_id');
    }

    public function semestres()
    {
        return $this->belongsTo(Semestre::class,'semestre_id');
    }
}
