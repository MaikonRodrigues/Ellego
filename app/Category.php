<?php

namespace Ellego;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['nome'];
    
    public function courses()
    {
    	return $this->belongsToMany('App\Course');
    }
}
