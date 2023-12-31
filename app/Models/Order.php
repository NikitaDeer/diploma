<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  use HasFactory;

  protected $fillable = [
    'description',
    'order_date',
    'user_id',
    'service_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function service()
  {
    return $this->belongsTo(Service::class);
  }
}
