<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fourniture extends Model
{
    use HasFactory;
	protected $table = 'fournitures';
 
    protected $fillable = ['title', 'niveau', 'annee', 'file', 'title_btn'];

}
