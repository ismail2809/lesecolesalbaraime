<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafeteria extends Model
{
    use HasFactory;
	protected $table = 'cafeterias';
 
    protected $fillable = ['content', 'description', 'image1', 'alt_image1',  'image2', 'alt_image2', 'image3', 'alt_image3'];

}
