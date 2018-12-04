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
        Passagem de parâmetro por valor     
    </h2>
    <p style="margin-top: 0px;margin: 1em 0px; word-wrap: break-word;">
        A passagem de parâmetro por valor permite usar dentro de uma função uma cópia do valor de uma variável,
        porém não permite alterar o valor da variável original ou seja
        a alteração no valor das variáveis terá efeito local na função chamada
        <p></p>
        Este tipo de chamada de função é denominada chamada por valor. Isto ocorre porque são passados para a função apenas os
        valores dos parâmetros e não os próprios parâmetros. Veja o exemplo abaixo:
    </p>
    <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(115, 115, 115); font-size: 15px; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(140, 166, 140); padding: 0.5em; background: rgb(36, 41, 36);"><code class="CPP" data-origin="<pre><code class=&quot;CPP&quot;>#include
    void troca(int a, int b){
        int temp;
        temp = a;
        a = b;
        b = temp;
    }
    int main(){
        int a = 2,b = 3;
        printf(&quot;Antes de chamar a função :\na=%d\nb=%d\n&quot;,a,b);
        troca(a,b);
        printf(&quot;Depois de chamar a função:\na=%d\nb=%d\n&quot;,a,b);
        return 0;
    }
    </code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em;"><span class="hljs-preprocessor" style="color: rgb(135, 113, 29);"></span>
    <span class="hljs-function" style="color: rgb(61, 98, 245);"><span class="hljs-keyword" style="color: rgb(173, 43, 238);">void</span> <span class="hljs-title" style="color: rgb(128, 153, 128);">troca</span><span class="hljs-params" style="color: rgb(135, 113, 29);">(<span class="hljs-keyword" style="color: rgb(173, 43, 238);">int</span> a, <span class="hljs-keyword" style="color: rgb(173, 43, 238);">int</span> b)</span></span>{
        <span class="hljs-keyword" style="color: rgb(173, 43, 238);">int</span> temp;
        temp = a;
        a = b;
        b = temp;
    }
    <span class="hljs-function" style="color: rgb(61, 98, 245);"><span class="hljs-keyword" style="color: rgb(173, 43, 238);">int</span> <span class="hljs-title" style="color: rgb(128, 153, 128);">main</span><span class="hljs-params" style="color: rgb(135, 113, 29);">()</span></span>{
        <span class="hljs-keyword" style="color: rgb(173, 43, 238);">int</span> a = <span class="hljs-number" style="color: rgb(135, 113, 29);">2</span>,b = <span class="hljs-number" style="color: rgb(135, 113, 29);">3</span>;
        <span class="hljs-built_in" style="color: rgb(135, 113, 29);">printf</span>(<span class="hljs-string" style="color: rgb(41, 163, 41);">"Antes de chamar a função :\n a=%d \n b=%d \n"</span>,a,b);
        troca(a,b);
        <span class="hljs-built_in" style="color: rgb(135, 113, 29);">printf</span>(<span class="hljs-string" style="color: rgb(41, 163, 41);">"Depois de chamar a função:\n a=%d \n b=%d \n"</span>,a,b);
        <span class="hljs-keyword" style="color: rgb(173, 43, 238);">return</span> <span class="hljs-number" style="color: rgb(135, 113, 29);">0</span>;
    }
    </code></pre>
    </div>   
            

    <p style="margin: 1em 0px; word-wrap: break-word;">
        No exemplo acima os parâmetros formais "a" e "b" da função troca() sofrem
        alterações dentro da função, mas as mesmas variáveis na função main() permanecem
        inalteradas: é uma chamada por valor, temos como saida: 
        <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(115, 115, 115); font-size: 15px; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><p style="margin: 1em 0px; word-wrap: break-word;"><img src="https://gracianotorrao.files.wordpress.com/2008/05/1.png" alt="" style="max-width: 100%;"></p></div>
    </p>
    <h2 id="curso-vetor" style="clear: both;font-size: 1.8em; font-weight: bold; margin: 1.275em 0px 0.85em;margin-top: 0px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(230, 230, 230); line-height: 1.6;"><a name="curso-vetor" href="#curso-vetor" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);">
        </a>
            Passagem de parâmetro por referência
    </h2>
    <p style="margin-top: 0px;margin: 1em 0px; word-wrap: break-word;">
        Na passagem de parâmetros por referência é passada para a função uma referência da variável, 
        ao usá-la é possível alterar o conteúdo da variável original.        
        Na linguagem C a passagem por referência é implementada usando ponteiros (também 
        chamados de apontadores) a função utilizada dessa forma é denominada função com passagem
        por referência assim como apresentado no código a seguir. Nesse tipo de função, os argumentos passam os endereços de memória para os 
        parâmetros declarados na função. 
        <p>
        Sendo assim, os parâmetros que recebem os valores passados obrigatoriamente têm que ser ponteiros já que irão receber um endereço de memória.

        As alterações feitas dentro da função têm efeito direto nas variáveis passadas como argumentos na chamada. Isto proporciona a oportunidade de retornar vários valores em uma única função já que as alterações ocorrem diretamente nas variáveis.
    </p>
    <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>#include
        void troca(int *a, int *b){
                int temp;
                temp = *a;
                *a = *b;
                *b = temp;
        }
        int main(){
                int a=2,b=3;
                printf(&quot;Antes de chamar a função :\na=%d\nb=%d\n&quot;,a,b);
                troca(&amp;amp;a,&amp;amp;b);
                printf(&quot;Depois de chamar a função:\na=%d\nb=%d\n&quot;,a,b);
                return 0;
        }
        </code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-preprocessor" style="color: rgb(147, 92, 37);"></span>
