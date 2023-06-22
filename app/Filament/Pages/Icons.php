<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Icons extends Page
{
  protected static ?string $navigationIcon = 'heroicon-o-information-circle';

  protected static ?string $title = "Иконки";

  protected ?string $subheading = "Иконки, которые можно использовать на сайте";

  protected static string $view = 'filament.pages.icons';
}