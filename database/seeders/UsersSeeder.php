<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
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
    }
}
