<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  use HasFactory;

  protected $fillable = [
    'name',
    'price',
    'description',
    'text',
    'is_published',
    'popular',
  ];

  public function product()
  {
    return $this->hasMany(Order::class);
  }
}
