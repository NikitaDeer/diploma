<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ServiceBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('service')
      ->schema([
        Repeater::make('services')
          ->schema([
            TextInput::make('name')
              ->required(),
            Textarea::make('description')
              ->required(),
            TextInput::make('price')
              ->required(),
          ])
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
