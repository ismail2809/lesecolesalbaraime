<?php

namespace App\Http\Controllers;
 
use App\Models\Activite; 

class ActiviteController extends Controller
{
    public function index()
    { 
        $activites = Activite::latest()->first();
        
        //dd($activites); 

        return view('services.activites', compact('activites'));
    }
}
