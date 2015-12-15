<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    /**
     * Table name as shown in database
     * @var string
     */
    protected $table = 'mata_kuliah';

    /**
     * Columns which can be filled from mass assignment.
     * @var string
     */
    protected $fillable = [
        'nama',
        'kode',
        'deskripsi',
        'prodi_id',
    ];

    /**
     * Program Studi that related to this model with many to one relation
     * @return Program Studi
     */
    public function prodi()
    {
        return $this->belongsTo('App\ProgramStudi');
    }

    /**
     * List Dosen related to this model with many to many relation
     * @return Collection of Dosen
     */
    public function dosens()
    {
        return $this->belongsToMany('App\Dosen')->withPivot('kapasitas', 'peminat');
    }
}
