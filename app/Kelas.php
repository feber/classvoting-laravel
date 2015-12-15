<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'nama',
        'kapasitas',
        'dosen_id',
        'makul_id'
    ];

    public function dosen()
    {
        return $this->belongsTo('App\Dosen');
    }

    public function makul()
    {
        return $this->belongsTo('App\MataKuliah');
    }
}
