<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Fernando de Lima Rodrigues',
            'email' => 'fernando_tecti@hotmail.com',
            'password' => bcrypt('123123123'),
            'role' => 'admin',
            'is_teacher' => '1',
            'theme' => 'dark',
        ]);
    }
}
