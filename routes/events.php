<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

use Illuminate\Support\Facades\Auth;

$router->group(['middleware' => 'auth', 'prefix' => 'event'], function() use($router) {
    $router->post('/', 'EventController@create');
    $router->get('/', 'EventController@get');
    $router->get('/{id}', 'EventController@getSingle');
    $router->put('/{id}', 'EventController@update');
    $router->delete('/{id}', 'EventController@delete');
});
