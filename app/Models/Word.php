<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
        'word',
        'category',
        'meaning',
        'synonymous'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_word')
            ->withPivot('created_at', 'updated_at');
    }
}
