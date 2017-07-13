<?php
/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', ['uses' => 'AdminController@index', 'as' => 'admin.index']);
Route::match(['get', 'post'], 'login', ['uses' => 'AuthController@login', 'as' => 'admin.login']);
Route::get('logout', ['uses' => 'AuthController@logout', 'as' => 'admin.logout']);
Route::get('menu/lists', 'MenuController@lists');