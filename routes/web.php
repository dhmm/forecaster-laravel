<?php

use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/weather/{countryCode}/{cityName}', [ WeatherController::class , 'forecast' ])
    ->name('weather.forecast');