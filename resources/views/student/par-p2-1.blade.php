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
                <div class="card-header text-center">Moulo 2 - Parametros</div>

                <div class="card-body" style="padding: 0 0 150px 0 ;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="m-3">
						



<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);">
    <h2 id="curso-vetor" style="clear: both;font-size: 1.8em; font-weight: bold; margin: 1.275em 0px 0.85em;margin-top: 0px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(230, 230, 230); line-height: 1.6;"><a name="curso-vetor" href="#curso-vetor" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);">
    </a>
       Acompanhe o teste de mesa
    </h2>

    <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>1  #include &amp;lt;stdio.h&amp;gt;
2  void incrementa_num(int num){    
3     num = mum + 1;              
4  }
5  int main(){
6      int num;
7     num = 10;
8     incrementa_num(num);
9     printf(&quot;Num: %d\n&quot;, num);
10    return 0;     
11  }
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;"><span class="hljs-number" style="color: rgb(249, 155, 21);">1</span>  <span class="hljs-preprocessor" style="color: rgb(249, 155, 21);">#<span class="hljs-keyword" style="color: rgb(129, 91, 164);">include</span> &lt;stdio.h&gt;</span>
<span class="hljs-number" style="color: rgb(249, 155, 21);">2</span>  <span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">void</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">incrementa_num</span><span class="hljs-params" style="color: rgb(249, 155, 21);">(<span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> num)</span></span>{    
<span class="hljs-number" style="color: rgb(249, 155, 21);">3</span>     num = mum + <span class="hljs-number" style="color: rgb(249, 155, 21);">1</span>;              
<span class="hljs-number" style="color: rgb(249, 155, 21);">4</span>  }
<span class="hljs-number" style="color: rgb(249, 155, 21);">5</span>  <span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">main</span><span class="hljs-params" style="color: rgb(249, 155, 21);">()</span></span>{
<span class="hljs-number" style="color: rgb(249, 155, 21);">6</span>      <span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> num;
<span class="hljs-number" style="color: rgb(249, 155, 21);">7</span>     num = <span class="hljs-number" style="color: rgb(249, 155, 21);">10</span>;
<span class="hljs-number" style="color: rgb(249, 155, 21);">8</span>     incrementa_num(num);
<span class="hljs-number" style="color: rgb(249, 155, 21);">9</span>     <span class="hljs-built_in" style="color: rgb(249, 155, 21);">printf</span>(<span class="hljs-string" style="color: rgb(72, 182, 133);">"Num: %d\n"</span>, num);
<span class="hljs-number" style="color: rgb(249, 155, 21);">10</span>    <span class="hljs-keyword" style="color: rgb(129, 91, 164);">return</span> <span class="hljs-number" style="color: rgb(249, 155, 21);">0</span>;     
<span class="hljs-number" style="color: rgb(249, 155, 21);">11</span>  }
</code></pre></div>
    <p style="margin-top: 0px;margin: 1em 0px; word-wrap: break-word;">
        Na linha 2 é crianda uma função incrementa_num 
        que recebe um valor do tipo inteiro e na linha 3 soma 1 ao valor recebido.
        <p></p>
        Na linha 6 é declarada uma variavel do tipo inteiro que posteriormente recebe o valor 10
        na linha 7, esse valor é passado para a função incrementa_num na linha 8, porém ao executar o printf()
        da linha 9 notamos que o valor 10 atribuido inicialmente a variavel aparece na tela. Isso ocorre devido ao
        fato de que o parâmetro passado para função foi uma copia do valor original, o incremento ocorre na linha 3
        porém não afeta o valor da variavel num na função main(). 
        <p></p>
        Para entendermos como essa variavel é modificada localmente pela função incrementa_num colocaremos o 
        printf() dentro da função, confira no exemplo abaixo:
    </p>
    <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>1  #include &amp;lt;stdio.h&amp;gt;
2  void incrementa_num(int num){    
3     num = mum + 1;
4     printf(&quot;Num: %d\n&quot;, num);
5  }
6  int main(){
7     int num;
8     num = 10;
9     incrementa_num(num);    
10     return 0;     
11  }
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;"><span class="hljs-number" style="color: rgb(249, 155, 21);">1</span>  <span class="hljs-preprocessor" style="color: rgb(249, 155, 21);">#<span class="hljs-keyword" style="color: rgb(129, 91, 164);">include</span> &lt;stdio.h&gt;</span>
<span class="hljs-number" style="color: rgb(249, 155, 21);">2</span>  <span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">void</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">incrementa_num</span><span class="hljs-params" style="color: rgb(249, 155, 21);">(<span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> num)</span></span>{    
<span class="hljs-number" style="color: rgb(249, 155, 21);">3</span>     num = mum + <span class="hljs-number" style="color: rgb(249, 155, 21);">1</span>;
<span class="hljs-number" style="color: rgb(249, 155, 21);">4</span>     <span class="hljs-built_in" style="color: rgb(249, 155, 21);">printf</span>(<span class="hljs-string" style="color: rgb(72, 182, 133);">"Num: %d\n"</span>, num);
<span class="hljs-number" style="color: rgb(249, 155, 21);">5</span>  }
<span class="hljs-number" style="color: rgb(249, 155, 21);">6</span>  <span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">main</span><span class="hljs-params" style="color: rgb(249, 155, 21);">()</span></span>{
<span class="hljs-number" style="color: rgb(249, 155, 21);">7</span>     <span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> num;
<span class="hljs-number" style="color: rgb(249, 155, 21);">8</span>     num = <span class="hljs-number" style="color: rgb(249, 155, 21);">10</span>;
<span class="hljs-number" style="color: rgb(249, 155, 21);">9</span>     incrementa_num(num);    
<span class="hljs-number" style="color: rgb(249, 155, 21);">10</span>     <span class="hljs-keyword" style="color: rgb(129, 91, 164);">return</span> <span class="hljs-number" style="color: rgb(249, 155, 21);">0</span>;     
<span class="hljs-number" style="color: rgb(249, 155, 21);">11</span>  }
</code></pre></div>
   
            

    <p style="margin: 1em 0px; word-wrap: break-word;">
        Se executarmos o programa notaremos que o valor mostrado na tela e o numero 11, toda e qualquer manipulação
        realizada com a copia da variável dentro dessa função não afetara o valor real da variavel num na finção main().
        vejamos como seria esse teste de mesa se passarmos a variável num por referência:
    </p>
    <h2 id="curso-vetor" style="clear: both;font-size: 1.8em; font-weight: bold; margin: 1.275em 0px 0.85em;margin-top: 0px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(230, 230, 230); line-height: 1.6;"><a name="curso-vetor" href="#curso-vetor" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);">
        </a>

    </h2>
    <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>1  #include &amp;lt;stdio.h&amp;gt;
