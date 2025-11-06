<?php

namespace App\Filament\Resources\Albaraime1Resource\Pages;

use App\Filament\Resources\Albaraime1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlbaraime1 extends EditRecord
{
    protected static string $resource = Albaraime1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier page Albaraime I';
    }
}
