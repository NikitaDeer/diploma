<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TokyoHomeBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-home')
      ->visible(fn ($get) => $get('../layout') == 'tokyo')
      ->schema([
        //
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
