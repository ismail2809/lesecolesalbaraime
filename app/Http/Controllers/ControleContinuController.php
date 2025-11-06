<?php

namespace App\Http\Controllers;

use App\Models\ControleContinu;
use App\Models\Niveau;
use App\Models\Matiere;
use App\Models\Semestre;
use Illuminate\Http\Request;

class ControleContinuController extends Controller
{
    /**
     * Afficher la liste des contrôles continus avec filtres
     */
    public function index(Request $request)
    {
        // Récupérer tous les niveaux, matières et semestres pour les filtres
        $niveaux = Niveau::orderBy('title')->get();
        $matieres = Matiere::orderBy('title')->get();
        $semestres = Semestre::orderBy('title')->get();

        // Requête de base avec les relations
        $query = ControleContinu::with(['niveaus', 'matieres', 'semestres']);

        // Appliquer le filtre par niveau
        if ($request->filled('niveau')) {
            $query->where('niveau_id', $request->niveau);
        }

        // Appliquer le filtre par matière
        if ($request->filled('matiere')) {
            $query->where('matiere_id', $request->matiere);
        }

        // Appliquer le filtre par semestre
        if ($request->filled('semestre')) {
            $query->where('semestre_id', $request->semestre);
        }

        // Récupérer les contrôles filtrés et triés par ordre
        $controle_continus = $query->orderBy('ordre', 'asc')
                                   ->orderBy('created_at', 'desc')
                                   ->get();

        return view('services.controle_continus', compact(
            'controle_continus',
            'niveaux',
            'matieres',
            'semestres'
        ));
    }

    /**
     * Télécharger un fichier de contrôle continu
     */
    public function download($id)
    {
        $controle = ControleContinu::findOrFail($id);
        
        $filePath = storage_path('app/public/' . $controle->file);
        
        if (file_exists($filePath)) {
            return response()->download($filePath);
        }
        
        abort(404, 'Fichier non trouvé');
    }
}