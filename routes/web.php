<?php

include 'bootstrap/Route.php';

Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');
Route::get('/services', 'MainController@services');
Route::get('/blog', 'MainController@blog');
Route::get('/contact', 'MainController@contact');
Route::get('/private', 'PrivateAreaController@index');

Route::get('/private/cliente/new', 'PrivateAreaController@new');
Route::post('/private/cliente/new', 'PrivateAreaController@postNew');
Route::get('/private/cliente/([0-9]*)', 'PrivateAreaController@show');
Route::get('/private/cliente/([0-9]*)/edit', 'PrivateAreaController@edit');
Route::post('/private/cliente/([0-9]*)/edit', 'PrivateAreaController@postEdit');
Route::get('/private/cliente/([0-9]*)/delete', 'PrivateAreaController@delete');

Route::get('/login', 'LoginController@showLoginForm');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::run('/');
