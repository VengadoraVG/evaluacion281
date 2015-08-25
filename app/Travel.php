<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travel';
    public $timestamps = true;

    public function activities()
    {
        return $this->hasMany('App\Activity', 'travel');
    }
}
