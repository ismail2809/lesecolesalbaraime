<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albaraime2 extends Model
{
    use HasFactory; 
	protected $table = 'albaraime2';

 
    protected $fillable = ['nom', 'profile', 'description', 'title', 'content', 'image', 'alt_image'];

}
