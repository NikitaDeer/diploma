<?php

namespace App\Filament\Resources\AdvantageResource\Pages;

use App\Filament\Resources\AdvantageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdvantage extends EditRecord
{
    protected static string $resource = AdvantageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
