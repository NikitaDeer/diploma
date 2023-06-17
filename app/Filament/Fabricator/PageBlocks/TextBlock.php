<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TextBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('text')
      ->schema([
        TextInput::make('title')->label(__('Заголовок:')),
        Textarea::make('content')->label(__('Содержимое. 1 часть:')),
        Textarea::make('content2')->label(__('Содержимое. 2 часть:')),
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
