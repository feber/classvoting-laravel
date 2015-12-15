<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    /**
     * Table name as shown in database
     * @var string
     */
    protected $table = 'kelas';

    /**
     * Columns which can be filled from mass assignment.
     * @var string
     */
    protected $fillable = [
        'nama',
        'kapasitas',
        'dosen_id',
        'makul_id'
    ];

    /**
     * Dosen that related to this model with many to one relation
     * @return Dosen
     */
    public function dosen()
    {
        return $this->belongsTo('App\Dosen');
    }

    /**
     * Mata Kuliah that related to this model with many to one relation
     * @return Mata Kuliah
     */
    public function makul()
    {
        return $this->belongsTo('App\MataKuliah');
    }
}
