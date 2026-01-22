<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function info(Request $request)
    {
        $user = $request
            ->user()
            ->load('avatar', 'level');

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
