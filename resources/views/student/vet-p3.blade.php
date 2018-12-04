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
                               Inicialização
                        </h2>
                        Em C, vetores globais e estáticos são automaticamente zerados pelo compilador.
                        Mas, se for desejado, podemos inicializá-los explicitamente no momento
                        em os declaramos4. Nesse caso, os valores iniciais devem ser fornecidos entre
                        chaves e separados por vírgulas ex:
                        <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>#include &amp;lt;stdio.h&amp;gt;
void main(void) {
    static float moeda[5] = {1.00, 0.50, 0.25, 0.10, 0.05};
    ...
}
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-preprocessor" style="color: rgb(147, 92, 37);">#<span class="hljs-keyword" style="color: rgb(93, 93, 177);">include</span> &lt;stdio.h&gt;</span>
<span class="hljs-function" style="color: rgb(37, 127, 173);"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">void</span> <span class="hljs-title" style="color: rgb(113, 149, 168);">main</span><span class="hljs-params" style="color: rgb(147, 92, 37);">(<span class="hljs-keyword" style="color: rgb(93, 93, 177);">void</span>)</span> </span>{
    <span class="hljs-keyword" style="color: rgb(93, 93, 177);">static</span> <span class="hljs-keyword" style="color: rgb(93, 93, 177);">float</span> moeda[<span class="hljs-number" style="color: rgb(147, 92, 37);">5</span>] = {<span class="hljs-number" style="color: rgb(147, 92, 37);">1.00</span>, <span class="hljs-number" style="color: rgb(147, 92, 37);">0.50</span>, <span class="hljs-number" style="color: rgb(147, 92, 37);">0.25</span>, <span class="hljs-number" style="color: rgb(147, 92, 37);">0.10</span>, <span class="hljs-number" style="color: rgb(147, 92, 37);">0.05</span>};
    ...
}
</code></pre>
                            </div>    
                            Os valores são armazenados, a partir da posição 0 do vetor, na ordem em que
                            são fornecidos; por exemplo, o valor 0.25 é armazenado em moeda[2]. 
                            Note que apenas expressões e valores constantes são permitidas numa lista
                            de valores iniciais. O uso de variáveis causa erro de compilação.
                            Se a lista de valores iniciais tem mais elementos que a capacidade do vetor,
                            ocorre um erro de compilação. Entretanto, se tem menos que o necessário, as
                            posições excedentes do vetor permanecem zeradas. 
                            <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>#include &amp;lt;stdio.h&amp;gt;
#define max 5
void main(void) {
        static int A[max] = {9, 3, 2, 7};
        auto int i;
        for(i=0; i&amp;lt;max; i++)
        printf(&quot;%d&quot;, A[i]);
}
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-preprocessor" style="color: rgb(147, 92, 37);">#<span class="hljs-keyword" style="color: rgb(93, 93, 177);">include</span> &lt;stdio.h&gt;</span>
<span class="hljs-preprocessor" style="color: rgb(147, 92, 37);">#<span class="hljs-keyword" style="color: rgb(93, 93, 177);">define</span> max 5</span>
<span class="hljs-function" style="color: rgb(37, 127, 173);"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">void</span> <span class="hljs-title" style="color: rgb(113, 149, 168);">main</span><span class="hljs-params" style="color: rgb(147, 92, 37);">(<span class="hljs-keyword" style="color: rgb(93, 93, 177);">void</span>)</span> </span>{
        <span class="hljs-keyword" style="color: rgb(93, 93, 177);">static</span> <span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> A[max] = {<span class="hljs-number" style="color: rgb(147, 92, 37);">9</span>, <span class="hljs-number" style="color: rgb(147, 92, 37);">3</span>, <span class="hljs-number" style="color: rgb(147, 92, 37);">2</span>, <span class="hljs-number" style="color: rgb(147, 92, 37);">7</span>};
        <span class="hljs-keyword" style="color: rgb(93, 93, 177);">auto</span> <span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> i;
        <span class="hljs-keyword" style="color: rgb(93, 93, 177);">for</span>(i=<span class="hljs-number" style="color: rgb(147, 92, 37);">0</span>; i&lt;max; i++)
        <span class="hljs-built_in" style="color: rgb(147, 92, 37);">printf</span>(<span class="hljs-string" style="color: rgb(86, 140, 59);">"%d"</span>, A[i]);
}
</code></pre>
                                </div>
                                Os valores iniciais 9, 3, 2 e 7 são armazenados em A[0], A[1], A[2] e A[3], respectivamente,
                                permanecendo as demais posições, A[4] e A[5], zeradas.

                        <div class="text-center">
                                <a href="/curso/programacao/vetores/parte-2">
                                    <button class=" mt-5 btn btn-success">Voltar</button>
                                </a>
                            <a href="/curso/programacao/vetores/parte-4">
                                <button class=" mt-5 btn btn-success">Avançar</button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
