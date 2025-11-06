<?php

namespace App\Filament\Resources\ProgrammesResource\Pages;

use App\Filament\Resources\ProgrammesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgrammes extends EditRecord
{
    protected static string $resource = ProgrammesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier page Programme';
    }
}
