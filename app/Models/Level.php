<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $fillable = [
        'name',
        'image',
        'needed_score',
        'next_level',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
