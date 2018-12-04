@extends('layouts.master') 
<style>

.btn {
  margin-left: 10px;
  margin-right: 10px;
}
/* Boostrap Buttons Styling */

.btn-default {
  font-size: 13px;
  color: rgba(108, 88, 179, 0.75);
  letter-spacing: 1px;
  line-height: 15px;
  border: 2px solid rgba(108, 89, 179, 0.75) !important;
  border-radius: 80px !important;
  background: transparent;
  transition: all 0.3s ease 0s;
}

.btn-default:hover {
  color: #FFF;
  background: rgba(108, 88, 179, 0.75);
  border: 2px solid rgba(108, 89, 179, 0.75);
}

.title{
	margin-top:30%;
	background-color:  #99ccff;
	width:50%;
	font-size: 52px;
}

.subtitle{
	background-color:  #99ccff;
	width:100%;
	font-size: 52px;
}

.header{
	max-width: 100% !important;
}

.img-header{
	padding-top:10%;
	margin-left:15%;
	align-items: center;
	justify-content: center;

}

body {
	/* Location of the image */
	background-image: url(bg-home.jpg);

	/* Background image is centered vertically and horizontally at all times */
	background-position: center center;

	/* Background image doesn't tile */
	background-repeat: no-repeat;

	/* Background image is fixed in the viewport so that it doesn't move when 
		 the content's height is greater than the image's height */
	background-attachment: fixed;

	/* This is what makes the background image rescale based
		 on the container's size */
	background-size: cover;

	/* Set a background color that will be displayed
		 while the background image is loading */
	background-color: #464646;
}

.central-panel{

	background-color: rgba(0,0,0,0.7);
	margin:5%;
	padding-bottom:80px;
}


.about{
	background-color: #dec;
	margin-top:50px;
	padding-top:40px;
	height: 50%;
	
}

.computer-img{
	padding-left: 200px;
}

.gamification{
	background-color: white;
	padding-top:50px;
	height: 70%;
}

.gamification-title{
	text-align:center
	padding-bottom:10px;
}

.schools{
	background-color: #F2EFE9;
	padding-top:50px;
	height: 60%;
}


.footer{
	background-color: #252627;
	padding-top:50px;
	height: 70%;
}


</style>

@section('content')
	<div class="container header">
		<div class="row central-panel">

			<div class="col-md-3 img-header">
				<img class="img-fluid" width="200px;" src="/images/book.svg" alt="">
			</div>

			<div class="col-md-6">
				<h1 class="title">Ellego</h1>
				<h1 class="subtitle">Aprenda Brincando</h1>
			</div>

		</div>

		<div class="row about  justify-content-md-center">
			<div class="col-lg-2 computer-img">
				<img class="img-fluid" width="200px;" src="/images/computer.svg" alt="">
			</div>		
			<div class="col-md-5 pt-5 pr-4" >
				<h3>A melhor maneira de aprender sozinho</h3>
				O Ellego é a melhor forma de se apresentar e tratar o conteúdo, nosso intuito e ajuda 
				o aprendiz a coletar informações, relacioná-las, organizá-las, manipulá- las, discuti-las e 
				debatê-las com seus colegas, até chegara produzir um conhecimento que seja significativo.

			</div>		
		</div>

		<div class="row  justify-content-center gamification">
			
			<div class="row pb-5">
				<div class="col-lg-12">
				
				<h1>Gamificação em Todos os Cursos</h1>
				</div>
			</div>

			<div class="row justify-content-center ">

				{{--<img class="img-fluid" width="500px;" src="/images/puzzle.svg" alt="">--}}
					<img src="/images/balloons.svg" width="50px" class="img-fluid" alt="">
				<div class="col-lg-3">
					<h3>O que e Gamificação?</h3>
					<p class="font-weight-light">
					A gamificação é um fenômeno emergente, que deriva
					diretamente da popularização e popularidade dos games, e de suas capacidades 
					intrínsecas de motivar a ação, resolver problemas e potencializar aprendizagens nas 
					mais diversas áreas do conhecimento.
					</p>
				</div>
				<div class="col-lg-2 ">
					<img class="img-fluid" width="400px;" src="/images/puzzle.svg" alt=""	>
				</div>
				<div class="col-lg-4	">
					<h3>Porque na educação?</h3>
					<p class="font-weight-light">
					A educação formal uma área bastante fértil para a sua aplicação, lá ela 
					encontra os indivíduos que carregam consigo muitas aprendizagens advindas das 
					interações com os games. E também uma área que necessita de novas estratégias para dar conta de 
					indivíduos que estão mais inseridos no contexto das mídias e 
					tecnologias digitais que se mostram desinteressados pelos métodos passivos de
					ensino e aprendizagem utilizados na maioria das escolas.
					</p>
				</div>
					<img src="/images/fire.svg" width="50px" class="img-fluid" alt="">
				</div>
			</div>

		<div class="row schools  justify-content-md-center">
			<div class="col-lg-2 computer-img">
				<img class="img-fluid" width="200px;" src="/images/school.svg" alt="">
			</div>		
			<div class="col-md-5 pt-5 pr-4" >
				<h2>Ellego para Escolas</h2>
				Consectetur elit eum deleniti aperiam nostrum cumque, in minus? Nulla fuga quas quasi dolore est Facere sint officiis saepe magnam accusantium repellendus Laborum at corrupti maiores cupiditate quam ipsum! Ab! <br>

				<button type="button" class="btn btn-default mt-3">Saiba Mais!</button>
			</div>		
		</div>


			<div class="row footer">
							
			</div>

		</div>
	</div>
@endsection
