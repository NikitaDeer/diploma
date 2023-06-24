<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TokyoNewsBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-news')
      ->visible(fn ($get) => $get('../layout') == 'tokyo')
      ->schema([
        TextInput::make('page-title')
          ->label(__('Заголовок страницы:')),
        Repeater::make('news')
          ->schema([
            Tabs::make('')
              ->tabs(static::getTabsSchema()),
          ])

      ]);
  }

  protected static function getTabsSchema(): array
  {
    return [
      Tabs\Tab::make('basic')
        ->label(__('Основное'))
        ->schema(static::getBasicSchema()),
      Tabs\Tab::make('detail')
        ->label(__('Подробности'))
        ->schema(static::getDetailSchema()),
    ];
  }

  protected static function getBasicSchema(): array
  {
    return [];
  }

  protected static function getDetailSchema(): array
  {
    return [];
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
