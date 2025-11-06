<?php

namespace App\Filament\Resources\PrimaireResource\Pages;

use App\Filament\Resources\PrimaireResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePrimaire extends CreateRecord
{
    protected static string $resource = PrimaireResource::class;

    public function getTitle(): string
    {
        return 'Créer page Primaire';
    }
}
