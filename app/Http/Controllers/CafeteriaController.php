<?php

namespace App\Http\Controllers;
 
use App\Models\Cafeteria; 

class CafeteriaController extends Controller
{
    public function index()
    { 
        $cafeteria = Cafeteria::latest()->first(); 

        return view('services.cafeteria', compact('cafeteria'));
    }
}
