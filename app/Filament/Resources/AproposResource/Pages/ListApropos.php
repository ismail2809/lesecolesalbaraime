<?php

namespace App\Filament\Resources\AproposResource\Pages;

use App\Filament\Resources\AproposResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApropos extends ListRecords
{
    protected static string $resource = AproposResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
