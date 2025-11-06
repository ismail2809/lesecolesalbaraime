<?php

namespace App\Filament\Resources\TemoignagesResource\Pages;

use App\Filament\Resources\TemoignagesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTemoignages extends CreateRecord
{
    protected static string $resource = TemoignagesResource::class;

    public function getTitle(): string
    {
        return 'Créer page Témoignage';
    }
}
