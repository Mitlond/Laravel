<?php

/*

Route::get('/', function () {
    return view('welcome');
});*/

Route::get('home','HomeController@index');
Route::controllers([
   'auth' => 'Auth\AuthController',
   'password' => 'Auth\PasswordController',
]);
 Route::get('/', ['as' => 'posts', 'uses' => 'ElrosController@index']);
 ?>