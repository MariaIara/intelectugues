<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
