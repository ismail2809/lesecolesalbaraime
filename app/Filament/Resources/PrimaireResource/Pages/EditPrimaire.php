<?php

namespace App\Filament\Resources\PrimaireResource\Pages;

use App\Filament\Resources\PrimaireResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrimaire extends EditRecord
{
    protected static string $resource = PrimaireResource::class;

    public function getTitle(): string
    {
        return 'Modifier page Primaire';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
