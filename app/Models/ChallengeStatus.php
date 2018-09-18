<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChallengeStatus extends Model
{
    protected $fillable = ['name'];

    public function challenges() {
        return $this->hasMany(Challenge::class);
    }
}
