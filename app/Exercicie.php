<?php

namespace Ellego;

use Illuminate\Database\Eloquent\Model;

class Exercicie extends Model
{
    protected $fillable = [
        'pergunta', 'opResposta1','opResposta2','opResposta3','opResposta4','tipo'
    ];
    public function exercicies(){
        // a classe conteudo tem varios exercicios
         return $this->belongsTo(Conteudo::class);
     }
}
