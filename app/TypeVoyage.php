<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeVoyage extends Model
{
    //definition des relations
    public function voyages()
    {
        return $this->belongsToMany(Voyage::class);
    }
}
