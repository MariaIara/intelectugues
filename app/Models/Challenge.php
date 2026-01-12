<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $fillable = [
        'name',
        'description',
        'score',
        'index',
        'track_id',
        'score'
    ];

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function challengeAttempts()
    {
        return $this->hasMany(ChallengeAttempt::class);
    }
}
