<?php

namespace App\Filament\Resources\PrimaireResource\Pages;

use App\Filament\Resources\PrimaireResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrimaires extends ListRecords
{
    protected static string $resource = PrimaireResource::class;

    public function getTitle(): string
    {
        return 'Page Primaire';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
