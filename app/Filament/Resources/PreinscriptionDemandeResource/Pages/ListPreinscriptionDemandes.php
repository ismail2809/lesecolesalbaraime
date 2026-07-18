<?php

namespace App\Filament\Resources\PreinscriptionDemandeResource\Pages;

use App\Filament\Resources\PreinscriptionDemandeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListPreinscriptionDemandes extends ListRecords
{
    protected static string $resource = PreinscriptionDemandeResource::class;

    public function getTitle(): string
    {
        return 'Demandes de Préinscription';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Nouvelle demande'),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('Toutes')
                ->badge(fn () => \App\Models\PreinscriptionDemande::count()),

            'en_attente' => Tab::make('En attente')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('statut', 'en_attente'))
                ->badge(fn () => \App\Models\PreinscriptionDemande::where('statut', 'en_attente')->count())
                ->badgeColor('warning'),

            'accepte' => Tab::make('Acceptées')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('statut', 'accepte'))
                ->badge(fn () => \App\Models\PreinscriptionDemande::where('statut', 'accepte')->count())
                ->badgeColor('success'),

            'refuse' => Tab::make('Refusées')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('statut', 'refuse'))
                ->badge(fn () => \App\Models\PreinscriptionDemande::where('statut', 'refuse')->count())
                ->badgeColor('danger'),
        ];
    }
}
