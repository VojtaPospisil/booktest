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



Route::get('/create_author', 'ControllerAuthor@newAuthor');

Route::post('/create_author', 'ControllerAuthor@createAuthor');
Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'ControllerBooks@showBooks');

Route::get('/authors' , 'ControllerAuthor@getAuthor')->name('authors');

Route::get('/delete/{id}' , 'ControllerAuthor@delAuthor');

Route::get('/edit/{id}' , 'ControllerAuthor@edit');

Route::post('/edit/{id}' , 'ControllerAuthor@editAuthor');

Route::get('/new_book' , 'ControllerBooks@getBooks');
Route::post('/new_book' , 'ControllerBooks@newBook');
