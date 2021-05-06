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
//$router->group([],function() use ($router){

$router->group(['middleware' => 'client.credentials'],function() use ($router){

    // API GATEWAY ROUTES FOR SITE1 users
    $router->get('/users1','User1Controller@index');
    $router->post('/users1', 'User1Controller@addUser'); // create new user1 record
    $router->get('/users1/{id}', 'User1Controller@show'); // get user1 by id
    $router->put('/users1/{id}', 'User1Controller@update'); // update user1 record
    $router->patch('/users1/{id}', 'User1Controller@update'); // update user1 record
    $router->delete('/users1/{id}', 'User1Controller@delete'); // delete record

    // API GATEWAY ROUTES FOR SITE2 users
    $router->get('/users2', 'User2Controller@index'); // get all users2 records
    $router->post('/users2', 'User2Controller@addUser'); // create new user2 record
    $router->get('/users2/{id}', 'User2Controller@show'); // get user2 by id
    $router->put('/users2/{id}', 'User2Controller@update'); // update user2 record
    $router->patch('/users2/{id}', 'User2Controller@update'); // update user2 record
    $router->delete('/users2/{id}', 'User2Controller@delete'); // elete record

});

