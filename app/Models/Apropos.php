<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apropos extends Model
{
    /** @use HasFactory<\Database\Factories\AproposFactory> */
    use HasFactory;

    protected $fillable = ['title','description','quote','qualite','title_service1','text_service1','title_service2','text_service2', 'is_published','image1','alt_image1','image2','alt_image2','image3','alt_image3'];

}
