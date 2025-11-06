<?php

namespace App\Filament\Resources\ControleContinuResource\Pages;

use App\Filament\Resources\ControleContinuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListControleContinus extends ListRecords
{
    protected static string $resource = ControleContinuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
