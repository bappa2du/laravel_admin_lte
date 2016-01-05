<?php
get('/','WebController@getIndex');
Route::controller('auth', 'AuthController');
Route::controller('admin','AdminController');