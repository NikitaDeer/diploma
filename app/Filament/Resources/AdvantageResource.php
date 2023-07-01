<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvantageResource\Pages;
use App\Models\Advantage;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class AdvantageResource extends Resource
{
  // use Translatable;

  protected static ?string $model = Advantage::class;

  protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';
  protected static ?string $navigationGroup = 'Управление web-страницей';

  protected static ?string $navigationLabel = 'Факты';

  public static function getTranslatableLocales(): array
  {
    return ['en', 'ru'];
  }

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Section::make('Факт')
          ->schema([
            TextInput::make('title')->label(__('Заголовок:')),
            Textarea::make('description')->label(__('Текст:')),
            Toggle::make('is_published')->label(__('Опубликовать')),
          ]),
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('title')
          ->searchable()
          ->sortable()
          ->label('Заголовок'),
        TextColumn::make('description')
          ->searchable()
          ->sortable()
          ->limit(25)
          ->label('Содержимое'),
        TextColumn::make('created_at')
          ->dateTime('d-m-Y H:i')
          ->label('Дата создания'),
        ToggleColumn::make('is_published')
          ->sortable()
          ->label('Опубликовано'),

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
      'index' => Pages\ListAdvantages::route('/'),
      'create' => Pages\CreateAdvantage::route('/create'),
      'edit' => Pages\EditAdvantage::route('/{record}/edit'),
    ];
  }
}
