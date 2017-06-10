<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anunt extends Model
{
    protected $table = 'anunturi';

    public function user() {
        return $this->belongsTo('App\User');
    }

}
