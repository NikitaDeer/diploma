<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Page;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageResource\RelationManagers;
use Filament\Forms\Components\Textarea;

class PageResource extends Resource
{
  protected static ?string $model = Page::class;

  protected static ?string $navigationIcon = 'heroicon-o-collection';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Section::make('Верхняя часть страницы')
          ->schema([
            TextInput::make('FirstTitle')->label(__('Заголовок:')),
            FileUpload::make('main_photo_path')
              ->image()
              ->directory('images')
              ->label(__('Основная фотография:')),
            Textarea::make('content')->label(__('Содержимое:')),
          ]),

        Section::make('Основная информация')
          ->schema([
            TextInput::make('SecondTitle')->label(__('Заголовок:')),
            Textarea::make('main_content')->label(__('Содержимое:')),
          ]),

        Section::make('О нас')
          ->schema([
            TextInput::make('ThirdTitle')->label(__('Заголовок:')),
            FileUpload::make('first_photo_path')
              ->image()
              ->preserveFilenames()
              ->directory('images')
              ->label(__('Фотография 1:')),
            FileUpload::make('second_photo_path')
              ->image()
              ->preserveFilenames()
              ->directory('images')
              ->label(__('Фотография 2:')),
            Textarea::make('about_content')->label(__('Содержимое. 1 часть:')),
            Textarea::make('about_second_content')->label(__('Содержимое. 2 часть:')),
          ]),


        Section::make('Заключительная часть')
          ->schema([
            TextInput::make('FourthTitle')->label(__('Заголовок:')),
            Textarea::make('footer_content')->label(__('Содержимое. 1 часть:')),
            Textarea::make('footer_second_content')->label(__('Содержимое. 2 часть:')),
          ]),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('FirstTitle')
          ->searchable()
          ->sortable()
          ->limit(10)
          ->html(),
        TextColumn::make('SecondTitle')
          ->searchable()
          ->sortable()
          ->limit(10),
        TextColumn::make('ThirdTitle')
          ->searchable()
          ->sortable()
          ->limit(10),
        TextColumn::make('FourthTitle')
          ->searchable()
          ->sortable()
          ->limit(10),

      ])
      ->filters([
        //
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
      ])
      ->bulkActions([
        Tables\Actions\DeleteBulkAction::make(),
      ]);
  }

  public static function getRelations(): array
  {
    return [
      //
    ];
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListPages::route('/'),
      'create' => Pages\CreatePage::route('/create'),
      'edit' => Pages\EditPage::route('/{record}/edit'),
    ];
  }
}