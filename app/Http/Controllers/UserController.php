<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function info(Request $request)
    {
        $user = $request
            ->user()
            ->load('avatar', 'level');

        $user->level->next_level = Level::where('name', $user->level->next_level)->first();

        return response()->json([
            'data' => $user
        ]);
    }

    public function favoriteWords(Request $request)
    {
        $words = $request->user()->words()->get();

        return response()->json([
            'data' => $words
        ]);
    }
}
