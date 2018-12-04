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
                <div class="card-header text-center">Moulo 1 - Vetores</div>

                <div class="card-body" style="padding: 0 0 150px 0 ;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="m-3">
                            <h2 id="curso-vetor" style="clear: both;font-size: 1.8em; font-weight: bold; margin: 1.275em 0px 0.85em;margin-top: 0px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(230, 230, 230); line-height: 1.6;"><a name="curso-vetor" href="#curso-vetor" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);">
                                </a>
                                    Vetores
                            </h2>
                            O vetor é provavelmente um dos mais simples e importantes tipos agregados
                            disponíveis na maioria das linguagens de programação. Através do
                            seu uso, podemos armazenar e manipular grandes quantidades de dados.
                            Nesse capítulo, introduzimos o uso de vetores em C, mostramos como
                            strings e matrizes são implementadas a partir deles e apresentamos
                            alguns métodos de ordenação e busca em vetores. 
                            Um vetor é uma coleção de variáveis de um mesmo tipo, que compartilham o
                            mesmo nome e que ocupam posições consecutivas de memória. Cada uma
                            dessas variáveis denomina-se elemento e é identificada por um índice. Se v é
                            um vetor com n posições, seus elementos são 
                            
<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>v[0],v[1],v[2]..v[n-1].
            </code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;">v[<span class="hljs-number" style="color: rgb(147, 92, 37);">0</span>],v[<span class="hljs-number" style="color: rgb(147, 92, 37);">1</span>],v[<span class="hljs-number" style="color: rgb(147, 92, 37);">2</span>]..v[n-<span class="hljs-number" style="color: rgb(147, 92, 37);">1</span>].
</code></pre>
</div>
                            Em C os vetores são sempre indexados a partir de zero e, portanto, o último
                            elemento de um vetor de tamanho n ocupa a posição n−1 do vetor.
                            Para criar um vetor, basta declarar uma variável com sufixo [n], sendo n
                            uma constante indicando o número de elementos a serem alocados no vetor. 
                            Um vetor para armazenar 5 números inteiros pode ser criado
                            da seguinte maneira: 
<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int v[5];
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> v[<span class="hljs-number" style="color: rgb(147, 92, 37);">5</span>];
</code></pre>
</div>
                            A palavra int indica que o vetor v é um grupo de variáveis inteiras e o sufixo
                            [5] especifica que esse grupo possui cinco elementos. Como em C os vetores
                            são indexados a partir de 0, os elementos de v são v[0], v[1], v[2], v[3] e v[4].
                        <div class="text-center">
                            <a href="/curso/programacao/vetores/parte-2">
                                <button class=" mt-5 btn btn-success">Avançar</button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
