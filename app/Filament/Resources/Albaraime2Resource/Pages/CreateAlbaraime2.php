<?php

namespace App\Filament\Resources\Albaraime2Resource\Pages;

use App\Filament\Resources\Albaraime2Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAlbaraime2 extends CreateRecord
{
    protected static string $resource = Albaraime2Resource::class;

    public function getTitle(): string
    {
        return 'Créer page Albaraime II';
    }
}
