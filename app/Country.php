<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function player(){

        return $this ->hasOne('\App\Player');
    }
}
