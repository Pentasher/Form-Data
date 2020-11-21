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
//Toys
Route::get('toys', 'App\Http\Controllers\ToyController@index');
Route::get('toys/create', 'App\Http\Controllers\ToyController@create');
Route::post('toys', 'App\Http\Controllers\ToyController@store');
Route::get('toys/update/{id}', 'App\Http\Controllers\ToyController@update');
Route::get('toys/delete/{id}', 'App\Http\Controllers\ToyController@destroy');
Route::get('toys/edit/{id}', 'App\Http\Controllers\ToyController@edit');

//Cars
Route::get('cars', 'App\Http\Controllers\CarController@index');
Route::get('cars/create', 'App\Http\Controllers\CarController@create');
Route::post('cars', 'App\Http\Controllers\CarController@store');
Route::get('cars/update/{id}', 'App\Http\Controllers\CarController@update');
Route::get('cars/delete/{id}', 'App\Http\Controllers\CarController@destroy');
Route::get('cars/edit/{id}', 'App\Http\Controllers\CarController@edit');

//Vehicles
Route::get('vehicles','App\Http\Controllers\VehicleController@index');
Route::get('vehicles/create', 'App\Http\Controllers\VehicleController@create');
Route::post('vehicles', 'App\Http\Controllers\VehicleController@store');
Route::get('vehicles/update/{id}', 'App\Http\Controllers\VehicleController@update');
Route::get('vehicles/delete/{id}', 'App\Http\Controllers\VehicleController@destroy');
Route::get('vehicles/edit/{id}', 'App\Http\Controllers\VehicleController@edit');

//Boats
Route::get('boats', 'App\Http\Controllers\BoatController@index');
Route::get('boats/create', 'App\Http\Controllers\BoatController@create');
Route::post('boats', 'App\Http\Controllers\BoatController@store');
Route::get('boats/update/{id}', 'App\Http\Controllers\BoatController@update');
Route::get('boats/delete/{id}', 'App\Http\Controllers\BoatController@destroy');
Route::get('boats/edit/{id}', 'App\Http\Controllers\BoatController@edit');

//Tablets
Route::get('tablets', 'App\Http\Controllers\TabletController@index');
Route::get('tablets/create', 'App\Http\Controllers\TabletController@create');
Route::post('tablets', 'App\Http\Controllers\TabletController@store');
Route::get('tablets/edit/{id}', 'App\Http\Controllers\TabletController@edit');
Route::get('tablets/update/{id}', 'App\Http\Controllers\TabletController@update');
Route::get('tablets/delete/{id}', 'App\Http\Controllers\TabletController@destroy');