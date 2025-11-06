<?php

namespace App\Filament\Resources\CafeteriaResource\Pages;

use App\Filament\Resources\CafeteriaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCafeteria extends EditRecord
{
    protected static string $resource = CafeteriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier page Caféteria';
    }
}
