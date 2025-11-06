<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Home extends Model
{
    use HasFactory;
    protected $fillable = ['title','second_title','description','image1','alt_image1','image2','alt_image2','image3','alt_image3','button_text','button_link'];
}
