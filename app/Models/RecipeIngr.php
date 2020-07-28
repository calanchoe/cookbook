<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;


class RecipeIngr extends Pivot
{
    protected $table = 'recipe_ingr';
    public $incrementing = true;
}
