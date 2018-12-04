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
<form action="/curso/programacao/vetores/quest-1" method="POST" enctype="multipart/form-data">
	{!! csrf_field() !!}
	<h2 id="curso-vetor" style="clear: both;font-size: 1.8em; font-weight: bold; margin: 1.275em 0px 0.85em;margin-top: 0px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(230, 230, 230); line-height: 1.6;"><a name="curso-vetor" href="#curso-vetor" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);">
		</a>
			Exercicios
	</h2>
	<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
		1) Assinale a opção correspondente ao resultado que seria impresso para a variável Valor, 
		após a execução do trecho de código escrito em linguagem C  abaixo.
	</h5></div>
	
	
	
<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>#include &amp;lt;stdlib.h&amp;gt;
#include &amp;lt;stdio.h&amp;gt;

int main () {
    int vetor[] = {1967, 1947, 2007, 2022};
    int i = 0;
    int j = vetor[++i];
    int k = vetor[i++];
    printf(&quot;i = %d   j = %d   k = %d  \n&quot;, i,j,k);
    return 0; 
}
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;"><span class="hljs-preprocessor" style="color: rgb(249, 155, 21);">#<span class="hljs-keyword" style="color: rgb(129, 91, 164);">include</span> &lt;stdlib.h&gt;</span>
<span class="hljs-preprocessor" style="color: rgb(249, 155, 21);">#<span class="hljs-keyword" style="color: rgb(129, 91, 164);">include</span> &lt;stdio.h&gt;</span>

<span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">main</span> <span class="hljs-params" style="color: rgb(249, 155, 21);">()</span> </span>{
    <span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> vetor[] = {<span class="hljs-number" style="color: rgb(249, 155, 21);">1967</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">1947</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">2007</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">2022</span>};
    <span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> i = <span class="hljs-number" style="color: rgb(249, 155, 21);">0</span>;
    <span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> j = vetor[++i];
    <span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> k = vetor[i++];
    <span class="hljs-built_in" style="color: rgb(249, 155, 21);">printf</span>(<span class="hljs-string" style="color: rgb(72, 182, 133);">"i = %d   j = %d   k = %d  \n"</span>, i,j,k);
    <span class="hljs-keyword" style="color: rgb(129, 91, 164);">return</span> <span class="hljs-number" style="color: rgb(249, 155, 21);">0</span>; 
}
</code></pre></div>
	<div class="radio">
		<label><input type="radio" name="optradio1" value="a">
			A) i = 2   j = 1947   k = 1967 
		</label>
	</div>
	<div class="radio disabled">
		<label><input type="radio" name="optradio1" value="b">
			B) i = 2   j = 1967   k = 1947 
			
		</label>
	</div>
	<div class="radio disabled">
		<label><input type="radio" name="optradio1" value="c"> 
			C) i = 2   j = 1947   k = 1947 
		</label>
	</div>
	<div class="radio disabled">
		<label><input type="radio" name="optradio1" value="d">
			D) i = 3   j = 1947   k = 2007 
		</label>
	</div>
	<div class="radio disabled">
		<label><input type="radio" name="optradio1" value="d">
			E) i = 3   j = 2022   k = 1947
		</label>
	</div>

	<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
		2) Vetores são utilizados quando estruturas indexadas necessitam de mais que um índice para identificar um de seus elementos.
	</h5></div>
	
	
	<div class="radio">
		<label><input type="radio" name="optradio2" value="a">
			A) Certo
		</label>
	</div>
	<div class="radio disabled">
		<label><input type="radio" name="optradio2" value="b">
			B) Errado
		</label>
	</div>
	
	<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
		3)	Vetores podem ser considerados como listas de informações armazenadas em posição contígua na memória.
	</h5></div>
	
	
	<div class="radio">
		<label><input type="radio" name="optradio3" value="a">
			A) Certo
		</label>
	</div>
	<div class="radio disabled">
		<label><input type="radio" name="optradio3" value="b">
			B) Errado
		</label>
	</div>
	
	<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
	4) A declaração de vetores obedece à mesma sintaxe da declaração de variáveis. A diferença
	está no valor entre colchetes, que determina quantos elementos ele armazenará, ou seja, em
	outras palavras, determina o seu tamanho ou dimensão. Marque nas opções abaixo qual a forma incorreta
	de se declarar um vetor.
	</h5></div>
	
	
	<div class="radio">
	<label><input type="radio" name="optradio4" value="a">
		A) <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int vetor[10];
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> vetor[<span class="hljs-number" style="color: rgb(147, 92, 37);">10</span>];
</code></pre></div>
	</label>
	</div>
	<div class="radio disabled">
	<label><input type="radio" name="optradio4" value="b">
	 B) <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int vetor[] = {1,2,3...,10};
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> vetor[] = {<span class="hljs-number" style="color: rgb(147, 92, 37);">1</span>,<span class="hljs-number" style="color: rgb(147, 92, 37);">2</span>,<span class="hljs-number" style="color: rgb(147, 92, 37);">3.</span>..,<span class="hljs-number" style="color: rgb(147, 92, 37);">10</span>};
</code></pre>
		</div>
	</label>
	</div>
	<div class="radio disabled">
		<label><input type="radio" name="optradio4" value="c">
	C) <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int tamanho = 10;
