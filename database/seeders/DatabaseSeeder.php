<?php

namespace Database\Seeders;

use App\Models\Avatar;
use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Level::create([
            'name' => 'Level 1',
            'image' => 'images/level1.png',
            'needed_score' => 0,
            'created_at' => now()
        ]);

        User::create([
            'name' => 'Test User',
            'email' => 'teste@gmail.com',
            'password' => '123',
            'sequence' => 0,
            'general_score' => 0,
            'weekly_score' => 0,
            'level_id' => Level::where('name', 'Level 1')->first()->id,
            'created_at' => now()
        ]);

        Avatar::create([
            'image' => 'images/avatar-default.png',
            'created_at' => now()
        ]);
    }
}
