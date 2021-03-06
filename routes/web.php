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


Route::group(['namespace' => 'Site'], function (){
    Route::get('/', 'SiteController@index');
    Route::get('/home', 'SiteController@index')->name('home');
});

Auth::routes();

Route::get('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
])->name('logout');


Route::group(['middleware' => ['web','auth'], 'namespace' => 'Panel'], function(){
    Route::resource('heroes', 'HeroesController');
});
