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
                <div class="card-header text-center">Physics</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="text-center">
                        <a href="#">
                            <div class="row justify-content-center">
                                <div class="card  bg-light " style="width: 7rem; height: 7rem;">
                                    <img class="card-img-top" src="/imgs/course1.png" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Module1 </h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="row justify-content-center">
                            <a href="#">
                                <div class="row pt-5 px-5  justify-content-center">
                                    <div class="card  bg-light " style="width: 7rem; height: 7rem;">
                                        <img class="card-img-top"  src="/imgs/course3.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Module2 </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="row pt-5 px-5 justify-content-center">
                                    <div class="card  bg-light " style="width: 7rem; height: 7rem;">
                                        <img class="card-img-top"  src="/imgs/course4.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Module3 </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="row pt-5 px-5 justify-content-center">
                                    <div class="card   bg-light " style="width: 7rem; height: 7rem;">
                                        <img class="card-img-top"  src="/imgs/course5.png"  alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center">Module4 </h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            
                        </div>

                        <a href="#">
                            <div class="row pt-5 justify-content-center">
                                <div class="card  bg-light " style="width: 7rem; height: 7rem;">
                                <img class="card-img-top"  src="/imgs/course6.png"  alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Module 5 </h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        

                        
                           
                       
                       
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
