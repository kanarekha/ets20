<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'film_id';

    protected $fillable = [
        'title', 'year', 'synopsis', 'country', 'directors', 'actors', 'rating', 'duration', 'type', 'poster'
    ];

    public function user_activity() {
        return $this->hasMany('App\UserActivity', 'film_id');
    }

    public function genre() {
        return $this->belongsToMany('App\Genre', 'have', 'film_id', 'genre_id');
    }
}
