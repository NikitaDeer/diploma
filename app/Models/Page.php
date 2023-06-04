<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
  use HasFactory;

  protected $filable = [
    'FirstTitle',
    'SecondTitle',
    'main_photo_path',
    'first_photo_path',
    'second_photo_path',
    'content',
  ];
}
