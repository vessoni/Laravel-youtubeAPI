<?php

use GuzzleHttp\Psr7\Request;

Route::get('/', 'VideosController@index');
Route::get('/video/{id}', 'VideosController@show');
Route::get('/search/{id}','VideosController@find');