2  void incrementa_num(int *num){    
3     *num = *mum + 1;              
4  }
5  int main(){
6      int num;
7     num = 10;
8     incrementa_num(&amp;amp;num);
9     printf(&quot;Num: %d\n&quot;, num);
10     return 0;     
11  }
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;"><span class="hljs-number" style="color: rgb(249, 155, 21);">1</span>  <span class="hljs-preprocessor" style="color: rgb(249, 155, 21);">#<span class="hljs-keyword" style="color: rgb(129, 91, 164);">include</span> &lt;stdio.h&gt;</span>
<span class="hljs-number" style="color: rgb(249, 155, 21);">2</span>  <span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">void</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">incrementa_num</span><span class="hljs-params" style="color: rgb(249, 155, 21);">(<span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> *num)</span></span>{    
<span class="hljs-number" style="color: rgb(249, 155, 21);">3</span>     *num = *mum + <span class="hljs-number" style="color: rgb(249, 155, 21);">1</span>;              
<span class="hljs-number" style="color: rgb(249, 155, 21);">4</span>  }
<span class="hljs-number" style="color: rgb(249, 155, 21);">5</span>  <span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">main</span><span class="hljs-params" style="color: rgb(249, 155, 21);">()</span></span>{
<span class="hljs-number" style="color: rgb(249, 155, 21);">6</span>      <span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> num;
<span class="hljs-number" style="color: rgb(249, 155, 21);">7</span>     num = <span class="hljs-number" style="color: rgb(249, 155, 21);">10</span>;
<span class="hljs-number" style="color: rgb(249, 155, 21);">8</span>     incrementa_num(&amp;num);
<span class="hljs-number" style="color: rgb(249, 155, 21);">9</span>     <span class="hljs-built_in" style="color: rgb(249, 155, 21);">printf</span>(<span class="hljs-string" style="color: rgb(72, 182, 133);">"Num: %d\n"</span>, num);
<span class="hljs-number" style="color: rgb(249, 155, 21);">10</span>     <span class="hljs-keyword" style="color: rgb(129, 91, 164);">return</span> <span class="hljs-number" style="color: rgb(249, 155, 21);">0</span>;     
<span class="hljs-number" style="color: rgb(249, 155, 21);">11</span>  }
</code></pre></div>
    <p style="margin-top: 0px;margin: 1em 0px; word-wrap: break-word;">
       Notamos que agora na linha 2 não temos mais uma variavel que recebe uma cópia,
       e sim um ponteiro que aponta para o endereço de memória ao qual se encontra a variável, podemos
       notar também na linha 8 que nâo é passado o valor da variável num, e sim o endereço da mesma através
       do caracter &. Feito isso toda manipulação realizada na linha 3 afeta diretamente o valor real da variável
       num na função main(). Outro exemplo da ultilização da passagem por referência é a utilização do 
       comando scanf() mostrado abaixo: 
    </p>
   <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>  #include &amp;lt;stdio.h&amp;gt;
  int main(){
  int num;
     num;
     scanf(&quot;Digite um numero: %d&quot;, &amp;amp;num),
     return 0;     
  }
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;">  <span class="hljs-preprocessor" style="color: rgb(249, 155, 21);">#<span class="hljs-keyword" style="color: rgb(129, 91, 164);">include</span> &lt;stdio.h&gt;</span>
  <span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">main</span><span class="hljs-params" style="color: rgb(249, 155, 21);">()</span></span>{
  <span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> num;
     <span class="hljs-built_in" style="color: rgb(249, 155, 21);">scanf</span>(<span class="hljs-string" style="color: rgb(72, 182, 133);">"Digite um numero: %d"</span>, &amp;num),
     <span class="hljs-keyword" style="color: rgb(129, 91, 164);">return</span> <span class="hljs-number" style="color: rgb(249, 155, 21);">0</span>;     
  }
</code></pre></div>

    <p>
        Note que é passado o endereço da variável num, através novamente do caracter &, isso garante que 
        o valor recebido seja atribuido à variável em seu endereço de memória.
    </p>
    <div class="text-center">
        <a href="/curso/programacao/parametros/parte-2">
            <button class=" mt-5 btn btn-success">Voltar</button>
        </a>
    <a href="/curso/programacao/parametros/parte-3">
        <button class=" mt-5 btn btn-success">Avançar</button>
    </a>
</div>            
</div>
@endsection
