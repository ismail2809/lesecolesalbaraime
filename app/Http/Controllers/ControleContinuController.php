<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\ControleContinu;

class ControleContinuController extends Controller
{
    public function index()
    {
        $controle_continus = ControleContinu::with('matieres','niveaus')->order('ordre','asc')->get();
        
        return view('services.controle_continus', compact('controle_continus'));
    }
}
