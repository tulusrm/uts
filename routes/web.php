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

$router->group(['prefix' =>"api"],function() use ($router) {

    $router->get('kategori',['uses' => 'KategoriController@index']);

    $router->get('kategori/{id}',['uses' =>'KategoriController@show']);


    $router->delete('kategori/{id}',['uses' =>'KategoriController@destroy']);

    $router->put('kategori/{id}',['uses' =>'KategoriController@update']);
    $router->post('kategori',['uses' =>'KategoriController@create']);


// $router->get('kategori', 'KategoriController@index');
// $router->get('kategori/{id}','KategoriController@show');
// $router->delete('kategori/{id}','KategoriController@destroy');
// $router->put('kategori/{id}','KategoriController@update');
// $router->post('kategori','KategoriController@create');


});






