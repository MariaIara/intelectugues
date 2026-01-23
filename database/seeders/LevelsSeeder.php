<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelsSeeder extends Seeder
{
    public function run(): void
    {
        Level::create([
            'name' => 'Level 1',
            'image' => 'images/level1.png',
            'needed_score' => 0,
            'created_at' => now()
        ]);
    }
}
