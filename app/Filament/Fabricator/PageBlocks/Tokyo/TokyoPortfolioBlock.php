<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class TokyoPortfolioBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-portfolio')
      ->visible(fn($get) => $get('../layout') == 'tokyo')
      ->schema([
        TextInput::make('page-title')
          ->label(__('Заголовок страницы:')),
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
    return [
      TextInput::make('youtube-title')
        ->label(__('Название секции:')),
      Repeater::make('youtube')
        ->schema([
          TextInput::make('url')
            ->label(__('Ссылка:')),
          CuratorPicker::make('image')
            ->label('Иллюстрация:')
            ->buttonLabel(__('Загрузить:'))
            ->color('primary')
            ->outlined(false)
            ->size('sm'),
        ])
    ];
  }

  protected static function getImageSchema(): array
  {
    return [
      TextInput::make('image-title')
        ->label(__('Название секции:')),
      Repeater::make('image')
        ->schema([
          CuratorPicker::make('image')
            ->label('Иллюстрация:')
            ->buttonLabel(__('Загрузить:'))
            ->color('primary')
            ->outlined(false)
            ->size('sm'),
        ])
    ];
  }

  protected static function getDetailSchema(): array
  {
    return [
      TextInput::make('detail-title')
        ->label(__('Название секции:')),
      Repeater::make('detail')
        ->schema([
          CuratorPicker::make('image')
            ->label('Иллюстрация:')
            ->buttonLabel(__('Загрузить:'))
            ->color('primary')
            ->outlined(false)
            ->size('sm'),
        ])
    ];
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}