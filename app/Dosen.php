<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    /**
     * Table name as shown in database
     * @var string
     */
    protected $table = 'dosen';

    /**
     * Get particular user of this model
     * @return User
     */
    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }

    /**
     * List Mata Kuliah related to this model with many to many relation
     * @return Collection of Mata Kuliah
     */
    public function makuls()
    {
        return $this->belongsToMany('App\MataKuliah')->withPivot('kapasitas', 'peminat');
    }
}
