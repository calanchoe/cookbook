<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    protected $table = 'recipes';
    protected $fillable = ['name', 'time', 'level', 'recipe_category_id', 'photo', 'cuisine_id', 'video'];
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
        return $this->hasMany('App\Models\Favorite');
    }
    public function collections()
    {
        return $this->belongsToMany('App\Models\Collection', 'recipe_collect', 'recipe_id', 'collection_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient', 'recipe_ingr')->using('App\Models\RecipeIngr')->withPivot(['recipe_id', 'ingredient_id', 'count', 'measure',]);
    }

}
