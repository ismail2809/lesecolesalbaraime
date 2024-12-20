<?php

namespace App\Filament\Resources\AproposResource\Pages;

use App\Filament\Resources\AproposResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApropos extends EditRecord
{
    protected static string $resource = AproposResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
