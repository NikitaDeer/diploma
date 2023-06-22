<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TokyoCopyrightBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-copyright')
      ->visible(fn ($get) => $get('../layout') == 'tokyo')
      ->schema([
        TextInput::make('url')
          ->label(__('Ссылка:'))
          ->default('#'),
        TextInput::make('title')
          ->label(__('Автор:')),
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}