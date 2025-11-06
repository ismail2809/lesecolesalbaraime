<?php

namespace App\Filament\Resources\LyceeResource\Pages;

use App\Filament\Resources\LyceeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLycee extends EditRecord
{
    protected static string $resource = LyceeResource::class;

    public function getTitle(): string
    {
        return 'Modifier page Lycée';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
