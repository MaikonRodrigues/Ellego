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
    <div class="input-group text-center col-md-8 mx-auto">
        <input class="form-control py-2 border-right-0 border" type="search" value="" placeholder="Buscar curso específico" id="example-search-input">
        <button class="btn btn-outline-secondary bg-light" type="button">
            <i class="fa fa-search"></i>
        </button>
    </div>

    <div class="row pt-3">

        {{-- Lista de categorias de cursos --}}
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Matemática
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
					Portugues
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
					    Física
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </ul>
        </div>


        {{-- Painel do curso  --}}
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header  text-center bg-light">
                    Cursos Encontrados
                </div>
                <div class="card-body">
                    @foreach($cursos as $c)
                    
                            <div class="card-deck  float-left pr-2 pb-2 " style="height: 25rem;"> <!--Arrumar saporra de tamanho aqui-->
                                
                                <a href="{{'/description/'.$c->name }}" >
                                
                                    <div class="card " style="height: 15rem; width: 10rem;">
                                        <img class="card-img-top" src="{{'/images/courses/'.$c->image}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $c->name }}</h5>
                                            
                                        </div>

                                    </div>
                                </a>
                               
                            </div>
                    @endforeach
                
                </div>
            </div>
        </div>
        {{-- @include('student.info') --}}
        {{-- @yield('information') --}}
    </div>
</div>
@endsection
