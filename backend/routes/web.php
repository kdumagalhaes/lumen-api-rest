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

$router->group(['prefix' => 'loja'], function () use ($router) {
  $router->get('ofertas',  ['uses' => 'OfferController@showAllOffers']);

  $router->get('ofertas/{id}', ['uses' => 'OfferController@showOneOffer']);

  $router->post('ofertas', ['uses' => 'OfferController@create']);

  $router->delete('ofertas/{id}', ['uses' => 'OfferController@delete']);

  $router->put('ofertas/{id}', ['uses' => 'OfferController@update']);
});

$router->group(['prefix' => 'loja'], function () use ($router) {
    $router->get('categorias',  ['uses' => 'CategoryController@showAllCategories']);
  
    $router->get('categorias/{id}', ['uses' => 'CategoryController@showOneCategory']);
  
    $router->post('categorias', ['uses' => 'CategoryController@create']);
  
    $router->delete('categorias/{id}', ['uses' => 'CategoryController@delete']);
  
    $router->put('categorias/{id}', ['uses' => 'CategoryController@update']);
  });