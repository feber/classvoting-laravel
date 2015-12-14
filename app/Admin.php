<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}
