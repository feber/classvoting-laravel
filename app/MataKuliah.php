<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $fillable = [
        'nama',
        'kode',
        'deskripsi',
        'prodi_id',
    ];

    public function prodi()
    {
        return $this->belongsTo('App\ProgramStudi');
    }

    public function dosens()
    {
        return $this->belongsToMany('App\Dosen')->withPivot('kapasitas', 'peminat');
    }
}
