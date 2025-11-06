<?php

namespace App\Filament\Resources\FournituresResource\Pages;

use App\Filament\Resources\FournituresResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFournitures extends ListRecords
{
    protected static string $resource = FournituresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Page Fourniture';
    }
}
