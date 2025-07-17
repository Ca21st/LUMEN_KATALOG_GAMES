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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/example', 'ExampleController@index');

$router->get('/hello', function () {
    return 'Hello, Lumen!';
});

$router->post('/example', 'ExampleController@store');
$router->get('/example/{id}', 'ExampleController@show');


$router->get('/games', 'GameController@index');
$router->post('/games', 'GameController@store');
$router->get('/games/{id}', 'GameController@show');
$router->put('/games/{id}', 'GameController@update');
$router->delete('/games/{id}', 'GameController@destroy');

$router->get('/developers', 'DeveloperController@index');
$router->post('/developers', 'DeveloperController@store');
$router->get('/developers/{id}', 'DeveloperController@show');
$router->put('/developers/{id}', 'DeveloperController@update');
$router->delete('/developers/{id}', 'DeveloperController@destroy');