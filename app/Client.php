<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //definition des relations
    public function voyages()
    {
        return $this->belongsToMany(Voyage::class);
    }
}
