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
					<div class="card-header text-center">Moulo 1 - Vetores - Questionario 2</div>
	
					<div class="card-body" style="padding: 0 0 150px 0 ;">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif
						
						<div class="m-3">
							<form action="/curso/programacao/vetores/quest-2" method="POST" enctype="multipart/form-data">
								{!! csrf_field() !!}
								<h2 id="curso-vetor" style="clear: both;font-size: 1.8em; font-weight: bold; margin: 1.275em 0px 0.85em;margin-top: 0px;border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(230, 230, 230); line-height: 1.6;"><a name="curso-vetor" href="#curso-vetor" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);">
									</a>
										Exercicios
								</h2>
								<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
									1) O termo string serve para identificar uma sequência de caracteres.
									Na prática, as strings são usadas para representar textos.
									Em linguagem C, ao contrário de outras linguagens, não existe um tipo de dados string nativo.
									Para representar uma string em C, devemos criar um vetor de caracteres, ou seja um vetor do tipo char.
									Marque a alternativa que expõe o erro na atribuição abaixo:
								</h5></div>
<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>char nome_cliente[6] = &quot;Fulano&quot;;
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">char</span> nome_cliente[<span class="hljs-number" style="color: rgb(147, 92, 37);">6</span>] = <span class="hljs-string" style="color: rgb(86, 140, 59);">"Fulano"</span>;
</code></pre>
</div>
									
								<div class="radio">
									<label><input type="radio" name="optradio1" value="a">
										A) Para armazenar "Fulano", e necessários indicar a quantidade de letras dentro dos colchetes.
									</label>
								</div>
								<div class="radio disabled">
									<label><input type="radio" name="optradio1" value="b">
										B) correta: Para armazenar “Fulano”, são necessários 6 caracteres + 1 para o finalizador \0.
									</label>
								</div>
								<div class="radio disabled">
									<label><input type="radio" name="optradio1b" value="c">
										C) Para armazenar "Fulano", e necessários a utilização de um laço de repetiação.
									</label>
								</div>
								<div class="radio disabled">
									<label><input type="radio" name="optradio1b" value="d">
										D) para armazenar "Fulano", e necessários que cada letra esteja entre aspas duplas.
									</label>
								</div>
		
								<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
									2) No que diz respeito a manipulação de vetores marque as alternativas corretas:
								</h5></div>
								<div class="radio">
									<label><input type="radio" name="optradio2" value="a">
										A) Um elemento do vetor pode ser referenciado com o nome
										do vetor, seguido do seu índice correspondente colocado
										entre colchetes
									</label>
								</div>
								<div class="radio disabled">
									<label><input type="radio" name="optradio2" value="b">
										B) Mesmo que possamos atribuir um valor a um
										elemento de um vetor, ele não pode ser lido ou escrito da mesma forma.
									</label>
								</div>
								<div class="radio disabled">
									<label><input type="radio" name="optradio2" value="c">
										C) Uma vez que as variáveis que compõem o vetor têm o
										mesmo nome, o que distingue cada um delas é um índice,
										que referencia sua localização dentro da estrutura
									</label>
								</div>
								<div class="radio disabled">
									<label><input type="radio" name="optradio2" value="d">
										D) O índice de um vetor precisa ser necessariamente uma
										constante.
									</label>
								</div>
	
								<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
									3)  Em pseudo-código, é possível expressar que um vetor deve
									ser totalmente impresso através do comando Escreva Por exemplo:
								</h5></div>
<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>declare a[1..8] : inteiro
Escreva(a)
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;">declare a[<span class="hljs-number" style="color: rgb(147, 92, 37);">1.</span>.<span class="hljs-number" style="color: rgb(147, 92, 37);">8</span>] : <span class="hljs-function" style="color: rgb(37, 127, 173);">inteiro
<span class="hljs-title" style="color: rgb(113, 149, 168);">Escreva</span><span class="hljs-params" style="color: rgb(147, 92, 37);">(a)</span>
</span></code></pre>
</div>
								<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
									Entretanto, as linguagens de programação em geral não
								possuem um comando deste tipo, assim, torna-se necessário imprimir um vetor através da
								impressão individual de cada um dos seus elementos. Marque a alternativa que correspondente
								a forma correta de se fazer isso:
								</h5></div>

								<div class="radio">
									<label><input type="radio" name="optradio3" value="a">
										A) 
