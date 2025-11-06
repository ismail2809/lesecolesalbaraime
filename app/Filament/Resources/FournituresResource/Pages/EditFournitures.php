<?php

namespace App\Filament\Resources\FournituresResource\Pages;

use App\Filament\Resources\FournituresResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFournitures extends EditRecord
{
    protected static string $resource = FournituresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier page Fourniture';
    }
}
