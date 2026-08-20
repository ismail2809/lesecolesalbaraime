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

        $niveauOrder = ['Primaire' => 1, 'Collège' => 2, 'Lycée' => 3];

        $fournitures = Fourniture::where('annee', $anneeSelectionnee)
            ->orderByRaw("CASE
                WHEN niveau LIKE '%rimaire%' THEN 1
                WHEN niveau LIKE '%ollège%' OR niveau LIKE '%ollege%' THEN 2
                WHEN niveau LIKE '%ycée%' OR niveau LIKE '%ycee%' THEN 3
                ELSE 4
            END")
            ->get()
            ->groupBy(function ($item) {
                $n = $item->niveau;
                if (stripos($n, 'rimaire') !== false) return 'Primaire';
                if (stripos($n, 'ollège') !== false || stripos($n, 'ollege') !== false) return 'Collège';
                if (stripos($n, 'ycée') !== false || stripos($n, 'ycee') !== false) return 'Lycée';
                return $n;
            });

        return view('services.fournitures', compact('fournitures', 'annees', 'anneeSelectionnee'));
    }
}
