<?php

namespace App\Filament\Resources\CursusScolairesResource\Pages;

use App\Filament\Resources\CursusScolairesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCursusScolaires extends ListRecords
{
    protected static string $resource = CursusScolairesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Page Cursus Scolaire';
    }
}
