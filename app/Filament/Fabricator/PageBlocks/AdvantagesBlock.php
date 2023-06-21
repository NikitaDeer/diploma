<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class AdvantagesBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('advantages')
      ->visible(fn ($get) => $get('../layout') == 'main-page')
      ->schema([
        Group::make()
          ->schema([
            TextInput::make('title')->label(__('Заголовок:')),
            Textarea::make('content')->label(__('Содержимое:')),
          ]),

        Group::make()
          ->schema([
            Repeater::make('cards')
              ->schema([
                TextInput::make('second_title')->label(__('Заголовок:')),
                Textarea::make('description')->label(__('Текст:')),
              ])
          ])
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
