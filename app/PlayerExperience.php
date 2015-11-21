<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerExperience extends Model
{
    protected $table = 'player_experience';
    protected $fillable = ['player_experience_name'];
    protected $hidden=['created_at', 'updated_at'];
}
