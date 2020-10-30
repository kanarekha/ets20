<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'film_id';

    public function user_activity() {
        return $this->hasMany('App\UserActivity', 'film_id');
    }

    public function genre() {
        return $this->belongsToMany('App\Genre', 'have', 'film_id', 'genre_id');
    }
}
