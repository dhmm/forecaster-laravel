@extends('layouts.base')

@section('body')
	<nav class="navbar navbar-expand bg-dark border-bottom border-body" data-bs-theme="dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Weather Forecasts</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse d-flex" id="navbarNavDropdown">
				<ul class="navbar-nav">                    
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Preview
						</a>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item" href="{{route( 'weather.forecast' , [ 'countryCode' => 'ES' , 'cityName' => 'Barcelona'] )}}">Barcelona</a>
							</li>
							<li>
                                <a class="dropdown-item" href="{{route( 'weather.forecast' , [ 'countryCode' => 'DE' , 'cityName' => 'Berlin'] )}}">Berlin</a>
							</li>
							<li>
								<a class="dropdown-item" href="{{route( 'weather.forecast' , [ 'countryCode' => 'PL' , 'cityName' => 'Stettin'])}}">Stettin</a>
							</li>
						</ul>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
        @yield('content')		
	</div>
@endsection
