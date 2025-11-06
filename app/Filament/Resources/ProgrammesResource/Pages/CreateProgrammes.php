<?php

namespace App\Filament\Resources\ProgrammesResource\Pages;

use App\Filament\Resources\ProgrammesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProgrammes extends CreateRecord
{
    protected static string $resource = ProgrammesResource::class;

    public function getTitle(): string
    {
        return 'Créer page Programme';
    }
}
