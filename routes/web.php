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




use Illuminate\Support\Facades\Route;

//Route::view('/', 'places')->name('home');

Route::get('/places/create', 'PlaceController@addNewPlace')->name('create_new_place');
Route::get('/places', 'PlaceController@showAllPlaces')->name('home');



Route::get('place/{place_id}/addLike', 'PlaceController@addLike');
Route::get('place/{place_id}/addDislike', 'PlaceController@addDislike');

Route::get('/places/{id}', 'PlaceController@showPlaceWithPhotosByPlaceId')->name('place_with photo');

Route::get('/places/{id}/photos/add', 'PlaceController@addPhotoToPlace')->name('photoToPlace');

Route::post('/savePlace', 'PlaceController@savePlace')->name('saveOnePlace');
Route::post('/savePhoto','PlaceController@savePhoto')->name('saveOnePhoto');

Route::get('photos/add', 'PlaceController@addPhotosToAllPhotos')->name('photo_add');
Route::view('/allPhotos', 'allPhotos')->name('all_photos');

//Route::get('photo/add', 'PlaceController@savePlace');


//Route::get('place/{$place_id}/dislike', 'PlaceController@dislike');

