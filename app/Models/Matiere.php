<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
	protected $table = 'matieres';
 
    protected $fillable = ['title'];

    public function controleContinu()
    {
        return $this->hasMany(ControleContinu::class);
    }
}
