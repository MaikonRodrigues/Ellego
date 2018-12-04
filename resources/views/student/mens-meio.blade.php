<style>
    body{
        background: url("/imgs/back.png") !important;
    }
    .questao{
        color: aliceblue;
        padding: 10px;
        margin-left: 150px;
        margin-right: 150px;
        background-color: firebrick;
    }
</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card  p-5">
                @if(count($erros) != 0)
                    <div class="text-center">
                            <div class="alert alert-success">
                                    <h3>Parabéns!</h3> <h4>  Por ter chegado até aqui!!</h4>
                                  </div>
                                <h4>Você conseguiu {{ $parametros_pontos }} pontos neste módulo.</h4>
                         <h4>Infelismente você errou as seguintes questões: </h4><br> 
                        @for ($i = 0; $i < count($erros); $i++)
                            <p class="questao"> {{ $erros[$i] }} </p> 
                        @endfor
                @else
                    <h3>Parabéns, Você acertou todas as questões!!</h3>
                @endif


                <br>
                           
                        <a href="/curso/programacao/vetores/parte-3">
                            <button class=" mt-5 btn btn-success">Avançar</button>
                        </a>

                    </div>
            </div>
        </div>
        
    </div>
</div>

@endsection
