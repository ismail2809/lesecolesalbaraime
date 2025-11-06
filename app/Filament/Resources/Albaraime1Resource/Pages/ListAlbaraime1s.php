<?php

namespace App\Filament\Resources\Albaraime1Resource\Pages;

use App\Filament\Resources\Albaraime1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAlbaraime1s extends ListRecords
{
    protected static string $resource = Albaraime1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Page Albaraime I';
    }
}
