<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
