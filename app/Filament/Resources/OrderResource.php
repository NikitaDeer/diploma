<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Order;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\OrderResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrderResource\RelationManagers;

class OrderResource extends Resource
{
  protected static ?string $model = Order::class;

  protected static ?string $navigationIcon = 'heroicon-o-user-group';

  protected static ?string $navigationGroup = 'Управление заявками';

  protected static ?string $navigationLabel = 'Заявки клиентов';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Card::make()
          ->schema([
            Select::make('service_id')
              ->relationship('service', 'name')
              ->required()
              ->label('Выберите услугу')
              ->options(
                \App\Models\Service::where('is_published', 1)->pluck('name', 'id')->toArray()
              ),
            // ->getOptions(function () {
            //   return \App\Models\Service::where('is_published', 1)->get()->pluck('name', 'id')->toArray();
            // }),
            Select::make('user_id')
              ->relationship('user', 'name')
              ->required()
              ->label('Имя пользователя'),
            Forms\Components\DatePicker::make('order_date')
              ->required()
              ->label('Дата заявки'),
          ])->columns(3),

        Card::make()
          ->schema([
            Forms\Components\Textarea::make('description')
              ->maxLength(1000)
              ->label('Описание'),
          ])
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        Tables\Columns\TextColumn::make('id')
          ->sortable()
          ->label('ID')
          ->searchable(),
        Tables\Columns\TextColumn::make('user.name')
          ->sortable()
          ->label('Имя пользователя')
          ->searchable(),
        Tables\Columns\TextColumn::make('service.name')
          ->sortable()
          ->label('Услуга')
          ->searchable(),
        Tables\Columns\TextColumn::make('service.price')
          ->sortable()
          ->label('Цена')
          ->searchable(),
        Tables\Columns\TextColumn::make('description')
          ->limit(20)
          ->label('Описание')
          ->searchable(),
        Tables\Columns\TextColumn::make('order_date')
          ->sortable()
          ->searchable()
          ->label('Дата заказа')
          ->date('Y-m-d H:i'),
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
      'index' => Pages\ListOrders::route('/'),
      'create' => Pages\CreateOrder::route('/create'),
      'edit' => Pages\EditOrder::route('/{record}/edit'),
    ];
  }
}