<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $table= 'user_activity';
    protected $primaryKey = 'id_user_activity';
    
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function film() {
        return $this->belongsTo('App\Film', 'film_id');
    }
}
