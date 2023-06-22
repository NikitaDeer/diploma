<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TokyoMenuBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-menu')
      ->visible(fn ($get) => $get('../layout') == 'tokyo')
      ->schema([
        Repeater::make('items')
          ->label(__('Пункт меню:'))
          ->schema([
            Select::make('url')
              ->label(__('Ссылка:'))
              ->options([
                '#home' => '#home',
                '#about' => '#about',
                '#service' => '#service',
                '#portfolio' => '#portfolio',
                '#news' => '#news',
                '#contact' => '#contact',
              ])
              ->default('#'),
            TextInput::make('title')
              ->label(__('Название:')),
          ])->columns(2)
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}