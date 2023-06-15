<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Advantage extends Model
{
  use HasFactory;
  // use HasTranslations;

  protected $fillable = [
    'title',
    'description',
    'is_published',
  ];

  protected $casts = [
    'is_published' => 'boolean',
  ];
}
