<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genre';

    public function film() {
        return $this->belongsToMany('App\Film', 'have', 'film_id', 'genre_id');
    }
}
