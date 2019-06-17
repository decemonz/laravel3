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

Route::group(['middleware' => 'auth'],function(){

  Route::get('reviews/{id}/edit','ReviewsController@edit');
  Route::get('/edit_prof', 'HomeController@edit')->name('edit_prof');
  Route::post('/update_prof', 'HomeController@update')->name('update_prof');
  Route::post('/upload','HomeController@upload');
  Route::get('/profile', 'HomeController@show')->name('profile');

  Route::delete('comment/{id}','CommentsController@destroy');
});

  Route::get('/', 'ReviewsController@index')->name('/');

  Route::resource('reviews','ReviewsController');
  Route::post('comment/{id}','CommentsController@store');

  Route::get('tag_lists/{id}','Tag_listsController@index');

  Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home');
