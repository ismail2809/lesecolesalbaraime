<?php

namespace App\Http\Controllers;
 
use App\Models\Apropos;
use App\Models\CursusScolaire;
use App\Models\Programme;
use App\Models\Reinscription;
use App\Models\Temoignage;
use App\Models\Blog;
use App\Models\Home;

class LandingController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_published', 1)->orderBy('id', 'desc')->with('categories')->get();
        $apropos = Apropos::where('is_published',1)->latest()->first();
        $cursusScolaire = CursusScolaire::latest()->first();
        $programme = Programme::latest()->first();
        $reinscription = Reinscription::latest()->first();
        $temoignage = Temoignage::latest()->first();
        $home = Home::latest()->first();
        
        //dd($home); 


        return view('home', compact('blogs','apropos','cursusScolaire','programme','reinscription','temoignage','home'));
    }
}
