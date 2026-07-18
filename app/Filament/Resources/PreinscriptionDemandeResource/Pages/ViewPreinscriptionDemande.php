<?php

namespace App\Filament\Resources\PreinscriptionDemandeResource\Pages;

use App\Filament\Resources\PreinscriptionDemandeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPreinscriptionDemande extends ViewRecord
{
    protected static string $resource = PreinscriptionDemandeResource::class;

    public function getTitle(): string
    {
        return 'Détail de la demande';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
