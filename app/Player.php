<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'country_id',
        'address',
        'description',
        'retired'
        ];

    public function country(){

        return $this ->belongsTo('\App\Country');
    }

}
