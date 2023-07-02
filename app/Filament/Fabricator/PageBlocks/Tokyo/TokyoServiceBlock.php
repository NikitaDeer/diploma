<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TokyoServiceBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-service')
      ->visible(fn($get) => $get('../layout') == 'tokyo')
      ->schema([
        TextInput::make('page-title')
          ->label(__('Заголовок страницы:')),
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

      Tabs\Tab::make('Facts')
        ->label(__('Интересные факты'))
        ->schema(static::getFactsSchema()),
    ];
  }

  protected static function getServicesSchema(): array
  {
    return [
      TextInput::make('services-title')
        ->label(__('Название секции:')),
      Repeater::make('services')
        ->schema([
          // Из базы
          Select::make('serviceId')
            ->label('')
            ->options(
              \App\Models\Service::where('is_published', 1)->get()
                ->pluck('name', 'id')
            )
            ->searchable()
        ]),
    ];
  }

  protected static function getFactsSchema(): array
  {
    return [
      TextInput::make('facts-title')
        ->label(__('Название секции:')),
      Repeater::make('facts')
        ->label('Факты')
        ->schema([
          Select::make('factId')
            ->label('')
            ->options(
              \App\Models\Advantage::where('is_published', 1)->get()
                ->pluck('title', 'id')
            )
            ->searchable()
        ])
    ];
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
