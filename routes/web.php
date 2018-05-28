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
    return view('auth.login');
});

Auth::routes();

//
Route::get('/home', 'HomeController@index')->name('home');

Route::get('create/project','HomeController@createProject')->name('create_project');

Route::get('/templates','HomeController@chooseTemplate')->name('choose_template');


Route::get('template', function () {
    return view('chooseTemplate');

})->name('template');

Route::get('foo', function () {
    return view('healthSystem.content');

})->name('microservices');