<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class HeroBlock extends PageBlock
{
  public static function getBlockSchema(): Block
  {
    return Block::make('hero')
      ->schema([
        TextInput::make('title')->label(__('Заголовок:')),
        CuratorPicker::make('image')
          ->label('Фотография')
          ->buttonLabel('UploadImage')
          ->color('primary')
          ->outlined(false)
          ->size('md'),
        Textarea::make('content')->label(__('Содержимое:')),
      ]);
  }

  public static function mutateData(array $data): array
  {
    return $data;
  }
}
