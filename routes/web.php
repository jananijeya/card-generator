<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('card-generator', function (){
  return "Here's your card generator!";
});

Route::get('user/{id}', function($id){
  return "This is User #".$id;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
