<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1', 'middleware' => 'client'], function () use ($router){
    $router->get('/', function () use ($router) {
        return "API 1.0";
    });

    $router->post('/register','UsersController@register');

    $router->group(['prefix' => 'users'], function ($router) {
        //$router->get('/', );
    });


});
$router->group([ 'prefix' => 'payment'], function ($router) {
    $router->post('/', 'PaymentController@checkout');
});
