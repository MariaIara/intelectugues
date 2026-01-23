<?php

namespace Database\Seeders;

use App\Models\Avatar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvatarsSeeder extends Seeder
{
    public function run(): void
    {
        Avatar::create([
            'image' => 'images/avatar-default.png',
            'created_at' => now()
        ]);
    }
}
