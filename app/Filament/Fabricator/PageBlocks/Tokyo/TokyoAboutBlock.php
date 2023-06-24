<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class TokyoAboutBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-about')
      ->visible(fn ($get) => $get('../layout') == 'tokyo')
      ->schema([
        Tabs::make('about')
          ->tabs(static::getTabsSchema()),
      ]);
  }

  protected static function getTabsSchema(): array
  {
    return [
      Tabs\Tab::make('About me')
        ->label(__('Основное'))
        ->schema(static::getAboutMeSchema()),
      Tabs\Tab::make('short-info')
        ->label(__('Коротко'))
        ->schema(static::getShortInfoSchema()),
      Tabs\Tab::make('Education')
        ->label(__('Образование'))
        ->schema(static::getEducationSchema()),
      Tabs\Tab::make('Testimonials')
        ->label(__('Отзывы'))
        ->schema(static::getTestimonialsSchema()),
    ];
  }

  protected static function getAboutMeSchema(): array
  {
    return [
      TextInput::make('title')
        ->label(__('Заголовок:')),
      CuratorPicker::make('photo')
        ->label('Фотография:')
        ->buttonLabel('UploadImage')
        ->color('primary')
        ->outlined(false)
        ->size('md'),

      Group::make()
        ->schema([
          TextInput::make('subtitle')
            ->label(__('Подзаголовок:')),
          TextInput::make('curation')
            ->label(__('curator-curation:')),
          TextInput::make('description')
            ->label(__('Описание:'))
            ->columnSpan(2),
        ])->columns(2),

      Textarea::make('text')
        ->label(__('Текст:')),
    ];
  }

  protected static function getShortInfoSchema(): array
  {
    return [
      Repeater::make('short-info-left')
        ->schema([
          TextInput::make('short-title')
            ->label(__('Параметр:')),
          TextInput::make('short-text')
            ->label(__('Данные:')),
          TextInput::make('short-url')
            ->label(__('Ссылка:'))
            ->columnSpan(2),
        ])
        ->columns(2),

      Repeater::make('short-info-right')
        ->schema([
          TextInput::make('short-title')
            ->label(__('Параметр:')),
          TextInput::make('short-text')
            ->label(__('Данные:')),
        ])
        ->columns(2)
    ];
  }

  protected static function getEducationSchema(): array
  {
    return [
      Group::make()
        ->schema([
          TextInput::make('education-left-title')
            ->label(__('Название левой группы:')),

          Repeater::make('education-left')
            ->label(__('Левая группа:'))
            ->schema([
              TextInput::make('year')
                ->label(__('Годы:')),
              TextInput::make('place')
                ->label(__('Место:')),
              TextInput::make('description')
                ->label(__('Описание:')),
            ]),
        ]),

      Group::make()
        ->schema([
          TextInput::make('education-right-title')
            ->label(__('Название правой группы:')),

          Repeater::make('education-right')
            ->label(__('Правая группа:'))
            ->schema([
              TextInput::make('year')
                ->label(__('Годы:')),
              TextInput::make('place')
                ->label(__('Место:')),
              TextInput::make('description')
                ->label(__('Описание:')),
            ]),
        ]),
    ];
  }

  protected static function getTestimonialsSchema(): array
  {
    return [
      TextInput::make('testimonials-title')
        ->label(__('Название:'))
        ->placeholder('Только положительные отзывы:'),

      Repeater::make('testimonials')
        ->schema([
          CuratorPicker::make('photo')
            ->label(__('Фотография:'))
            ->buttonLabel(__('Загрузить'))
            ->color('primary')
            ->outlined(false)
            ->size('sm'),
          TextInput::make('curation')
            ->label(__('curator-curation:')),
          TextInput::make('title')
            ->label(__('Имя:')),
          TextInput::make('description')
            ->label(__('Описание:')),
          TextInput::make('text')
            ->label(__('Текст:')),
        ]),
    ];
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
