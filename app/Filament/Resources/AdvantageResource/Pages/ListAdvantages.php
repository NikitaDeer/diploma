<?php

namespace App\Filament\Resources\AdvantageResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AdvantageResource;

class ListAdvantages extends ListRecords
{
  // use ListRecords\Concerns\Translatable;

  protected static string $resource = AdvantageResource::class;

  protected function getActions(): array
  {
    return [
      Actions\CreateAction::make(),
    ];
  }
}
