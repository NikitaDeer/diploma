<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Advantage;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AdvantageResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AdvantageResource\RelationManagers;

class AdvantageResource extends Resource
{
  protected static ?string $model = Advantage::class;

  protected static ?string $navigationIcon = 'heroicon-o-collection';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Section::make('Предоставляемая услуга')
          ->schema([
            TextInput::make('title')->label(__('Заголовок:')),
            Textarea::make('description')->label(__('Текст:')),
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