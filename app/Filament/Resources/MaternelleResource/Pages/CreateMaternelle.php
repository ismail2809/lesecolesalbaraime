<?php

namespace App\Filament\Resources\MaternelleResource\Pages;

use App\Filament\Resources\MaternelleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMaternelle extends CreateRecord
{
    protected static string $resource = MaternelleResource::class;

    public function getTitle(): string
    {
        return 'Créer page Maternelle';
    }
}
