<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Page;
use App\Models\User;
use App\Models\Advantage;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // \App\Models\User::factory(10)->create();

    // \App\Models\Role::factory(10)->create();

    Page::factory(3)->create();
    Advantage::factory(12)->create();

    $admin = User::factory()->create([
      'name' => 'admin',
      'email' => 'admin@example.com',
    ]);

    $user = User::factory()->create([
      'name' => 'user',
      'email' => 'user@example.com',
    ]);

    Role::create(['name' => 'Admin']);
    Role::create(['name' => 'User']);

    $admin->assignRole('Admin');
    $user->assignRole('User');
  }
}
