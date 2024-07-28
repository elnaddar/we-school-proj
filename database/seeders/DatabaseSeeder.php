<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(RolesAndPermissionsSeeder::class);
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
            'password' => "1234"
        ]);
        $user->assignRole("admin");

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'reader@reader.com',
            'password' => "1234"
        ]);
        $user->assignRole("reader");

    }
}
