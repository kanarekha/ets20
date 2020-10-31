<?php

use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/register', 'RegistrasiController@index');
Route::post('/register/create', 'RegistrasiController@create');

Route::get('/login', 'LoginController@index');
Route::get('/login/checkUser', 'LoginController@checkUser');

Route::get('/dashboard', 'PagesController@index');

Route::get('/users', 'UserController@index');
Route::get('/{user}/edit','UserController@edit');
Route::patch('/{user}','UserController@update');
Route::delete('/{user}','UserController@destroy');


Route::get('/movies', 'FilmController@index');
Route::get('/movies/create', 'FilmController@create');

Route::post('/movies/save', 'FilmController@store');

Route::get('/movies/cari', 'FilmController@search');

Route::get('/detail/{movies}', 'FilmController@show');

Route::get('/review/{movies}', 'FilmController@review');
