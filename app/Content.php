<?php

namespace Ellego;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    

    public function exercicies()
    {
    	return $this->hasMany('App\Exercicie');
    }
}
