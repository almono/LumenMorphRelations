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

$router->get('/', ['uses' => 'PageController@View1', 'as' => 'home']);

$router->get('/morph1', ['uses' => 'PageController@View1', 'as' => 'morph1']);
$router->get('/morph2', ['uses' => 'PageController@View2', 'as' => 'morph2']);

$router->post('/morph1/add_tag', ['uses' => 'PageController@addTag', 'as' => 'add_tag']);
$router->post('/morph1/assign_photo_tag', ['uses' => 'PageController@assignPhotoTag', 'as' => 'assign_photo_tag']);
$router->post('/morph1/assign_video_tag', ['uses' => 'PageController@assignVideoTag', 'as' => 'assign_video_tag']);