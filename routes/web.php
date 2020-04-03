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

//Route::get('/', function () {
//    return view('welcome');
//});

use Illuminate\Support\Facades\Route;

Route::get('/places/create', 'PlaceController@addNewPlace');
Route::get('/places', 'PlaceController@showAllPlaces');

Route::post('/save', 'PlaceController@savePlace');

Route::get('/places/{id}', 'PlaceController@showPlaceById');

Route::get('/places/{id}/photos/add', 'PlaceController@addPhotoToPlace');

Route::post('/savePhoto','PlaceController@savePhoto');
