<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ServiceResource extends Resource
{
  protected static ?string $model = Service::class;

  protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';

  protected static ?string $navigationGroup = 'Управление заявками';

  protected static ?string $navigationLabel = 'Предоставляемые услуги';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Card::make()
          ->schema([
            Forms\Components\TextInput::make('name')
              ->label(__('Название:'))
              ->required(),
            Forms\Components\TextInput::make('price')
              ->label(__('Цена:'))
              ->required(),
            Forms\Components\Textarea::make('description')
              ->label(__('Описание:'))
              ->required(),
            \FilamentTiptapEditor\TiptapEditor::make('text')
              ->label('Подробно об услуге:'),
            Toggle::make('is_published')->label(__('Опубликовано')),
          ])
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('name')
          ->limit(10)
          ->sortable()
          ->label('Название')
          ->searchable(),
        Tables\Columns\TextColumn::make('price')
          ->label('Цена')
          ->sortable(),
        Tables\Columns\TextColumn::make('created_at')
          ->dateTime('d-m-Y H:i')
          ->label('Дата создания'),
        Tables\Columns\ToggleColumn::make('popular')
          ->sortable()
          ->label('Популярно'),
        Tables\Columns\ToggleColumn::make('is_published')
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
      'index' => Pages\ListServices::route('/'),
      'create' => Pages\CreateService::route('/create'),
      'edit' => Pages\EditService::route('/{record}/edit'),
    ];
  }
}
