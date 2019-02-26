<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    // Table Name
    protected $table = 'singer';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

}
