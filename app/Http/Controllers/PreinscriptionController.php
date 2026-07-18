<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreinscriptionDemande;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class PreinscriptionController extends Controller
{
    public function index()
    {
        return view('preinscription.preinscription');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom_parent'              => 'required|string|max:100',
            'prenom_parent'           => 'required|string|max:100',
            'telephone'               => 'required|string|max:20',
            'email'                   => 'nullable|email|max:150',
            'message'                 => 'nullable|string|max:1000',
            'eleves'                  => 'required|array|min:1',
            'eleves.*.prenom_eleve'   => 'required|string|max:100',
            'eleves.*.nom_eleve'      => 'required|string|max:100',
            'eleves.*.date_naissance' => 'required|date',
            'eleves.*.ecole'          => 'required|string',
            'eleves.*.cycle'          => 'required|string',
            'eleves.*.niveau'         => 'nullable|string|max:100',
        ], [
            'eleves.required'                  => 'Veuillez ajouter au moins un élève.',
            'eleves.*.prenom_eleve.required'   => 'Le prénom de l\'élève est obligatoire.',
            'eleves.*.nom_eleve.required'      => 'Le nom de l\'élève est obligatoire.',
            'eleves.*.date_naissance.required' => 'La date de naissance est obligatoire.',
            'eleves.*.ecole.required'          => 'Veuillez sélectionner une école.',
            'eleves.*.cycle.required'          => 'Veuillez sélectionner un cycle.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput();
        }

        $parentData = [
            'nom_parent'    => $request->nom_parent,
            'prenom_parent' => $request->prenom_parent,
            'telephone'     => $request->telephone,
            'email'         => $request->email,
            'message'       => $request->message,
            'transport'     => $request->boolean('transport'),
        ];

        foreach ($request->eleves as $eleve) {
            PreinscriptionDemande::create(array_merge($eleve, $parentData));
        }

        $count = count($request->eleves);
        $msg = $count > 1
            ? "Votre demande de préinscription pour {$count} élèves a été soumise avec succès. Nous vous contacterons dans les plus brefs délais."
            : "Votre demande de préinscription a été soumise avec succès. Nous vous contacterons dans les plus brefs délais.";

        Log::info("Préinscription soumise : {$count} élève(s) — parent : {$request->prenom_parent} {$request->nom_parent}");

        Alert::success('Demande envoyée !', $msg);

        return back();
    }
}
