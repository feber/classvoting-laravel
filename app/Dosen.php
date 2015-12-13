<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    public function user()
    {
        return $this->morphOne('User', 'userable');
    }
}
