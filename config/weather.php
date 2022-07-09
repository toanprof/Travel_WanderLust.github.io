<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API Key
    |--------------------------------------------------------------------------
    |
    | Here you define your API Key for weather provider.
    |
    */

    'api_key' => 'AIzaSyChuhhTzsSnPWDGhC60Q0Mbj3XMGuNAmcE',

    /*
    |--------------------------------------------------------------------------
    | Weather provider
    |--------------------------------------------------------------------------
    |
    | Here you define provider you want to get weather information from.
    |
    */

    'provider' => Vemcogroup\Weather\WeatherServiceProvider::class,

    /*
    |--------------------------------------------------------------------------
    | Midday
    |--------------------------------------------------------------------------
    |
    | Here you define what time is midday.
    |
    */
    'midday' => [
        'hour' => '13',
        'minute' => '59',
    ],

    /*
    |--------------------------------------------------------------------------
    | Intervals
    |--------------------------------------------------------------------------
    |
    | Here you define the intervals for forecast and historical data.
    | Only available for Weatherstack:
    |
    */
    'intervals' => [
        'forecast' => env('WEATHER_FORECAST_INTERVAL', 24),
        'historical' => env('WEATHER_HISTORICAL_INTERVAL', 1),
    ],

];
