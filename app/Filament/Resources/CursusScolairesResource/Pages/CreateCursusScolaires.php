<?php

namespace App\Filament\Resources\CursusScolairesResource\Pages;

use App\Filament\Resources\CursusScolairesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCursusScolaires extends CreateRecord
{
    protected static string $resource = CursusScolairesResource::class;

    public function getTitle(): string
    {
        return 'Créer page Cursus Scolaire';
    }
}
