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

$router->group(['prefix' => 'loja'], function () use ($router) {
    $router->get('categories',  ['uses' => 'CategoryController@showAllCategories']);
  
    $router->get('categories/{id}', ['uses' => 'CategoryController@showOneCategory']);
  
    $router->post('categories', ['uses' => 'CategoryController@create']);
  
    $router->delete('categories/{id}', ['uses' => 'CategoryController@delete']);
  
    $router->put('categories/{id}', ['uses' => 'CategoryController@update']);
  });

  $router->group(['prefix' => 'loja'], function () use ($router) {
    $router->get('offers',  ['uses' => 'OfferController@showAllOffers']);
  
    $router->get('offers/{id}', ['uses' => 'OfferController@showOneOffer']);
  
    $router->post('offers', ['uses' => 'OfferController@create']);
  
    $router->delete('offers/{id}', ['uses' => 'OfferController@delete']);
  
    $router->put('offers/{id}', ['uses' => 'OfferController@update']);
  });