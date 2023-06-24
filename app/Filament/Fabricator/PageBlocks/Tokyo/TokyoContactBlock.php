<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TokyoContactBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-contact')
      ->visible(fn ($get) => $get('../layout') == 'tokyo')
      ->schema([
        TextInput::make('page-title')
          ->label(__('Заголовок страницы:')),
        TextInput::make('google-map')
          ->placeholder('Ссылка на карту Google'),
        TextInput::make('yandex-map')
          ->placeholder('Ссылка на карту Яндекс'),
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
