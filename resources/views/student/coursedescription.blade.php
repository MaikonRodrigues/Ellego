<style>
        @media (min-width: 1200px) {
    .container{
        max-width: 1240px !important;
    }
}
    body{
        background: url("/imgs/back.png") !important;
    }
</style>

@extends('layouts.app')

@section('content')
<div class="container"> 
   

    <div class="row pt-3">

        {{-- Lista de categorias de cursos --}}
        <div class="col-md-2">
           
        </div>


        {{-- Painel do curso  --}}
        <div class="col-md-8">
            <div class="card ">
            
                <div class="card-header  text-center ">
                    {{$nome}}
                </div>
                <a href="{{'/explore/'.$nome}}">
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Descrição do Curso</h4>
                            <p>{{$descricao}}</p>
                        </div>
                        <button  type="button" class="btn btn-primary btn-sm">Inscrever</button>
                    </div>
                </a>
            </div>
        </div>
        {{-- @include('student.info') --}}
        {{-- @yield('information') --}}
    </div>
</div>
@endsection
