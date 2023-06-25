<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

// TODO: Новости нужно писать в базу!
class TokyoNewsBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-news')
      ->visible(fn($get) => $get('../layout') == 'tokyo')
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
    return [
      TextInput::make('title')
        ->label(__('Заголовок:')),
      CuratorPicker::make('photo')
        ->label('Фотография:')
        ->buttonLabel(__('Загрузить:'))
        ->color('primary')
        ->outlined(false)
        ->size('sm'),
      TextInput::make('author')
        ->label(__('Автор:')),
      DatePicker::make('date')
        ->label(__('Дата:')),
    ];
  }

  protected static function getDetailSchema(): array
  {
    return [
      // TODO: возможно, следует заменить Textarea на Rich editor или Markdown editor
      Textarea::make('big-text')
        ->label(__('Крупный текст:'))
        ->rows(10),
      Textarea::make('quotebox')
        ->label(__('Цитата:')),
      Textarea::make('small-text')
        ->label(__('Мелкий текст:'))
        ->rows(10),
    ];
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}