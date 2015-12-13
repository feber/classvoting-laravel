<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    public function user()
    {
        return $this->morphOne('User', 'userable');
    }
}
