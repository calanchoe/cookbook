<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $table = 'likes';
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
