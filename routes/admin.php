<?php
/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'AdminController@index');
Route::match(['get', 'post'], 'login', 'AuthController@login');