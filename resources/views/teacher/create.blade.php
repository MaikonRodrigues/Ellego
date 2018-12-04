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
                    <a href="/create/course"><button type="button" class="btn btn-dark" >Create Course</button></a>


                </div>
            </div>
        </div>
        @include('student.info')
        {{-- @yield('information') --}}
    </div>
</div>
@endsection
