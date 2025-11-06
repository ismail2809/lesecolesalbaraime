<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Primaire extends Model
{
    use HasFactory;
	protected $table = 'primaires'; 
    protected $fillable = ['niveau', 'description', 'title', 'content', 'image', 'alt_image'];

}
