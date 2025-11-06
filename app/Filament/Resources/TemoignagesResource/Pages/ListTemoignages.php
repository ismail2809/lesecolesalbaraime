<?php

namespace App\Filament\Resources\TemoignagesResource\Pages;

use App\Filament\Resources\TemoignagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTemoignages extends ListRecords
{
    protected static string $resource = TemoignagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Page Témoignage';
    }
}
