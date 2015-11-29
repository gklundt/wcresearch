<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //

    protected $fillable=['session_id','user_id'];
    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
