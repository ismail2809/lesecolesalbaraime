<?php

namespace App\Filament\Resources\ReinscriptionsResource\Pages;

use App\Filament\Resources\ReinscriptionsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateReinscriptions extends CreateRecord
{
    protected static string $resource = ReinscriptionsResource::class;

    public function getTitle(): string
    {
        return 'Créer page Réinscription';
    }
}
