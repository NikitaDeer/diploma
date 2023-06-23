<?php

namespace App\Filament\Fabricator\PageBlocks\Tokyo;

use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class TokyoHomeBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('tokyo.tokyo-home')
      ->visible(fn ($get) => $get('../layout') == 'tokyo')
      ->schema([
        Tabs::make('home')
          ->tabs([
            Tabs\Tab::make('main')
              ->label(__('Основное'))
              ->schema([
                Group::make()
                  ->schema([
                    TextInput::make('title')->label(__('Заголовок:')),
                    TextInput::make('subtitle')->label(__('Подзаголовок:')),
                    CuratorPicker::make('photo')
                      ->label('Фотография:')
                      ->buttonLabel('UploadImage')
                      ->color('primary')
                      ->outlined(false)
                      ->size('md'),
                  ]),

                Group::make()
                  ->schema([
                    Toggle::make('background')
                      ->label('Фон')
                      ->inline(),
                    Radio::make('type')
                      ->label('Рамка картинки')
                      ->options([
                        'wave' => 'Волна',
                        'circle' => 'Круглая',
                        'square' => 'Квадратная'
                      ])
                      ->default('wave')
                      ->inline()
                      ->columnSpan(2),
                  ])->columns(3),
              ]),

            Tabs\Tab::make('socials')
              ->label(__('Соцсети'))
              ->schema([
                Repeater::make('socials')
                  ->schema([
                    TextInput::make('url')
                      ->label(__('Ссылка:'))
                      ->default('#')
                      ->columnSpan(2),
                    TextInput::make('icon')
                      ->label(__('Иконка:'))
                      ->default('icon-vkontakte-2'),
                  ])
                  ->columns(3)
              ])
          ])

      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}


// Tabs::make('home')
// ->tabs([
//   Tabs\Tab::make('main')
//   ->label(__('Основное'))
//   ->schema([
//     Group::make()
//       ->schema([
// //
//       ]),

//     Group::make()
//       ->schema([
// //
//       ])->columns(3),
//   ]),

//   Tabs\Tab::make('socials')
//   ->label(__('Соцсети'))
//   ->schema([
//     Repeater::make('socials')
//     ->schema([
// //
//     ])
//       ->columns(3)
//   ])
// ])