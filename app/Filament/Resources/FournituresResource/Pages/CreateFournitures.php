<?php

namespace App\Filament\Resources\FournituresResource\Pages;

use App\Filament\Resources\FournituresResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFournitures extends CreateRecord
{
    protected static string $resource = FournituresResource::class;

    public function getTitle(): string
    {
        return 'Créer page Fourniture';
    }
}
