<?php

use Illuminate\Routing\Router;
use Orchestra\Support\Facades\Foundation;

/*
|--------------------------------------------------------------------------
| Frontend Routing
|--------------------------------------------------------------------------
*/

Foundation::group('blupl/franchises', 'media', ['namespace' => 'Blupl\Franchises\Http\Controllers'], function (Router $router) {
    $router->get('/', 'HomeController@index');
});

/*
|--------------------------------------------------------------------------
| Backend Routing
|--------------------------------------------------------------------------
*/

Foundation::namespaced('Blupl\Franchises\Http\Controllers\Admin', function (Router $router) {
    $router->group(['prefix' => 'media'], function (Router $router) {
        $router->resource('reporter', 'ReporterController');
        $router->get('/', 'HomeController@index');
        $router->match(['GET', 'HEAD', 'DELETE'], 'profile/{roles}/delete', 'HomeController@delete');

    });
});
