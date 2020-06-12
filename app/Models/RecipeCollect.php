<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class RecipeCollect extends Pivot
{
    protected $table = 'recipe_collect';
}
