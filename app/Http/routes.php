<?php
get('/','AuthController@getLogin');
Route::controller('auth', 'AuthController');
Route::controller('admin','AdminController');