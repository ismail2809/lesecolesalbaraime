<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
	protected $table = 'colleges'; 
    protected $fillable = ['niveau', 'description', 'title', 'content', 'image', 'alt_image'];

}
