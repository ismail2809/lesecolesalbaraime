<?php

namespace App\Filament\Resources\CafeteriaResource\Pages;

use App\Filament\Resources\CafeteriaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCafeteria extends CreateRecord
{
    protected static string $resource = CafeteriaResource::class;

    public function getTitle(): string
    {
        return 'Créer page Caféteria';
    }
}
