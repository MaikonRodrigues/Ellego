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
                                        <h3>Tarefa realizada!</h3> <h4>  Você completou esse módulo!!</h4>
                                      </div>
                                    <h4>Você conseguiu {{ $parametros_pontos }} pontos neste questionário.</h4>
                             <h4>Infelizmente você errou as seguintes questões: </h4><br> 
                            @for ($i = 0; $i < count($erros); $i++)
                                <p class="questao"> {{ $erros[$i] }} </p> 
                            @endfor
                    @else
                        <h3>Parabéns, Você acertou todas as questões!!</h3>
                    @endif

                    <p>Confira o ranking dos melhores neste curso clicando no botão abaixo</p>
                    <a href="/curso/programacao/rank">
                        <button class="btn btn-dark">Rank</button>
                    </a>
                    <br>
                               
                            <a href="/curso/programacao/">
                                <button class=" mt-5 btn btn-success">Voltar</button>
                            </a>

                        </div>
                </div>
            </div>
            
        </div>
    </div>
    
    @endsection
    