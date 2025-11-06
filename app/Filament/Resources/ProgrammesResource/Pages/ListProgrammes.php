<?php

namespace App\Filament\Resources\ProgrammesResource\Pages;

use App\Filament\Resources\ProgrammesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgrammes extends ListRecords
{
    protected static string $resource = ProgrammesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Page Programme';
    }
}
