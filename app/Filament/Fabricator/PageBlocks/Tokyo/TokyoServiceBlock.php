<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
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
      // Пока секция не нужна
      // Tabs\Tab::make('Partners')
      //   ->label(__('Наши партнеры'))
      //   ->schema(static::getPartnersSchema()),

      Tabs\Tab::make('Pricing')
        ->label(__('Цены'))
        ->schema(static::getPricingSchema()),
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
          // Tabs::make('')
          //   ->tabs([
          //     Tabs\Tab::make('basic')
          //       ->label(__('Основное'))
          //       ->schema(static::getBasicSchema()),
          //     Tabs\Tab::make('detail')
          //       ->label(__('Подробности'))
          //       ->schema(static::getDetailSchema()),
          //   ]),
        ]),
    ];
  }
  protected static function getBasicSchema(): array
  {
    return [
      // TODO добавить ограничение на количество строк
      Textarea::make('text')
        ->label(__(' Короткий текст:')),
    ];
  }

  protected static function getDetailSchema(): array
  {
    return [
      // CuratorPicker::make('image')
      //   ->label('Иллюстрация:')
      //   ->buttonLabel(__('Загрузить:'))
      //   ->color('primary')
      //   ->outlined(false)
      //   ->size('sm'),
      MarkdownEditor::make('detail-text')
        ->label('Подробнее:')
        ->disableAllToolbarButtons()
        ->enableToolbarButtons([
          'bold',
          'bulletList',
          'codeBlock',
          'edit',
          'italic',
          'link',
          'orderedList',
          'preview',
          'strike',
        ]),
    ];
  }

  protected static function getPricingSchema(): array
  {
    return [
      TextInput::make('pricing-title')
        ->label(__('Название секции:')),
      Repeater::make('pricing')
        ->schema([

        ])
    ];
  }

  protected static function getPartnersSchema(): array
  {
    return [
      TextInput::make('partners-title')
        ->label(__('Название секции:')),
      Repeater::make('partners')
        ->schema([

        ])
    ];
  }

  protected static function getFactsSchema(): array
  {
    return [
      TextInput::make('facts-title')
        ->label(__('Название секции:')),
      Repeater::make('facts')
        ->schema([

        ])
    ];
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
