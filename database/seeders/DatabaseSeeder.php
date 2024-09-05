<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
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
            'name' => 'N',
            'email' => 'n@gmail.com',
            'password' => bcrypt('12345'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Oton',
            'email' => 'oton@gmail.com',
            'password' => bcrypt('1234'),
            'role' => 'user',
            'fotouser' => ''
        ]);

    }
}
