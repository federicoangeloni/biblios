<html>

	<head>
		<title>Biblios - @yield('title')</title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" />
	</head>

	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-6 pull-right">
					@if(Auth::check())
						Benvenuto <b>{{ Auth::user()->name }}</b> <a href="{{ route('logout') }}">Logout</a>
					@else
						<a href="{{ route('login') }}">Login</a>
						<a href="{{ route('register') }}">Registrati</a>
					@endif
				</div>
			</div>
			<h1>@yield('title')</h1>
			@yield('content')
		</div>

	</body>

</html>