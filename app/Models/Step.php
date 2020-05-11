<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    //
    public function recipe()
    {
        return $this->belongsTo('App\Model\Recipe', 'recipe_id', 'id');
    }
}
