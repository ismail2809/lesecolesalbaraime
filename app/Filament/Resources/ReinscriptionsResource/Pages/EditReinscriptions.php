<?php

namespace App\Filament\Resources\ReinscriptionsResource\Pages;

use App\Filament\Resources\ReinscriptionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReinscriptions extends EditRecord
{
    protected static string $resource = ReinscriptionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier page Réinscription';
    }
}
