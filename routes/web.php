<?php


Route::get('/', 'VideosController@index');
Route::get('/video/{id}', 'VideosController@show');
