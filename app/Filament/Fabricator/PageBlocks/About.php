<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class About extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('about')
      ->schema([
        Group::make()
          ->schema([
            TextInput::make('title')->label(__('Заголовок:')),
            Textarea::make('content')->label(__('Содержимое. 1 часть:')),
            Textarea::make('content2')->label(__('Содержимое. 2 часть:')),
          ]),

        Group::make()
          ->schema([
            FileUpload::make('photo1')
              ->image()
              ->directory('/images')
              ->label(__('Фотография 1:')),
            FileUpload::make('photo2')
              ->image()
              ->directory('/images')
              ->maxSize(10240)
              ->label(__('Фотография 2:')),
          ]),
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
