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

// $app->get('/', function () use ($app) {
//     return $app->version();
// });

// Route::get('/welcome', [
//     'uses' => 'App\HomeController@welcome',
// ]);

// Route::get('/', [
//     'uses' => 'App\HomeController@home',
// ]);

$app->get('/', 'HomeController@home');
$app->get('/welcome', 'HomeController@welcome');
