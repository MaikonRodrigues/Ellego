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
                <div class="card-header  text-center bg-light"><img src="/imgs/diploma.png" alt=""> Your Courses</div>

                <div class="card-body">
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

                    @foreach($cursos as $c)
                    <div class="card-deck float-left pr-2 pb-2">
                        <a href="/course/show/{{ $c->id }}">
                            <div class="card  pt-2" style="width: 10rem;">
                                <img class="card-img-top" src="{{'/images/courses/'.$c->image}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $c->name }}</h5>
                                    <p>{{ $c->id }}</p>
                                </div>

                            </div>
                        </a>
                    </div>
                    @endforeach



                </div>
            </div>
        </div>
        @include('student.info')
        {{-- @yield('information') --}}
    </div>
</div>
@endsection
