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
///////////////

Route::get('/', function () {
    return view('welcome');
})->name('home');

////////////////// php test

Route::post('/senddata','Statistics@validateData');
Route::get('/phptest/{str}/{number}', ['as' => 'printGuessStatistics', 'uses' => 'Statistics@printGuessStatistics']);

///////////////// Pizza Store

Route::get('/orderpizza/', ['as' => 'orderPizza', 'uses' =>'PizzaStore@orderPizza']);
Route::get('/menu', function () {
    return view('menu')->with('str');
});

////////////////  Duck

Route::get('/duckemolator1','Ducks1@duckEmolator');
Route::get('/duckemolator0','DuckEmolator@home');

