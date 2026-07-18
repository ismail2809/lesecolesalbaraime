<?php

namespace App\Filament\Resources\PreinscriptionDemandeResource\Pages;

use App\Filament\Resources\PreinscriptionDemandeResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePreinscriptionDemande extends CreateRecord
{
    protected static string $resource = PreinscriptionDemandeResource::class;

    public function getTitle(): string
    {
        return 'Nouvelle demande de préinscription';
    }
}
