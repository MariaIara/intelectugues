<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'index'
    ];

    public function challenges()
    {
        return $this->hasMany(Challenge::class);
    }

    public function questions()
    {
        return $this->hasManyThrough(Question::class, Challenge::class);
    }
}
