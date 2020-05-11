<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    public function ingr_category()
    {
        return $this->belongsTo('App\User', 'ingr_category_id', 'id');
    }
    public function typr_price()
    {
        return $this->belongsToMany('App\Model\TypePrice', 'prices_table', 'ingredient_id', 'type_price_id');
    }
}

