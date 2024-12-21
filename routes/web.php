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

// Главная
Route::get('/', 'ImagesController@index');

// Загрузка новой картинки
Route::get('/create', 'ImagesController@create');

// Сохранение картинки
Route::post('/store', 'ImagesController@store');

// Отображение единичной картинки
Route::get('/show/{id}', 'ImagesController@getOne');

// Редактирование картинки
Route::get('/edit/{id}', 'ImagesController@edit');

// Обновление картинки
Route::post('/update/{id}', 'ImagesController@update');

// Удаление картинки
Route::get('/delete/{id}', 'ImagesController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
