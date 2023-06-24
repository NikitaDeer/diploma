<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TokyoPortfolioBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-portfolio')
      ->visible(fn ($get) => $get('../layout') == 'tokyo')
      ->schema([
        Tabs::make('portfolio')
          ->tabs(static::getTabsSchema()),
      ]);
  }

  protected static function getTabsSchema(): array
  {
    return [
      Tabs\Tab::make('youtube')
        ->label(__('Видео'))
        ->schema(static::getYoutubeSchema()),
      Tabs\Tab::make('image')
        ->label(__('Изображения'))
        ->schema(static::getImageSchema()),
      Tabs\Tab::make('detail')
        ->label(__('В подробностях'))
        ->schema(static::getDetailSchema()),
    ];
  }

  protected static function getYoutubeSchema(): array
  {
    return [];
  }

  protected static function getImageSchema(): array
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
