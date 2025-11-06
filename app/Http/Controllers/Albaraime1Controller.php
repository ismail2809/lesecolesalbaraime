<?php

namespace App\Http\Controllers;
 
use App\Models\Albaraime1; 

class Albaraime1Controller extends Controller
{
    public function index()
    { 
        $albaraime1 = Albaraime1::latest()->first();
        
        //dd($albaraime1); 

        return view('albaraimes.albaraime1', compact('albaraime1'));
    }
}
