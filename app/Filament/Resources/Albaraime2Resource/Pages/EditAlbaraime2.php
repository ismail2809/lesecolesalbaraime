<?php

namespace App\Filament\Resources\Albaraime2Resource\Pages;

use App\Filament\Resources\Albaraime2Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAlbaraime2 extends EditRecord
{
    protected static string $resource = Albaraime2Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier page Albaraime II';
    }
}
