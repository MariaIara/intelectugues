<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function avatar()
    {
        return $this->belongsTo(Avatar::class);
    }
}
