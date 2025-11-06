<?php

namespace App\Filament\Resources\Albaraime1Resource\Pages;

use App\Filament\Resources\Albaraime1Resource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAlbaraime1 extends CreateRecord
{
    protected static string $resource = Albaraime1Resource::class;

    public function getTitle(): string
    {
        return 'Créer page Albaraime I';
    }
}
