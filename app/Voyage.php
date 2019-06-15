<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    //definition des relations
    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    public function typeVoyage()
    {
        return $this->belongsTo(TypeVoyage::class);
    }
}
