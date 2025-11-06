<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursusScolaire extends Model
{
    /** @use HasFactory<\Database\Factories\CursusScolaireFactory> */
    use HasFactory;

    protected $fillable = ['title','description','service1','service2','service3','service4', 'is_published','image','alt_image'];

}