<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>declare a[1..8] : inteiro
Escreva(a[i..8])
Fim Para
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;">declare a[<span class="hljs-number" style="color: rgb(147, 92, 37);">1.</span>.<span class="hljs-number" style="color: rgb(147, 92, 37);">8</span>] : <span class="hljs-function" style="color: rgb(37, 127, 173);">inteiro
<span class="hljs-title" style="color: rgb(113, 149, 168);">Escreva</span><span class="hljs-params" style="color: rgb(147, 92, 37);">(a[i..8])</span>
Fim Para
</span></code></pre>
</div>
									</label>
								</div>
								<div class="radio disabled">
									<label><input type="radio" name="optradio3" value="b">
										B)
<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>declare a[1..8] : inteiro
Para i Å 1 até 8 Faça
Escreva(a[i])
Fim Para
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;">declare a[<span class="hljs-number" style="color: rgb(147, 92, 37);">1.</span>.<span class="hljs-number" style="color: rgb(147, 92, 37);">8</span>] : inteiro
Para i Å <span class="hljs-number" style="color: rgb(147, 92, 37);">1</span> até <span class="hljs-number" style="color: rgb(147, 92, 37);">8</span> Faç<span class="hljs-function" style="color: rgb(37, 127, 173);">a
<span class="hljs-title" style="color: rgb(113, 149, 168);">Escreva</span><span class="hljs-params" style="color: rgb(147, 92, 37);">(a[i])</span>
Fim Para
</span></code></pre>
</div>
									</label>
								</div>
								<div class="radio disabled">
									<label><input type="radio" name="optradio3" value="c">
										C)
<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>declare a[1..8] : inteiro
	Para i Å 0 até 7 Faça
	Escreva(a[i..8])
	Fim Para
	</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;">declare a[<span class="hljs-number" style="color: rgb(147, 92, 37);">1.</span>.<span class="hljs-number" style="color: rgb(147, 92, 37);">8</span>] : inteiro
	Para i Å <span class="hljs-number" style="color: rgb(147, 92, 37);">0</span> até <span class="hljs-number" style="color: rgb(147, 92, 37);">7</span> Faç<span class="hljs-function" style="color: rgb(37, 127, 173);">a
	<span class="hljs-title" style="color: rgb(113, 149, 168);">Escreva</span><span class="hljs-params" style="color: rgb(147, 92, 37);">(a[i..8])</span>
	Fim Para
	</span></code></pre>
</div>
									</label>
								</div>

								<div class="radio disabled">
									<label><input type="radio" name="optradio3" value="d">
D) <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>declare a[1..8] : inteiro
Escreva(a[1,2,3,4,5,6,7,8])
Fim Para
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;">declare a[<span class="hljs-number" style="color: rgb(147, 92, 37);">1.</span>.<span class="hljs-number" style="color: rgb(147, 92, 37);">8</span>] : <span class="hljs-function" style="color: rgb(37, 127, 173);">inteiro
<span class="hljs-title" style="color: rgb(113, 149, 168);">Escreva</span><span class="hljs-params" style="color: rgb(147, 92, 37);">(a[1,2,3,4,5,6,7,8])</span>
Fim Para
</span></code></pre>
</div>
									</label>
								</div>
	
								<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
									4) Se declararmos um vetor como:
								</h5></div>
								<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int vetor[30];
	</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">int</span> vetor[<span class="hljs-number" style="color: rgb(249, 155, 21);">30</span>];
	</code></pre>
</div>
								<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
									a instrução abaixo acessa corretamente os elementos deste vetor?
								</h5></div>
								<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; font-family: 'Helvetica Neue', Helvetica, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Arial, freesans, sans-serif; font-size: 15px; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(163, 158, 155); padding: 0.5em; background: rgb(47, 30, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>for (j=0; j &amp;lt;= 30; j++){
	vet[j] = j*j;
	}
</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 0.9em; font-family: Consolas, Inconsolata, Courier, monospace;"><span class="hljs-keyword" style="color: rgb(129, 91, 164);">for</span> (j=<span class="hljs-number" style="color: rgb(249, 155, 21);">0</span>; j &lt;= <span class="hljs-number" style="color: rgb(249, 155, 21);">30</span>; j++){
	vet[j] = j*j;
	}
