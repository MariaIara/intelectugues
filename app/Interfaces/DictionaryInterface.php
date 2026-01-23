<?php

namespace App\Interfaces;

use App\Models\Word;

interface DictionaryInterface
{
    public function getDailyWord(): Word;
}
