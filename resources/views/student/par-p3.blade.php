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
                    <div class="card-header text-center">Modulo 2 - Parametros Questionario</div>
    
                    <div class="card-body" style="padding: 0 0 150px 0 ;">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <div class="m-3">
                            <form action="/curso/programacao/parametros/quest-1" method="POST" enctype="multipart/form-data">
                                {!! csrf_field() !!}

                                <h2 id="curso-vetor" style="clear: both;font-size: 1.8em; font-weight: bold; margin: 1.275em 0px 0.85em;margin-top: 0px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(230, 230, 230); line-height: 1.6;"><a name="curso-vetor" href="#curso-vetor" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);">
                                    </a>
                                        Exercicios
                                </h2>
                               
                                <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
                                1) Na passagem de parâmetro por referência, é possível alterar o valor da variável que é apontada por referência.
                                </h5></div>
                                 
                                    
                                <div class="radio">
                                    <label><input type="radio" name="optradio1" value="a">
                                        Certo
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio1" value="b">
                                        Errado
                                    </label>
                                </div>
                                       
                                 <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
                                    2)  Assinale com V (verdadeiro) ou F (falso) as seguintes afirmações sobre passagem de parâmetros em linguagens de programação estruturadas. 
                                    <p>
                                    ( ) Na passagem de parâmetros por valor, o valor do parâmetro real é usado para inicializar o parâmetro formal correspondente, que, então, age como uma variável local no subprograma. 
                                    </p>
                                    <p>
                                    ( ) Parâmetros reais permitem definir um argumento para um parâmetro específico, associando o argumento ao nome do parâmetro, em vez da posição do parâmetro na lista de parâmetros. 
                                    </p>
                                    <p>
                                    ( ) O método de passagem de parâmetros por referência transmite um caminho de acesso, usualmente apenas um endereço, para o subprograma chamado. 
                                    </p>
                                     <p>
                                    ( ) Na passagem de parâmetro por nome, o parâmetro real é copiado para o parâmetro formal na entrada da função e depois é copiado de volta na finalização da função. 
                                    A sequência correta de preenchimento dos parênteses, de cima para baixo, é
                                </p>
                                </h5></div> 

                               
                                <div class="radio">
                                    <label><input type="radio" name="optradio2" value="a">
                                        A) V – F – F – V.
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio2" value="b">
                                        B) F – V – V – F.
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio2" value="c">
                                        C) F – F – V – V
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio2" value="d">
                                        D) V – V – F – F
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio2" value="d">
                                        E) V – F – V – F.
                                        </label>
                                    </div>
    
                               <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
                                3) Há duas maneiras de se passar argumentos ou parâmetros para funções: por valor e por referência. Todas as afirmativas sobre passagem de parâmetros estão corretas, EXCETO:
                                </h5></div>
                                
                                <div class="radio">
                                    <label><input type="radio" name="optradio3" value="a">
                                        A) Na passagem por referência, o que é passado como argumento no parâmetro formal é o endereço da variável. 
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio3" value="b">
                                        B) Na passagem por valor, o valor é copiado do argumento para o parâmetro formal da função. 
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio3" value="c">
                                        C) Por exemplo, quando duas variáveis inteiras i1 e i2 são passadas por valor à função troca() chamada pelo programa principal, elas também são alteradas no programa principal. 
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio3" value="d">
                                        D) Na passagem por referência, dentro da função, o argumento real utilizado na chamada é acessado através do seu endereço, sendo assim alterado. 
                                    </label>
                                </div>
                                <div class="radio disabled">
                                        <label><input type="radio" name="optradio3" value="d">
                                        E) Na passagem por valor, quaisquer alterações feitas nestes parâmetros dentro da função não irão afetar as variáveis usadas como argumentos para chamá-la. 
                                        </label>
                                    </div>
                                <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
                                   
                                4) Na definição de funções ou procedimentos, a passagem de parâmetros pode ser feita por valor ou por referência. Na primeira forma, o argumento passado para a função ou o procedimento necessariamente manterá o seu valor depois que essa função (ou esse procedimento) terminarem a execução, enquanto na passagem por referência não existe essa garantia.
                                </h5></div>
               
                                <div class="radio">
                                    <label><input type="radio" name="optradio4" value="a">
                                        A) Certo
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio4" value="b">
                                        B) Errado
                                    </label>
                                </div>
                               

                                <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
                                    5) Qual e a saida do codigo abaixo?
                                </h5></div>
<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>#include &amp;lt;stdio.h&amp;gt;
    void Zera(float a){
        a = 0;
    }
    
    void main(){
        float f;
        f = 20.7;
        Zera(f);
        printf(&quot;%d&quot;, f); 
    }
    </code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;"><span class="hljs-preprocessor" style="color: rgb(249, 155, 21);">#<span class="hljs-keyword" style="color: rgb(129, 91, 164);">include</span> &lt;stdio.h&gt;</span>
    <span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">void</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">Zera</span><span class="hljs-params" style="color: rgb(249, 155, 21);">(<span class="hljs-keyword" style="color: rgb(129, 91, 164);">float</span> a)</span></span>{
        a = <span class="hljs-number" style="color: rgb(249, 155, 21);">0</span>;
    }
    
    <span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">void</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">main</span><span class="hljs-params" style="color: rgb(249, 155, 21);">()</span></span>{
        <span class="hljs-keyword" style="color: rgb(129, 91, 164);">float</span> f;
        f = <span class="hljs-number" style="color: rgb(249, 155, 21);">20.7</span>;
        Zera(f);
        <span class="hljs-built_in" style="color: rgb(249, 155, 21);">printf</span>(<span class="hljs-string" style="color: rgb(72, 182, 133);">"%d"</span>, f); 
    }
    </code></pre>
</div>
                                
                                
                                <div class="r   adio">
                                    <label><input type="radio" name="optradio5" value="a">
                                        A) O valor impresso será 0 pois a função zera o valor recebido.
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio5" value="b">
                                        B) O valor impresso será 20.7 pois o parâmetro da função foi passado por valor.
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio5" value="c">
                                        C) O valor impresso será 20.7 pois o parâmetro da função foi passado por referência e
                                        para permitir a alteração da variável usada como parâmetro é preciso passar o endereço da variável.
                                    </label>
                                </div>
                                <div class="radio disabled">
                                    <label><input type="radio" name="optradio5  " value="d">
                                        D) O valor impresso será 20.7 pois e necessário passar o endereço de uma variável para uma função 
                                        para que ela não seja alterada. 
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-danger">Enviar</button>
                                </div>
    
                            </form>
    
                                  
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    