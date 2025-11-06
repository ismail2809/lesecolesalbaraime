<?php

namespace App\Filament\Resources\LyceeResource\Pages;

use App\Filament\Resources\LyceeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLycee extends CreateRecord
{
    protected static string $resource = LyceeResource::class;

    public function getTitle(): string
    {
        return 'Créer page Lycée';
    }
}
