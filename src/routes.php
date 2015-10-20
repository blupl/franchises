<?php

use Illuminate\Routing\Router;
use Orchestra\Support\Facades\Foundation;

/*
|--------------------------------------------------------------------------
| Frontend Routing
|--------------------------------------------------------------------------
*/

Foundation::group('blupl/franchise', 'franchise', ['namespace' => 'Blupl\Franchises\Http\Controllers'], function (Router $router) {
//    $router->resource('registration', 'RegistrationController');
        $router->post('management/team-stuff', 'FranchiseController@storeTeamStuff');
        $router->post('management/team', 'FranchiseController@storeTeam');
        $router->post('management/player', 'FranchiseController@player');
        $router->post('management/franchise', 'FranchiseController@storeFranchise');
        $router->get('management/{id}', 'FranchiseController@management');
        $router->get('management', 'FranchiseController@index');
        $router->get('/', 'FranchiseController@index');
});

/*
|--------------------------------------------------------------------------
| Backend Routing
|--------------------------------------------------------------------------
*/

Foundation::namespaced('Blupl\Franchises\Http\Controllers\Admin', function (Router $router) {
    $router->group(['prefix' => 'franchise'], function (Router $router) {
        $router->get('/', 'HomeController@index');
        $router->match(['GET', 'HEAD', 'DELETE'], 'profile/{roles}/delete', 'HomeController@delete');

    });
});
