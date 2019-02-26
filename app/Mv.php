<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mv extends Model
{
    // Table Name
    protected $table = 'mvs';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

}
