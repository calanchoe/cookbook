<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypePrice extends Model
{
    //
    public function ingredient()
    {
        return $this->belongsToMany('App\Model\Igredient', 'prices_table', 'type_price_id', 'ingredient_id');
    }
}
