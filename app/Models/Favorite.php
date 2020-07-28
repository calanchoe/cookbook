<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    //favorites_table
    protected $table = 'favorites';
    public function recipe()
    {
        return $this->belongsTo('App\Models\Recipe');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    protected $fillable = ['recipe_id', 'user_id'];
}
