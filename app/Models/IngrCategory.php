<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IngrCategory extends Model
{
    //protected $table = 'ingr_category'
    public function ingredients()
    {
        
        return $this->hasMany('App\Model\Ingredient');
    }
}
