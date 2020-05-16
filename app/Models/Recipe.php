<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    protected $table = 'recipes';
    public function cuisine()
    {
        return $this->belongsTo('App\Models\Cuisine', 'cuisine_id', 'id');
    }
    public function recipe_category()
    {
        return $this->belongsTo('App\Models\RecipeCategory', 'recipe_category_id', 'id');
    }
    public function steps()
    {
        return $this->hasMany('App\Models\Step');
    }
    public function likes()
    {
        return $this->belongsToMany('App\User', 'likes_table');
    }
    public function favorites()
    {
        return $this->belongsToMany('App\User', 'favorites_table');
    }
    public function collections()
    {
        return $this->belongsToMany('App\Models\Collection', 'recip_collect_table', 'recipe_id', 'collection_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient', 'recipe_ingr')->using('App\Models\RecipeIngr')->withPivot(['count', 'measure',]);
    }

}
