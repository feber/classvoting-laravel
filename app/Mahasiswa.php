<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    /**
     * Table name as shown in database
     * @var string
     */
    protected $table = 'mahasiswa';

    /**
     * Columns which can be filled from mass assignment.
     * @var string
     */
    protected $fillable = [
        'nim',
    ];

    /**
     * Get particular user of this model
     * @return User
     */
    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}
