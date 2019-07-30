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

Route::get('/m', function () {
    return view('proof');
});

Route::get('/mida', function () {
    return view('roll');
});
Route::get('/R', function () {
    return view('register');
});
Route::get('/Locate', function () {
    return view('locate');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
