@extends('layouts.layout_boxed')

@section('title' , "Weather Forecaster  {$city}, {$countryCode}")

@section('content')
	<div class="row">
		<div class="col col-12">
			<h3>Forecast for
				{{ $city }},
				{{ $countryCode }}
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col col-12">
			<div id="map" style="height:400px;"></div>
		</div>
	</div>

	<div class="row">
		@foreach($forecasts as $forecast)
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mt-1">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col col-6 card-title">{{ date('l', strtotime($forecast->date)) }}</div>
							<div class="col col-6 card-title text-end">{{ date('m.y', strtotime($forecast->date)) }}</div>
						</div>
						<div class="row">
							<div class="col col-6 card-title text-center">
								<h1>
									<i class="bi bi-{{ $forecast->icon }} align-middle"></i>
								</h1>
							</div>
							<div class="col col-6 card-title">
								<h3>
									<b>{{ $forecast->temperatureCelsius }}
										&deg;</b>
								</h3>
								<em>Feels like
									{{ $forecast->flTemperatureCelsius }}&deg;</em>
							</div>
						</div>

						<div class="row">
							<div class="col col-6 card-title">
								<b>Pressure</b>
							</div>
							<div class="col col-6 card-title">{{ $forecast->pressure }}</div>
						</div>
						<div class="row">
							<div class="col col-6 card-title">
								<b>Humidity</b>
							</div>
							<div class="col col-6 card-title">{{ $forecast->humidity }}%</div>
						</div>
						<div class="row">
							<div class="col col-6 card-title">
								<b>Wind</b>
							</div>
							<div class="col col-6 card-title">{{ $forecast->windDeg }}m/s</div>
						</div>
						<div class="row">
							<div class="col col-6 card-title">
								<b>Cloudiness</b>
							</div>
							<div class="col col-6 card-title">{{ $forecast->cloudiness }}%</div>
						</div>						
					</div>
				</div>
			</div>
		@endforeach
	</div>

    <script>
        var map = L.map('map').setView([{{$location->latitude}}, {{$location->longitude}}], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([{{$location->latitude}}, {{$location->longitude}}]).addTo(map);
    </script>
@endsection
