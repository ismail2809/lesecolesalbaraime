<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{ 
    use HasFactory;
    protected $fillable = ['title','description','temoignage1','nom1','temoignage2','nom2','temoignage3','nom3','temoignage4','nom4','avatar_1','avatar_2','avatar_3','avatar_4'];
}
