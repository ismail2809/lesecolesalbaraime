<?php

namespace App\Filament\Widgets;

use App\Models\PreinscriptionDemande;
use Filament\Widgets\Widget;

class PreinscriptionWidget extends Widget
{
    protected static string $view = 'filament.widgets.preinscription-widget';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 3;

    public function getDemandes(): \Illuminate\Database\Eloquent\Collection
    {
        return PreinscriptionDemande::latest()->take(5)->get();
    }

    public function getStats(): array
    {
        return [
            'total'    => PreinscriptionDemande::count(),
            'pending'  => PreinscriptionDemande::where('statut', 'en_attente')->count(),
            'approved' => PreinscriptionDemande::where('statut', 'approuvé')->count(),
        ];
    }
}
