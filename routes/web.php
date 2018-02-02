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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/katalogas', 'katalogasController');
Route::get('/kaip-rasti', 'kaipRastiController@index')->name('kaipRasti');
Route::get('/kontaktai', 'kontaktaiController@index')->name('kontaktai');
Route::get('/apie', 'apieController@index')->name('apie');
Route::group(['middleware' => ['auth', 'isAdmin']], function() {
    Route::resource('/administrator', 'administratorController');
    Route::resource('/sukurti', 'sukurtiPrekeController');
    Route::resource('/vartotojai', 'userController');
    Route::resource('/prekes', 'prekesController');
});