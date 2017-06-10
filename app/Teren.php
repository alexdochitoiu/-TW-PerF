<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teren extends Model
{
    protected $table = 'terenuri';
    protected $primaryKey = 'id';
    public $incrementing = false;
}
