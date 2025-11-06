<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maternelle extends Model
{
    use HasFactory;
	protected $table = 'maternelles'; 
    protected $fillable = ['niveau', 'description', 'title', 'content', 'image', 'alt_image'];

}
