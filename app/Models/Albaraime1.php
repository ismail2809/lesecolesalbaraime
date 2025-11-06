<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Albaraime1 extends Model
{
    use HasFactory;
	protected $table = 'albaraime1';
    protected $fillable = ['nom', 'profile', 'description', 'title', 'content', 'image', 'alt_image'];

}
