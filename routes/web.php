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

$router->get('product/{product:[0-9]+}', [
    'as' => 'product', 'uses' => 'ProductController@show'
]);

$router->get('product/report', [
    'as' => 'sales_report', 'uses' => 'ProductController@reportAllSales'
]);
