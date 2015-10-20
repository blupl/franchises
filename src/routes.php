<?php

use Illuminate\Routing\Router;
use Orchestra\Support\Facades\Foundation;

/*
|--------------------------------------------------------------------------
| Frontend Routing
|--------------------------------------------------------------------------
*/

Foundation::group('blupl/franchise', 'franchise', ['namespace' => 'Blupl\Franchises\Http\Controllers'], function (Router $router) {

        $router->put('approval/franchise/{franchise}/{category}/{id}', ['as' => 'franchise.approval.zone', 'uses'=>'ApprovalController@update']);
        $router->get('approval/franchise/{franchise}/{category}/{id}', 'ApprovalController@showFranchise');
        $router->get('approval/franchise/{id}/{category}', 'ApprovalController@show');
        $router->get('approval', 'ApprovalController@index');

        $router->post('management/team-support-stuffs', 'FranchiseController@storeTeamStuff');
        $router->post('management/team-managements', 'FranchiseController@storeTeam');
        $router->post('management/player', 'FranchiseController@storePlayer');
        $router->post('management/franchise', 'FranchiseController@storeFranchiseManagement');
        $router->get('management/{id}', 'FranchiseController@franchiseManagement');
        $router->get('management', 'FranchiseController@franchise');
        $router->post('store', 'FranchiseController@storeFranchise');
        $router->get('create', 'FranchiseController@create');
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