<span class="hljs-function" style="color: rgb(37, 127, 173);"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">void</span> <span class="hljs-title" style="color: rgb(113, 149, 168);">troca</span><span class="hljs-params" style="color: rgb(147, 92, 37);">(<span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> *a, <span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> *b)</span></span>{
        <span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> temp;
        temp = *a;
        *a = *b;
        *b = temp;
}
<span class="hljs-function" style="color: rgb(37, 127, 173);"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> <span class="hljs-title" style="color: rgb(113, 149, 168);">main</span><span class="hljs-params" style="color: rgb(147, 92, 37);">()</span></span>{
        <span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> a = <span class="hljs-number" style="color: rgb(147, 92, 37);">2</span>,b = <span class="hljs-number" style="color: rgb(147, 92, 37);">3</span>;
        <span class="hljs-built_in" style="color: rgb(147, 92, 37);">printf</span>(<span class="hljs-string" style="color: rgb(86, 140, 59);">"Antes de chamar a função :\n a=%d \n b=%d \n"</span>,a,b);
        troca(&amp;a,&amp;b);
        <span class="hljs-built_in" style="color: rgb(147, 92, 37);">printf</span>(<span class="hljs-string" style="color: rgb(86, 140, 59);">"Depois de chamar a função:\n a=%d \n b=%d \n"</span>,a,b);
        <span class="hljs-keyword" style="color: rgb(93, 93, 177);">return</span> <span class="hljs-number" style="color: rgb(147, 92, 37);">0</span>;
}
        </code></pre></div>

        <p style="margin: 1em 0px; word-wrap: break-word;">
        Do exemplo acima os parâmetros passados por referência "a" e "b" da função troca() sofrem
        alterações dentro da função, mas ao mesmo tempo alteram as variáveis na função main(). Ao
        executar o código temos a seguinte saida.
        
             <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(115, 115, 115); font-size: 15px; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><p style="margin: 1em 0px; word-wrap: break-word;"><img src="https://gracianotorrao.files.wordpress.com/2008/05/3.png" alt="" style="max-width: 100%;"></p></div>
         </p>
    		
    <div class="text-center">
        <a href="/curso/programacao/parametros/parte-2">
            <button class=" mt-5 btn btn-success">Avançar</button>
        </a>
    </div>
                   
</div>
@endsection