<?php

namespace App\Filament\Resources\MaternelleResource\Pages;

use App\Filament\Resources\MaternelleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaternelle extends EditRecord
{
    protected static string $resource = MaternelleResource::class;

    public function getTitle(): string
    {
        return 'Modifier page Maternelle';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
