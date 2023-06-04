<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('orders', function (Blueprint $table) {
      $table->id();

      $table->string('name');
      $table->text('description')->default('Опишите свою просьбу');
      $table->date('delivery_date');

      $table->foreignId('user_id')
        ->constrained()
        ->cascadeOnDelete();
      $table->foreignId('service_id')
        ->constrained()
        ->cascadeOnDelete();

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('orders');
  }
};
