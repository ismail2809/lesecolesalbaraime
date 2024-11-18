<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galerie; 

class GalerieController extends Controller
{
    public function index()
    {
        $galeries = Galerie::orderBy('id', 'desc')->get();
         
        return view('galeries.index', compact('galeries'));
    }
}
