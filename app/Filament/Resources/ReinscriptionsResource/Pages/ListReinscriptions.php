<?php

namespace App\Filament\Resources\ReinscriptionsResource\Pages;

use App\Filament\Resources\ReinscriptionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReinscriptions extends ListRecords
{
    protected static string $resource = ReinscriptionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Page Réinscription';
    }
}
