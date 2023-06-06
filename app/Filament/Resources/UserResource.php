<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Pages\Page;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Support\Facades\Hash;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
  protected static ?string $model = User::class;

  protected static ?string $navigationIcon = 'heroicon-o-collection';

  public static function form(Form $form): Form
  {
    return $form
      ->schema([
        Card::make()
          ->schema([
            TextInput::make('name')
              ->label('Имя')
              ->required()
              ->maxLength(255),
            TextInput::make('surname')
              ->label('Фамилия')
              ->maxLength(255),
            TextInput::make('patronymic')
              ->label('Отчество')
              ->maxLength(255),
            TextInput::make('phone')
              ->label('Ном. телефона')
              ->required()
              ->tel()
              ->maxLength(255),
            TextInput::make('email')
              ->label('Email')
              ->required()
              ->email()
              ->unique(User::class, 'email', fn ($record) => $record)
              ->maxLength(255),
            TextInput::make('password')
              ->password()
              ->label('Пароль')
              ->required(fn (Page $livewire): bool => $livewire instanceof CreateRecord)
              ->minLength(6)
              ->same('passwordConfirmation')
              ->dehydrated(fn ($state) => filled($state))
              ->dehydrateStateUsing(fn ($state) => Hash::make($state)),
            TextInput::make('passwordConfirmation')
              ->password()
              ->label('Подтвердите пароль')
              ->required(fn (Page $livewire): bool => $livewire instanceof CreateRecord)
              ->minLength(6)
              ->dehydrated(false)
          ])
      ]);
  }

  public static function table(Table $table): Table
  {
    return $table
      ->columns([
        TextColumn::make('id')
          ->label('ID')
          ->sortable(),
        TextColumn::make('name')
          ->label('Имя')
          ->sortable()
          ->searchable(),
        TextColumn::make('surname')
          ->label('Фамилия')
          ->sortable()
          ->searchable(),
        TextColumn::make('patronymic')
          ->label('Отчество')
          ->sortable()
          ->searchable(),
        TextColumn::make('phone')
          ->label('Ном. телефона')
          ->sortable()
          ->searchable(),
        TextColumn::make('email')
          ->label('Email')
          ->sortable()
          ->searchable(),
        TextColumn::make('created_at')
          ->label('Дата создания')
          ->sortable()
          ->searchable()
          ->dateTime()
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
      'index' => Pages\ListUsers::route('/'),
      'create' => Pages\CreateUser::route('/create'),
      'edit' => Pages\EditUser::route('/{record}/edit'),
    ];
  }
}
