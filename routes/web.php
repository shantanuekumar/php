<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware' => ['web']], function(){

Route::get('/', function () {
    return view('body');
})->name('home');

Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
]);
Route::post('/signin', [
    'uses' => 'UserController@postSignin',
    'as' => 'signin'
]);
Route::get('/dashboard', [
    'uses' => 'UserController@getDashboard',
    'as' => 'dashboard',
    'middleware' => 'auth'
]);

});