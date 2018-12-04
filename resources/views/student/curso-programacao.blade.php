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
                <div class="card-header text-center">Módulos</div>

                <div class="card-body" style="padding: 0 0 150px 0 ;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="text-center">
                        <div class="row justify-content-center mt-5">
                            
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Modulo 1 - Vetores</h5>
                                    <p class="card-text mt-4">Aprenda a utilizar vetores na linguagem de programação C.</p>
                                    <a href="/curso/programacao/vetores" class="btn btn-primary">Praticar</a>
                                </div>

                                </div>
                                <div class="card ml-5" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">Módulo 2 - Passagem de parâmetro</h5>
                                    <p class="card-text mb-1">Aprenda a diferença de passagem por valor e passagem por referência</p>
                                    <a href="/curso/programacao/parametros" class="btn btn-primary">Praticar</a>
                                </div>
                                </div>
                                
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
