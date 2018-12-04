<style>
    body{
        background: url("/imgs/back.png") !important;
    }
</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header text-center">Modulo 2 - Passagem de Parâmetros</div>

                <div class="card-body" style="padding: 0 0 150px 0 ;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="m-3">
                        <h2 id="curso-vetor" style="clear: both;font-size: 1.8em; font-weight: bold; margin: 1.275em 0px 0.85em;margin-top: 0px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(230, 230, 230); line-height: 1.6;"><a name="curso-vetor" href="#curso-vetor" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);">
                            </a>
                                Passagem de parâmetro por valor e referência
                        </h2>
                        <p style="margin-top: 0px;margin: 1em 0px; word-wrap: break-word;">
                            Para fixação do conteúdo vejamos o video abaixo: 
                        </p>
                        <div class="text-center"> 
                        
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/KDsNcfhAtxw" frameborder="0" allowfullscreen></iframe>
                        </div>

                        

                        <div class="text-center">
                                <a href="/curso/programacao/parametros/">
                                    <button class=" mt-5 btn btn-success">Voltar</button>
                                </a>
                            <a href="/curso/programacao/parametros/parte-2-1">
                                <button class=" mt-5 btn btn-success">Avançar</button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
        
    </div>
</div>

@endsection
