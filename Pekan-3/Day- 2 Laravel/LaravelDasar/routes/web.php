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

/*Route::get('aaaa', function () {
    return view('welcome');
});*/
Route::get('aaa', function () {
    return view('index');
});

Route::get('welcome', 'PendahuluanController@index');
Route::get('/register', 'PendahuluanController@form' );
Route::post('selamatdatang', 'PendahuluanController@berhasil' );
//Templating Laravel Day 3
Route::get('/', function () {
    return view('items/tabel');
});
Route::get('/data-tabel', function () {
    return view('items/tabel2');
});

//Pertanyaan
Route::get('/pertanyaan', 'PertanyaanController@index' );
Route::get('/pertanyaan/create', 'PertanyaanController@create' );
Route::post('/pertanyaan', 'PertanyaanController@store' );
Route::get('/pertanyaan/{id}', 'PertanyaanController@show' );
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit' );
Route::put('/pertanyaan/{id}', 'PertanyaanController@update' );
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy' );