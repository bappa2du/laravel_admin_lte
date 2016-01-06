<?php
get('/','WebController@getIndex');
Route::controller('web','WebController');
Route::controller('auth', 'AuthController');
Route::controller('admin','AdminController');