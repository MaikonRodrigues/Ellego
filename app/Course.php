<?php

namespace Ellego;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Ellego\User;


class Course extends Model
{
    //
    protected $fillable = [
        'name', 'categoria', 'description', 'image', 
    ];


    public function levels()
    {
    	return $this->hasMany('App\Level');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }
    
    /**
    * Check one Relacionamento.
    * 
    */
    public function users()
    {
        //      $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. user em pivot', 'key ref. course em pivot')
        return $this->belongsToMany(Course::class,'courses_users','course_id','user_id');
    }
    
    public function conteudos(){
        // a classe curso tem varios conteudos
        return $this->belongsToMany(Conteudos::Class);
    }
     
     
}
   

