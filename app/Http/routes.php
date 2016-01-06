<?php
get('/','WebController@getIndex');
Route::controller('web','WebController');
Route::controller('auth', 'AuthController');
Route::controller('admin','AdminController');

//get('create',function(){
//    \App\Models\User::create(['name'=>'admin','email'=>'admin@btcl.com','password'=>bcrypt('123456')]);
//    return 'done';
//});