int vetor[] = {tamanho*2};
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> tamanho = <span class="hljs-number" style="color: rgb(147, 92, 37);">10</span>;
<span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> vetor[] = {tamanho*<span class="hljs-number" style="color: rgb(147, 92, 37);">2</span>};
</code></pre></div>
		</label>
	</div>
	<div class="radio disabled">
	<label><input type="radio" name="optradio4" value="d">
D) <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int vetor[n] = { elem.0, elem.1, elem.2, elem.3, ... elem.n-1 };
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> vetor[n] = { elem.0, elem.1, elem.2, elem.3, ... elem.n-<span class="hljs-number" style="color: rgb(147, 92, 37);">1</span> };
</code></pre></div>
</label>
</div>

	<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
		5) Dado o código abaixo. Por qual motivo ele não compila?
	</h5></div>
	<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>#include &amp;lt;stdlib.h&amp;gt;
#include &amp;lt;stdio.h&amp;gt;

int main (){
    int vetor[] = { 1, 2, 3, 4 };
    int vetor_copia[5];
    vetor_copia = vetor; 
}
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;"><span class="hljs-preprocessor" style="color: rgb(249, 155, 21);">#<span class="hljs-keyword" style="color: rgb(129, 91, 164);">include</span> &lt;stdlib.h&gt;</span>
<span class="hljs-preprocessor" style="color: rgb(249, 155, 21);">#<span class="hljs-keyword" style="color: rgb(129, 91, 164);">include</span> &lt;stdio.h&gt;</span>

<span class="hljs-function" style="color: rgb(6, 182, 239);"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> <span class="hljs-title" style="color: rgb(141, 134, 135);">main</span> <span class="hljs-params" style="color: rgb(249, 155, 21);">()</span></span>{
    <span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> vetor[] = { <span class="hljs-number" style="color: rgb(249, 155, 21);">1</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">2</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">3</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">4</span> };
    <span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> vetor_copia[<span class="hljs-number" style="color: rgb(249, 155, 21);">5</span>];
    vetor_copia = vetor; 
}
</code></pre></div>

	<div class="radio">
	<label><input type="radio" name="optradio5" value="a">
		A) Pois o vetor <code> int vetor[] = { 1, 2, 3, 4 }; </code> é de tamanho 4, enquanto o <code>vetor_copia[5] </code> é de tamanho 5.
	</label>
	</div>
	<div class="radio">
	<label><input type="radio" name="optradio5" value="b">
		B) Pois é necessário passar os valores dentro dos colchetes, da seguinte forma:
		<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int vetor[] = { 1, 2, 3, 4 };
int vetor_copia[1, 2, 3, 4];
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> vetor[] = { <span class="hljs-number" style="color: rgb(249, 155, 21);">1</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">2</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">3</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">4</span> };
<span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> vetor_copia[<span class="hljs-number" style="color: rgb(249, 155, 21);">1</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">2</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">3</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">4</span>];
</code></pre></div>
	</label>
	</div>

	<div class="radio">
	<label><input type="radio" name="optradio5" value="c">
		C) Pois para copiar um vetor é necessário passar o vetor como parâmetro, da seguinte forma:
		<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int vetor[] = { 1, 2, 3, 4 };
int vetor_copia[vetor];
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> vetor[] = { <span class="hljs-number" style="color: rgb(249, 155, 21);">1</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">2</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">3</span>, <span class="hljs-number" style="color: rgb(249, 155, 21);">4</span> };
<span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> vetor_copia[vetor];
</code></pre></div>
	</label>
	</div>

	<div class="radio">
	<label><input type="radio" name="optradio5" value="d">
		D) A linguagem C não aceita cópia direta de vetor, isto é, atribuir um vetor aoutro, da forma como foi apresentada. 
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
