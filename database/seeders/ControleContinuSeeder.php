<?php

namespace Database\Seeders;

use App\Models\Niveau;
use App\Models\Matiere;
use App\Models\Semestre;
use App\Models\ControleContinu;
use Illuminate\Database\Seeder;

class ControleContinuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Créer les niveaux - Maternelle jusqu'au Lycée
        $niveaux = [
            // Maternelle
            ['title' => 'Petite Section'],
            ['title' => 'Moyenne Section'],
            ['title' => 'Grande Section'],
            
            // Primaire
            ['title' => '1ère Année Primaire'],
            ['title' => '2ème Année Primaire'],
            ['title' => '3ème Année Primaire'],
            ['title' => '4ème Année Primaire'],
            ['title' => '5ème Année Primaire'],
            ['title' => '6ème Année Primaire'],
            
            // Collège
            ['title' => '1ère Année Collège'],
            ['title' => '2ème Année Collège'],
            ['title' => '3ème Année Collège'],
            
            // Lycée
            ['title' => 'Tronc Commun'],
            ['title' => '1ère Année Bac'],
            ['title' => '2ème Année Bac'],
        ];

        foreach ($niveaux as $niveau) {
            Niveau::firstOrCreate($niveau);
        }

        // 2. Créer les matières
        $matieres = [
            // Maternelle & Primaire
            ['title' => 'Langue Française'],
            ['title' => 'Langue Arabe'],
            ['title' => 'Mathématiques'],
            ['title' => 'Éveil Scientifique'],
            ['title' => 'Éducation Islamique'],
            ['title' => 'Histoire-Géographie'],
            
            // Collège & Lycée
            ['title' => 'Physique-Chimie'],
            ['title' => 'Sciences de la Vie et de la Terre'],
            ['title' => 'Anglais'],
            ['title' => 'Philosophie'],
            ['title' => 'Informatique'],
            ['title' => 'Éducation Physique'],
        ];

        foreach ($matieres as $matiere) {
            Matiere::firstOrCreate($matiere);
        }

        // 3. Créer les semestres
        $semestres = [
            ['title' => 'Semestre 1'],
            ['title' => 'Semestre 2'],
        ];

        foreach ($semestres as $semestre) {
            Semestre::firstOrCreate($semestre);
        }

        // 4. Créer les contrôles continus
        $controles = [
            // ========== MATERNELLE ==========
            [
                'title' => 'Évaluation - Les Couleurs et les Formes',
                'niveau' => 'Petite Section',
                'matiere' => 'Éveil Scientifique',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle - Reconnaissance des Lettres',
                'niveau' => 'Moyenne Section',
                'matiere' => 'Langue Française',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Test - Les Chiffres de 1 à 10',
                'niveau' => 'Grande Section',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],

            // ========== PRIMAIRE ==========
            [
                'title' => 'Contrôle N°1 - La Lecture et l\'Écriture',
                'niveau' => '1ère Année Primaire',
                'matiere' => 'Langue Française',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°1 - Addition et Soustraction',
                'niveau' => '1ère Année Primaire',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°2 - Grammaire et Orthographe',
                'niveau' => '2ème Année Primaire',
                'matiere' => 'Langue Française',
                'semestre' => 'Semestre 1',
                'ordre' => 2,
            ],
            [
                'title' => 'Contrôle N°1 - Multiplication et Division',
                'niveau' => '3ème Année Primaire',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°1 - Les États de la Matière',
                'niveau' => '4ème Année Primaire',
                'matiere' => 'Éveil Scientifique',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°2 - La Conjugaison',
                'niveau' => '5ème Année Primaire',
                'matiere' => 'Langue Française',
                'semestre' => 'Semestre 1',
                'ordre' => 2,
            ],
            [
                'title' => 'Contrôle N°1 - Fractions et Décimaux',
                'niveau' => '6ème Année Primaire',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°1 - Géographie du Maroc',
                'niveau' => '6ème Année Primaire',
                'matiere' => 'Histoire-Géographie',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],

            // ========== COLLÈGE ==========
            [
                'title' => 'Contrôle N°1 - Les Nombres Relatifs',
                'niveau' => '1ère Année Collège',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°1 - Grammaire Anglaise',
                'niveau' => '1ère Année Collège',
                'matiere' => 'Anglais',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°2 - Les Équations',
                'niveau' => '2ème Année Collège',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 2,
            ],
            [
                'title' => 'Contrôle N°1 - États Physiques de la Matière',
                'niveau' => '2ème Année Collège',
                'matiere' => 'Physique-Chimie',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°1 - Le Corps Humain',
                'niveau' => '3ème Année Collège',
                'matiere' => 'Sciences de la Vie et de la Terre',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°2 - Théorème de Pythagore',
                'niveau' => '3ème Année Collège',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 2,
            ],

            // ========== LYCÉE ==========
            [
                'title' => 'Contrôle N°1 - Calcul Numérique',
                'niveau' => 'Tronc Commun',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°1 - Introduction à l\'Informatique',
                'niveau' => 'Tronc Commun',
                'matiere' => 'Informatique',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°1 - Fonctions Numériques',
                'niveau' => '1ère Année Bac',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°2 - Dérivation',
                'niveau' => '1ère Année Bac',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 2,
            ],
            [
                'title' => 'Contrôle N°1 - Mécanique',
                'niveau' => '1ère Année Bac',
                'matiere' => 'Physique-Chimie',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°1 - Les Suites Numériques',
                'niveau' => '2ème Année Bac',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],
            [
                'title' => 'Contrôle N°2 - Limites et Continuité',
                'niveau' => '2ème Année Bac',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 1',
                'ordre' => 2,
            ],
            [
                'title' => 'Contrôle N°1 - La Philosophie et la Pensée',
                'niveau' => '2ème Année Bac',
                'matiere' => 'Philosophie',
                'semestre' => 'Semestre 1',
                'ordre' => 1,
            ],

            // ========== SEMESTRE 2 ==========
            [
                'title' => 'Contrôle N°3 - Géométrie',
                'niveau' => '5ème Année Primaire',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 2',
                'ordre' => 3,
            ],
            [
                'title' => 'Contrôle N°2 - La Cellule Vivante',
                'niveau' => '3ème Année Collège',
                'matiere' => 'Sciences de la Vie et de la Terre',
                'semestre' => 'Semestre 2',
                'ordre' => 2,
            ],
            [
                'title' => 'Contrôle N°3 - Intégration',
                'niveau' => '1ère Année Bac',
                'matiere' => 'Mathématiques',
                'semestre' => 'Semestre 2',
                'ordre' => 3,
            ],
            [
                'title' => 'Examen Final - Électricité',
                'niveau' => '2ème Année Bac',
                'matiere' => 'Physique-Chimie',
                'semestre' => 'Semestre 2',
                'ordre' => 2,
            ],
            [
                'title' => 'Contrôle N°2 - Éthique et Morale',
                'niveau' => '2ème Année Bac',
                'matiere' => 'Philosophie',
                'semestre' => 'Semestre 2',
                'ordre' => 2,
            ],
        ];

        // Créer les contrôles avec le bouton "Télécharger"
        foreach ($controles as $controleData) {
            $niveau = Niveau::where('title', $controleData['niveau'])->first();
            $matiere = Matiere::where('title', $controleData['matiere'])->first();
            $semestre = Semestre::where('title', $controleData['semestre'])->first();

            if ($niveau && $matiere && $semestre) {
                ControleContinu::create([
                    'title' => $controleData['title'],
                    'niveau_id' => $niveau->id,
                    'matiere_id' => $matiere->id,
                    'semestre_id' => $semestre->id,
                    'ordre' => $controleData['ordre'],
                    'file' => 'controles-continus/sample.pdf',
                    'title_btn' => 'Télécharger' // ✅ Bouton uniforme
                ]);
            }
        }

        $this->command->info('✅ Contrôles continus créés avec succès!');
        $this->command->info('📊 Total: ' . ControleContinu::count() . ' contrôles');
        $this->command->info('🎓 Niveaux: ' . Niveau::count() . ' (Maternelle → Lycée)');
        $this->command->info('📚 Matières: ' . Matiere::count());
        $this->command->info('📅 Semestres: ' . Semestre::count());
        
        $this->command->newLine();
        $this->command->info('📋 Répartition par cycle:');
        $this->command->info('   🧒 Maternelle: 3 niveaux');
        $this->command->info('   📖 Primaire: 6 niveaux');
        $this->command->info('   🎒 Collège: 3 niveaux');
        $this->command->info('   🎓 Lycée: 3 niveaux');
    }
}
