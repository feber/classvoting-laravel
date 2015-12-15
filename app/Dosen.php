<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';

    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }

    public function makul()
    {
        return $this->belongsToMany('App\MataKuliah')->withPivot('kapasitas', 'peminat');
    }
}
