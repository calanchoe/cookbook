<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //
    protected $table = 'collections';
    public function recipes()
    {
        return $this->belongsToMany('App\Models\Recipe', 'recipe_collect', 'collection_id', 'recipe_id');
    }
}
