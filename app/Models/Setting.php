<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory; 
	protected $table = 'settings'; 
 
    protected $fillable = ['facebook', 'instagram', 'tel1', 'tel2',  'adresse1','adresse1_map', 'adresse2', 'adresse2_map','email'];

}
