<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Tabs\Tab;
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
          ->tabs([
            Tabs\Tab::make('About me')
              ->label(__('Основное'))
              ->schema([
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
              ]),

            Tabs\Tab::make('short-info')
              ->label(__('Коротко'))
              ->schema([
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
              ]),

            Tabs\Tab::make('Education')
              ->label(__('Образование'))
              ->schema([
                // ...
              ]),

            Tabs\Tab::make('Testimonials')
              ->label(__('Отзывы'))
              ->schema([
                // ...
              ]),
          ])
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}

        // Group::make()
        //   ->schema([

        //   ]),