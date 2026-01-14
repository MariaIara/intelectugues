<?php

namespace App\Services;

use App\Models\Level;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function create(array $data)
    {
        if(!$level = Level::where('name', 'Level 1')->first()){
            abort(404, 'Level not found');
        }

        return User::create([
            ...$data,
            'level_id' => $level->id,
            'password' => Hash::make($data['password'])
        ]);
    }
}