</code></pre></div>
								<div class="radio">
									<label><input type="radio" name="optradio4" value="a">
										A) Sim
									</label>
								</div>
								<div class="radio disabled">
									<label><input type="radio" name="optradio4" value="b">
										B) Não
									</label>
								</div>
								
								<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><h5 id="pergunta-aqi" style="clear: both;font-size: 1.2em; font-weight: bold; margin: 0.855em 0px 0.57em;margin-top: 0px;"><a name="pergunta-aqi" href="#pergunta-aqi" style="text-decoration: none; vertical-align: baseline;color: rgb(50, 105, 160);"></a>
									5) Não é possível atribuir valores a todos os elementos em uma
									só linha. Cada elemento precisa ser acessado individualmente. Tampouco é possível usar
									um único scanf para ler todo o conteúdo do vetor. Com base nessa afirmação assinale a alternativa
									que corresponde a maneira correta de se inicializar um vetor com todos os valores igual a 0.
									</h5>
								</div>
									
									
								<div class="radio">
									<label><input type="radio" name="optradio5" value="a">
										A) <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int vetor[10];
	// inicializar todos os elementos com valor 0
	vetor = 0;
	</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> vetor[<span class="hljs-number" style="color: rgb(147, 92, 37);">10</span>];
	<span class="hljs-comment" style="color: rgb(113, 149, 168);">// inicializar todos os elementos com valor 0</span>
	vetor = <span class="hljs-number" style="color: rgb(147, 92, 37);">0</span>;
</code></pre>
											</div>
									</label>
								</div>

								   <div class="radio disabled">
										<label><input type="radio" name="optradio5" value="b">
											B) <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int vetor[10];
	int indice;
	// inicializar todos os elementos com o valor 0
	for (indice = 0; indice &amp;lt; 10; indice++) {
		vetor[indice] = 0;
	}
	</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> vetor[<span class="hljs-number" style="color: rgb(147, 92, 37);">10</span>];
	<span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> indice;
	<span class="hljs-comment" style="color: rgb(113, 149, 168);">// inicializar todos os elementos com o valor 0</span>
	<span class="hljs-keyword" style="color: rgb(93, 93, 177);">for</span> (indice = <span class="hljs-number" style="color: rgb(147, 92, 37);">0</span>; indice &lt; <span class="hljs-number" style="color: rgb(147, 92, 37);">10</span>; indice++) {
		vetor[indice] = <span class="hljs-number" style="color: rgb(147, 92, 37);">0</span>;
	}
					</code></pre>             </div>
									    </label>
								    </div>
									
									<div class="radio disabled">
										<label><input type="radio" name="optradio5" value="c">
											C) <div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int vetor[10] = 0;
		</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> vetor[<span class="hljs-number" style="color: rgb(147, 92, 37);">10</span>] = <span class="hljs-number" style="color: rgb(147, 92, 37);">0</span>;
		</code></pre></div>
										</label>
									</div>
									<div class="radio disabled">
										<label><input type="radio" name="optradio5" value="d">
											D)<div style="font-family: 'Lucida Grande', 'Segoe UI', 'Apple SD Gothic Neo', 'Malgun Gothic', 'Lucida Sans Unicode', Helvetica, Arial, sans-serif; font-size: 0.9em; overflow-x: hidden; overflow-y: auto; margin: 0px !important; padding: 5px 20px 26px !important; background-color: rgb(255, 255, 255);font-family: 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; padding: 20px;padding: 20px; color: rgb(34, 34, 34); font-size: 15px; font-family: 'Roboto Condensed', Tauri, 'Hiragino Sans GB', 'Microsoft YaHei', STHeiti, SimSun, 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'Segoe UI', AppleSDGothicNeo-Medium, 'Malgun Gothic', Verdana, Tahoma, sans-serif; line-height: 1.6; -webkit-font-smoothing: antialiased; background: rgb(255, 255, 255);"><pre style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); overflow: auto; padding: 0.5em;display: block; overflow-x: auto; color: rgb(126, 162, 180); padding: 0.5em; background: rgb(31, 41, 46);"><code class="cpp" data-origin="<pre><code class=&quot;cpp&quot;>int vetor[] = { 0 };
		</code></pre>" style="border: 0px; display: block;font-family: Consolas, Inconsolata, Courier, monospace; font-weight: bold; white-space: pre; margin: 0px;border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; word-wrap: break-word; border: 1px solid rgb(204, 204, 204); padding: 0px 5px; margin: 0px 2px;font-size: 1em; letter-spacing: -1px; font-weight: bold;"><span class="hljs-keyword" style="color: rgb(93, 93, 177);">int</span> vetor[] = { <span class="hljs-number" style="color: rgb(147, 92, 37);">0</span> };
		</code></pre>
											</div>
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
	</div>
	@endsection
	