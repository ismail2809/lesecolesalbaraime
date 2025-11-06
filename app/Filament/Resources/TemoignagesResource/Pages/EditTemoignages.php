<?php

namespace App\Filament\Resources\TemoignagesResource\Pages;

use App\Filament\Resources\TemoignagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTemoignages extends EditRecord
{
    protected static string $resource = TemoignagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier page Témoignage';
    }
}
