<?php

namespace App\Filament\Resources\CafeteriaResource\Pages;

use App\Filament\Resources\CafeteriaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCafeterias extends ListRecords
{
    protected static string $resource = CafeteriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Page Caféteria';
    }
}
