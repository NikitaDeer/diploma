<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Advantages extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('advantages')
      ->schema([
        TextInput::make('title')->label(__('Заголовок:')),
        Textarea::make('content')->label(__('Содержимое:')),
        Repeater::make('cards')
          ->schema([
            TextInput::make('second_title')->label(__('Заголовок:')),
            Textarea::make('description')->label(__('Текст:')),
          ]),
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}