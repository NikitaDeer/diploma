<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TokyoServiceBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-service')
      ->visible(fn ($get) => $get('../layout') == 'tokyo')
      ->schema([
        Tabs::make('service')
          ->tabs(static::getTabsSchema()),
      ]);
  }

  protected static function getTabsSchema(): array
  {
    return [
      Tabs\Tab::make('Services')
        ->label(__('Что мы можем'))
        ->schema(static::getServicesSchema()),
      Tabs\Tab::make('Partners')
        ->label(__('Наши партнеры'))
        ->schema(static::getPartnersSchema()),
      Tabs\Tab::make('Facts')
        ->label(__('Интересные факты'))
        ->schema(static::getFactsSchema()),
      Tabs\Tab::make('Pricing')
        ->label(__('Цены'))
        ->schema(static::getPricingSchema()),
    ];
  }

  protected static function getServicesSchema(): array
  {
    return [];
  }

  protected static function getPartnersSchema(): array
  {
    return [];
  }

  protected static function getFactsSchema(): array
  {
    return [];
  }

  protected static function getPricingSchema(): array
  {
    return [];
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
