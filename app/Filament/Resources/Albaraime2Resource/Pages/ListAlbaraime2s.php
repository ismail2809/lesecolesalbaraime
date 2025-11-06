<?php

namespace App\Filament\Resources\Albaraime2Resource\Pages;

use App\Filament\Resources\Albaraime2Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlbaraime2s extends ListRecords
{
    protected static string $resource = Albaraime2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Page Albaraime II';
    }
}
