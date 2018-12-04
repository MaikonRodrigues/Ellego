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
                <div class="card-header  text-center bg-light"><img src="/imgs/diploma.png" alt=""> Creating Course</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                   
                    <form action="/course/store" method="POST" enctype="multipart/form-data">
                    	{!! csrf_field() !!}

                    	<div class="form-group">
                            <div class="form-group">
                                <label for="name">Nome:</label>
                    		    <input type="text" class="form-control" name="name">
                            </div>

                            <select name= "categoria" class ="form-group">
                                <option>Escolha uma Categoria</option>
                                @foreach($categorias as $categoria)
                                    <options value= "{{$categoria}}">{{$categoria}}</option>
                                @endforeach
                            </select> 
                            <div class="form-group">
                    		    <label for="description" >Descrição:</label>
                                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>                    		
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Imagem de Capa</label>
                                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                    	</div>
                    	<button type="submit" class="btn btn-primary">Submit</button>
                    </form>



                </div>
            </div>
        </div>
        @include('student.info')
        {{-- @yield('information') --}}
    </div>
</div>
@endsection
