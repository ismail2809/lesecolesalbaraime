<?php

namespace App\Filament\Resources\CursusScolairesResource\Pages;

use App\Filament\Resources\CursusScolairesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCursusScolaires extends EditRecord
{
    protected static string $resource = CursusScolairesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier page Cursus Scolaire';
    }
}
