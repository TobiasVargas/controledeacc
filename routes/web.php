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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
	return view('index');
});

Route::post('/horas/add/{id}', 'AccController@addHoras');

/*Route::get('/horas', function(){
	return view('acc.tabela');
});*/

//Route::get('/horas', 'AccController@index');

Route::resource('horas', 'AccController');

Route::get('/horas/new', function(){
	return view('acc.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
