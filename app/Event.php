<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable=['event_name'];
    public function event_attributes(){
        return $this->hasMany('app\EventAttribute');
    }
}
