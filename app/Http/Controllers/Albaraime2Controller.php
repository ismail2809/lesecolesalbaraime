<?php

namespace App\Http\Controllers;
 
use App\Models\Albaraime2; 

class Albaraime2Controller extends Controller
{
    public function index()
    { 
        $albaraime2 = Albaraime2::latest()->first();
        
        //dd($albaraime2); 

        return view('albaraimes.albaraime2', compact('albaraime2'));
    }
}
