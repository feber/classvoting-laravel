<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    /**
     * Table name as shown in database
     * @var string
     */
    protected $table = 'program_studi';

    /**
     * Columns which can be filled from mass assignment.
     * @var string
     */
    protected $fillable = ['nama', 'deskripsi'];
}
