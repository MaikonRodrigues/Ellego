
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta name="generator" content="HTML Tidy for HTML5 for Linux version 5.2.0">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ellego</title><!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"><!-- Styles -->
		<link rel="icon" href="/images/letter-e.png">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>


	<body>

		<nav class="navbar navbar-expand-md navbar-light navbar-laravel sticky-top">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					{{ config('app.name', 'Ellego') }}
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav " style="">
						{{-- <a class="nav-item nav-link pl-5" href="#">Home </a> --}}
						@unless(Auth::guest())
							<a class="nav-item nav-link" href="/dashboard">Inicio</a>
						@endunless
						<a class="nav-item nav-link " href="#">Sobre</a>
						<a class="nav-item nav-link " href="#">Equipe</a>
						
						@unless(Auth::guest())
							@if(Auth::user()->hasRole('teacher')  )
								<a class="nav-item nav-link pl-5" href="/teacher">Professor </a>
							@endif
						@endunless
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
						<!-- Authentication Links -->
						@guest
							<li class="nav-item ">
								<a class="nav-link" href="{{ route('login') }}"><button class="btn btn-primary"> Login </button></a>
							</li>
							<li class="nav-item">
								@if (Route::has('register'))
									<a class="nav-link" href="{{ route('register') }}"><button class="btn btn-success"> Registrar </button></a>
								@endif

							</li>
						@else

							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
																	onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>
	
	@yield('content')

	</body>
</html>
