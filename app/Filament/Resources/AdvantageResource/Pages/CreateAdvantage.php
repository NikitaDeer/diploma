<?php

namespace App\Filament\Resources\AdvantageResource\Pages;

use App\Filament\Resources\AdvantageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdvantage extends CreateRecord
{
  protected static string $resource = AdvantageResource::class;
  // use CreateRecord\Concerns\Translatable;
}
