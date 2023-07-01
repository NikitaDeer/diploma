<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class NewsResource extends Resource
{
  protected static ?string $model = News::class;

  protected static ?string $navigationIcon = 'heroicon-o-collection';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Card::make()
          ->schema([
            TextInput::make('title')
              ->maxLength(255)
              ->label(__('Заголовок:')),
            TextInput::make('author')
              ->label(__('Автор:'))
              ->default(\Illuminate\Support\Facades\Auth::user()->name),
            CuratorPicker::make('image')
              ->label('Фотография:')
              ->required()
              ->buttonLabel(__('Загрузить:'))
              ->color('primary')
              ->outlined(false)
              ->size('sm'),
            Textarea::make('subtitle')
              ->label(__('Подзаголовок:'))
              ->maxLength(65535)
              ->rows(5),
            MarkdownEditor::make('text')
              ->label('Текст:')
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
          ])

      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('title'),
        Tables\Columns\TextColumn::make('created_at')
          ->dateTime(),
        Tables\Columns\TextColumn::make('updated_at')
          ->dateTime(),
      ])
      ->filters([
        //
      ])
      ->actions([
        Tables\Actions\DeleteAction::make(),
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
      'index' => Pages\ListNews::route('/'),
      'create' => Pages\CreateNews::route('/create'),
      'edit' => Pages\EditNews::route('/{record}/edit'),
    ];
  }
}
