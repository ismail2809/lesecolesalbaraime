<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fourniture;

class FournitureController extends Controller
{
    public function index(Request $request)
    {
        $anneeSelectionnee = $request->get('annee', date('Y'));
        $annees = Fourniture::distinct()->orderByDesc('annee')->pluck('annee');
        $fournitures = Fourniture::where('annee', $anneeSelectionnee)->orderBy('niveau')->get();

        return view('services.fournitures', compact('fournitures', 'annees', 'anneeSelectionnee'));
    }
}
