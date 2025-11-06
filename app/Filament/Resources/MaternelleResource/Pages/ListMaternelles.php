<?php

namespace App\Filament\Resources\MaternelleResource\Pages;

use App\Filament\Resources\MaternelleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMaternelles extends ListRecords
{
    protected static string $resource = MaternelleResource::class;

    public function getTitle(): string
    {
        return 'Page Maternelle';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
