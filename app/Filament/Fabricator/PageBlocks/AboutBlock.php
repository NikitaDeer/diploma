<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Group;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class AboutBlock extends PageBlock
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
            CuratorPicker::make('photo1')
              ->label('Фотография 1:')
              ->buttonLabel('UploadImage')
              ->color('primary')
              ->outlined(false)
              ->size('md'),
            CuratorPicker::make('photo2')
              ->label('Фотография 2:')
              ->buttonLabel('UploadImage')
              ->color('primary')
              ->outlined(false)
              ->size('md'),
          ]),
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
