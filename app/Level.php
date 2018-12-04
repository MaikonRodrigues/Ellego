<?php

namespace Ellego;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //

    public function contents()
    {
    	return $this->hasMany('App\Content');
    }
}
