<?php

namespace App\Http\Controllers;
 
use App\Models\Apropos;
use App\Models\CursusScolaire;
use App\Models\Programme;
use App\Models\Reinscription;
use App\Models\Temoignage;
use App\Models\Blog;

class LandingController extends Controller
{
    public function index()
    {
        $apropos = Apropos::where('is_published',1)->latest()->first();
        $cursusScolaire = CursusScolaire::latest()->first();
        $programme = Programme::latest()->first();
        $reinscription = Reinscription::latest()->first();
        $temoignage = Temoignage::latest()->first();
        //dd($temoignage);
        //dd($apropos,$cursusScolaire,$programme,$reinscription,$temoignage);

        $blogs = Blog::where('is_published', 1)->orderBy('id', 'desc')->with('categories')->get();

        return view('home', compact('apropos','cursusScolaire','programme','reinscription','temoignage','blogs'));
    }
}
