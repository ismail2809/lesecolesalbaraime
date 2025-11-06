<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Fourniture; 

class FournitureController extends Controller
{
    public function index()
    { 
        $fournitures = Fourniture::All(); 
        // dd($fournitures);
        //order a ajouter
        return view('services.fournitures', compact('fournitures'));
    }
}
