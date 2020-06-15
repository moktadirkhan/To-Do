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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/todo','TodosControllers@index');

Route::get('/todo/{todo}','TodosControllers@show');

Route::get('/createtodo','TodosControllers@create');

Route::post('/store-todo','TodosControllers@store');

Route::get('/todo/{todo}/edit','TodosControllers@edit');

Route::post('/todo/{todo}/update-todo','TodosControllers@update');

Route::get('/todo/{todo}/delete','TodosControllers@destroy');

Route::get('/todo/{todo}/complete','TodosControllers@complete');
