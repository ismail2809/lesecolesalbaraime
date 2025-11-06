<?php

namespace App\Http\Controllers;
 
use App\Models\Maternelle; 
use App\Models\Primaire; 
use App\Models\College; 
use App\Models\Lycee; 
use App\Models\Temoignage;
use App\Models\Programme;

class CursusScolaireController extends Controller
{
    public function getMaternelle()
    { 
        $maternelle = Maternelle::latest()->first(); 
        $temoignage = Temoignage::latest()->first();
        $programme = Programme::latest()->first();

        return view('cursus.maternelle', compact('maternelle','temoignage','programme'));
    }
    public function getPrimaire()
    { 
        $primaire = Primaire::latest()->first(); 
        $temoignage = Temoignage::latest()->first();
        $programme = Programme::latest()->first();

        return view('cursus.primaire', compact('primaire','temoignage','programme'));
    }
    public function getCollege()
    { 
        $college = College::latest()->first(); 
        $temoignage = Temoignage::latest()->first();
        $programme = Programme::latest()->first();

        return view('cursus.college', compact('college','temoignage','programme'));
    }
    public function getLycee()
    { 
        $lycee = Lycee::latest()->first(); 
        $temoignage = Temoignage::latest()->first();
        $programme = Programme::latest()->first();

        return view('cursus.lycee', compact('lycee','temoignage','programme'));
    }
}
  