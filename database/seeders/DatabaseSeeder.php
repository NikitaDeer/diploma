<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
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

        $admin = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
        ]);

        $user = User::factory()->create([
            'name' => 'test',
            'email' => 'test@example.com',
        ]);

        $qwerty = User::factory()->create([
            'name' => 'qwerty',
            'email' => 'qwerty@example.com',
        ]);

        $role = Role::create(['name' => 'Admin']);
        $admin->assignRole($role);
        $qwerty->assignRole($role);

        $role = Role::create(['name' => 'Test']);
        $user->assignRole($role);
    }
}