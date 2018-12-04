<style>
    body{
        background: url("/imgs/back.png") !important;
    }
</style>

@extends('teacher.layouts.navbar')

@section('content')
<div class="container"> 
    <div class="row ">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-header  text-center bg-light"><img src="/imgs/diploma.png" alt="">  All Courses</div>

                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control  py-2" type="search" value="search">
                            <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        

                    @endif
                    @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif


                    <div class="card-body">
                       
                       
                        @foreach($cursos as $c)
                        <div class="card-deck  float-left pr-2 pb-2 " style="height: 25rem;"> <!--Arrumar saporra de tamanho aqui-->
                            <a href="/course/show/{{ $c->id }}">
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
        </div>
        @include('student.info')
        {{-- @yield('information') --}}
    </div>
</div>
@endsection
