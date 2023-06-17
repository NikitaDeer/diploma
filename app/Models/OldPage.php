<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OldPage extends Model
{
  use HasFactory;
  protected $table = 'pages';

  protected $fillable = [
    'FirstTitle',
    'SecondTitle',
    'ThirdTitle',
    'FourthTitle',
    'main_photo_path',
    'first_photo_path',
    'second_photo_path',
    'content',
    'main_content',
    'about_content',
    'about_second_content',
    'footer_content',
    'footer_second_content',
    'is_published',
  ];
}
