<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // Table Name
    protected $table = 'albums';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

}
