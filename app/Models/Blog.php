<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['categorie_id', 'title', 'slug', 'content', 'date', 'image', 'is_published'];

    public function categories()
    {
        return $this->belongsTo('App\Models\Categorie','categorie_id');
    }

}
