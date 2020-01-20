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




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/file', 'FileController@index')->name('viewfile');
Route::get('/file/upload', 'FileController@create')->name('formfile');
Route::post('/file/upload', 'FileController@store')->name('uploadfile');
Route::delete('/file/{id}', 'FileController@destroy')->name('deletefile');
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
}); 

Auth::routes();
/*
    Route::namespace('BackEnd')->prefix('admin')->group(function () {
    Route::get('/', 'Home@index');

    /*Route::get('users', 'Users@index');
    Route::get('users/create', 'Users@create');
    Route::post('users', 'Users@store');
    Route::get('users/{id}', 'Users@edit');
    Route::post('users/{id}', 'Users@update');
    Route::get('users/delete/{id}', 'Users@delete'); 
    
    Route::resource('users', 'Users')->except(['show' , 'delete']);
}); 

*/



Route::get('/', 'GalleriesController@index');
Route::get('/galleries', 'GalleriesController@index');
Route::get('/galleries/create', 'GalleriesController@create')->name('gallery-create');
Route::post('/galleries/store', 'GalleriesController@store')->name('gallery-store');
Route::get('/galleries/{id}', 'GalleriesController@show')->name('gallery-show');

Route::get('/photos/create/{galleryId}', 'PhotosController@create')->name('photo-create');
Route::post('/photos/store', 'PhotosController@store')->name('photo-store');
Route::get('/photos/{id}', 'PhotosController@show')->name('photo-show');

Route::delete('/photos/{id}', 'PhotosController@destroy')->name('photo-destroy');

Route::get('/videos', 'VideosController@index')->name('video-index');
Route::get('/videos/create', 'VideosController@create')->name('video-create');
Route::post('/videos/store', 'VideosController@store')->name('video-store'); 

