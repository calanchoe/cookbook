<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    //
    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe');
    }
}
