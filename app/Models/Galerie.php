<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'image', 'order'];

    public array $imageFields = ['image'];

    protected static function booted(): void
    {
        static::creating(function ($galerie) {
            if (!$galerie->order) {
                $galerie->order = static::max('order') + 1;
            }
        });
    }
    
}
