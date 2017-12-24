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
$router->get('/hello',function() use ($router){
	echo 'hello there...';
});
$router->get('hello/{id}',function($id) {
	echo 'your id is '.$id;
});
$router->get('user[/{name}]', function ($name = null) {
	$data = [];
	$data["username"]=$name;
    return json_encode($data);
});

$router->group(['prefix' => 'api'], function() use ($router) {
    $router->post('car', 'CarController@createCar');
    $router->put('car/{id}', 'CarController@updateCar');
    $router->delete('car/{id}', 'CarController@deleteCar');
    $router->get('car', 'CarController@index');
});

