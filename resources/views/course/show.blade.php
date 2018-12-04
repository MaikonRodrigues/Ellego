<style>
    body{
        background: url("/imgs/back.png") !important;
    }
</style>

@extends('teacher.layouts.navbar')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header  text-center bg-light"><img src="/imgs/diploma.png" alt=""> {{$curso->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center">
                        <img src="/imgs/plus.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
