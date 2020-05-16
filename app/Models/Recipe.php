<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    protected $table = 'recipes';
    public function cuisine()
    {
        return $this->belongsTo('App\Model\Cuisine', 'cuisine_id', 'id');
    }
    public function recipe_category()
    {
        return $this->belongsTo('App\Model\RecipeCategory', 'recipe_category_id', 'id');
    }
    public function steps()
    {
        return $this->hasMany('App\Model\Step');
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
        return $this->belongsToMany('App\Model\Collection', 'recip_collect_table', 'recipe_id', 'collection_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany('App\Model\Ingredient')
                        ->using('App\Model\RecipeIngr')
                        ->withPivot([
                            'count',
                            'measure',
                        ]);
    }

}
