<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Word extends Model
{
    protected $fillable = [
        'word',
        'category',
        'meaning',
        'synonymous',
        'api_name',
        'api_id',
        'shorted_at',
    ];

    protected $appends = [
        'is_favorited'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'api_name',
        'api_id',
    ];

    protected $casts = [
        'synonymous' => 'array',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_word')
            ->withPivot('created_at', 'updated_at');
    }

    public function getIsFavoritedAttribute()
    {
        return $this->users()
            ->where('user_id', Auth::user()->id)
            ->exists();
    }
}
