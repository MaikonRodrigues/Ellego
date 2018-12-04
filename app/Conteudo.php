<?php

namespace Ellego;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $fillable = [
        'name'
    ];

    public function exercicies(){
       // a classe conteudo tem varios exercicios
        return $this->belongsToMany(Exercicie::class);
    }
}
