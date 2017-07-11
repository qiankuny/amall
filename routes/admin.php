<?php
/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'AdminController@index');
Route::match(['get', 'post'], 'auth/login', 'AuthController@login');