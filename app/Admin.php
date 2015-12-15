<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * Table name as shown in database
     * @var string
     */
    protected $table = 'admin';

    /**
     * Get particular user of this model
     * @return User
     */
    public function user()
    {
        return $this->morphOne('App\User', 'userable');
    }
}
