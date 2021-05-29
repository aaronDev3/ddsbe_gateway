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
    $router->get('/books','User1Controller@index');
    $router->post('/books', 'User1Controller@addUser'); // create new user1 record
    $router->get('/books/{id}', 'User1Controller@show'); // get user1 by id
    $router->put('/books/{id}', 'User1Controller@update'); // update user1 record
    $router->patch('/books/{id}', 'User1Controller@update'); // update user1 record
    $router->delete('/books/{id}', 'User1Controller@delete'); // delete record

    // API GATEWAY ROUTES FOR SITE2 users
    $router->get('/authors', 'User2Controller@index'); // get all users2 records
    $router->post('/authors', 'User2Controller@addUser'); // create new user2 record
    $router->get('/authors/{id}', 'User2Controller@show'); // get user2 by id
    $router->put('/authors/{id}', 'User2Controller@update'); // update user2 record
    $router->patch('/authors/{id}', 'User2Controller@update'); // update user2 record
    $router->delete('/authors/{id}', 'User2Controller@delete'); // elete record

});

