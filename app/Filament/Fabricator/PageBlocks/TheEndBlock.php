<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TheEndBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('the-end')
      ->visible(fn ($get) => $get('../layout') == 'main-page')
      ->schema([
        TextInput::make('title')->label(__('Заголовок:')),
        Textarea::make('content')->label(__('Содержимое. 1 часть:')),
        TextInput::make('button')->label(__('Кнопка')),
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
