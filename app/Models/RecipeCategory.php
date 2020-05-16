<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecipeCategory extends Model
{
    //protected $table = 'recipe_category'
    public function recipes()
    {
        return $this->hasMany('App\Models\Recipe');
    }
}
