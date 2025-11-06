<?php

namespace App\Filament\Resources\LyceeResource\Pages;

use App\Filament\Resources\LyceeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLycees extends ListRecords
{
    protected static string $resource = LyceeResource::class;

    public function getTitle(): string
    {
        return 'Page Lycée';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
