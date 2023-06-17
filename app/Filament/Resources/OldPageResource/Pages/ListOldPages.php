<?php

namespace App\Filament\Resources\OldPageResource\Pages;

use App\Filament\Resources\OldPageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOldPages extends ListRecords
{
    protected static string $resource = OldPageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
