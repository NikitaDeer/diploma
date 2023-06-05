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
    Schema::create('pages', function (Blueprint $table) {
      $table->id();

      //заголовки
      $table->string('FirstTitle')->nullable();
      $table->string('SecondTitle')->nullable();
      $table->string('ThirdTitle')->nullable();
      $table->string('FourthTitle')->nullable();

      //путь к фото
      $table->text('main_photo_path')->nullable();
      $table->text('first_photo_path')->nullable();
      $table->text('second_photo_path')->nullable();

      //текстовый контент сайта
      $table->text('content')->nullable();
      $table->text('main_content')->nullable();
      $table->text('about_content')->nullable();
      $table->text('about_second_content')->nullable();
      $table->text('footer_content')->nullable();
      $table->text('footer_second_content')->nullable();

      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pages');
  }
};
