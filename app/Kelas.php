<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    public function dosen()
    {
        return $this->belongsTo('App\Dosen');
    }

    public function makul()
    {
        return $this->belongsTo('App\MataKuliah');
    }
}
