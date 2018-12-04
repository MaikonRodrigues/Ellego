<style>
    body{
        background: url("/imgs/back.png") !important;
    }
</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header  text-center bg-light"><img src="/imgs/diploma.png" alt=""> Seus Cursos</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <div class="card-body">

                            <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="https://betanews.com/wp-content/uploads/2016/11/C-language.jpg" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">Curso Linguagem C</h5>
                                      <p class="card-text">Curso programação em linguagem C. Aprenda a utilizar vetores e passagem de parametros por valor e por referência</p>
                                      <a href="/curso/programacao" class="btn btn-primary">Começar</a>
                                    </div>
                                  </div>
    
                    {{-- @forelse($cursos as $c)
                    
                            <div class="card-deck  float-left pr-2 pb-2 " style="height: 25rem;"> <!--Arrumar saporra de tamanho aqui-->
                                
                                <a href="{{'/description/'.$c->name }}" >
                                <td>
                                
                            </td>
                                    <div class="card " style="height: 15rem; width: 10rem;">
                                        <img class="card-img-top" src="{{'/images/courses/'.$c->image}}" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">{{ $c->name }} </h5>
                                            
                                        </div>

                                    </div>
                                </a>
                               
                            </div>
                    @empty
                        <p>nenhum</p>
                    @endforelse --}}
                
                </div>

                    <!--div class="card-deck">
                        <a href="/c1">
                            <div class="card  pt-2" style="width: 10rem;">
                                <img class="card-img-top" src="/imgs/physics.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Física</h5>
                                </div>
                            </div>
                        </a>

                        <a href="#">
                            <div class="card  bg-light pt-2" style="width: 10rem;">
                                <img class="card-img-top" src="/imgs/column.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">História</h5>
                                </div>
                            </div>
                        </a>
                    </div-->



                </div>
            </div>
        </div>
        @include('student.info')
        {{-- @yield('information') --}}
    </div>
</div>
@endsection
