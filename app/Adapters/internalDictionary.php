<?php

namespace App\Adapters;

use App\Interfaces\DictionaryInterface;
use App\Models\Word;

use function Symfony\Component\Clock\now;

class internalDictionary implements DictionaryInterface
{
    public function getDailyWord(): Word
    {
        $today = today()->format('Y-m-d');

        if ($word = Word::whereDate('shorted_at', $today)->first()) {
            return $word;
        }

        $word = Word::whereNull('shorted_at')
            ->inRandomOrder()
            ->first();

        if (!$word) {
            $word = Word::inRandomOrder()->first();
        }

        $word->update(['shorted_at' => $today]);

        return $word;
    }
}
