<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    //
    public function recipes()
    {
        return $this->belongsToMany('App\Model\Collection', 'recip_collect_table', 'collection_id', 'role_id');
    }
}
