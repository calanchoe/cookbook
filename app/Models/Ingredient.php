<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
    protected $table = 'ingredients';

    public function ingr_category()
    {
        return $this->belongsTo('App\User', 'ingr_category_id', 'id');
    }
    public function type_price()
    {
        return $this->belongsToMany('App\Models\TypePrice', 'prices_table', 'ingredient_id', 'type_price_id');
    }
    public function recipes()
    {
        return $this->belongsToMany('App\Models\Recipe', 'recipe_ingr', 'ingredient_id', 'recipe_id');
    }
}

