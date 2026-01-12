<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'statement',
        'challenge_id'
    ];

    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }

    public function alternatives()
    {
        return $this->hasMany(Alternative::class);
    }
}
