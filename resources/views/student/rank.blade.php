<style>
        body{
            background: url("/imgs/back.png") !important;
        }
        .questao{
            color: aliceblue;
            padding: 10px;
            margin-left: 150px;
            margin-right: 150px;
            background-color: firebrick;
        }
    </style>
    
    @extends('layouts.app')
    
    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card  p-5">
                    <div class="text-center">
                        <div class="alert alert-success">
                            <h3>Ranking</h3><h4>Confira os alunos mais bem pontuados</h4>
                        </div>
                    </div>
                    
                    <table class="table table-dark">
                            <thead>
                              <tr>
                                <th scope="col">Classificação</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Pontos</th>
                              </tr>
                            </thead>
                            <div style="color: white;">
                                {{ $contador = 1 }}
                            </div>
                            @foreach($users as $user)
                            <tbody>
                              <tr>
                              <th scope="row">{{$contador++}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->pontuacao}}</td>
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                </div>
            </div>
            
        </div>
    </div>
    
    @endsection
    