<?php

namespace App\Filament\Resources\PreinscriptionDemandeResource\Pages;

use App\Filament\Resources\PreinscriptionDemandeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPreinscriptionDemande extends EditRecord
{
    protected static string $resource = PreinscriptionDemandeResource::class;

    public function getTitle(): string
    {
        return 'Modifier la demande';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
