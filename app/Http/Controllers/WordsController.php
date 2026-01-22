<?php

namespace App\Http\Controllers;

use App\Http\Requests\WordsCreateRequest;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WordsController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Word::paginate(10)]);
    }

    public function info(Request $request)
    {
        return response()->json(['data' => Word::find($request->id)]);
    }

    public function create(WordsCreateRequest $request)
    {
        $word = Word::create($request->validated());

        return response()->json([
            'data' => $word
        ]);
    }

    public function favorite(Request $request)
    {
        $word = Word::findOrFail($request->id);

        $toggle_fav = $word->users()->toggle(Auth::user()->id);

        $favorited = empty($toggle_fav['detached']);

        return response()->json([
            'message' => $favorited ? 'Word favorited successfully.' : 'Word unfavorited successfully.'
        ]);
    }

    public function delete(Request $request)
    {
        $word = Word::find($request->id);

        $word->delete();

        return response()->json([
            'message' => 'Word deleted successfully.'
        ]);
    }
}
