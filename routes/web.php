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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes(['register' => true]);

Route::middleware('auth')->group(function (){
    Route::get('/links','LinkController@index')->name('links.index');
    Route::get('/links/create','LinkController@create')->name('links.create');
    Route::post('/links/create','LinkController@store')->name('links.store');
});

Auth::routes();

Route::get('/home', 'LinkController@index')->name('home');
