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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('mhs','MhsController');
Route::resource('dosen','DosenController');
Route::resource('kuliah','KuliahController');
Route::resource('kelas','KelasController');
Route::resource('matkul','AmbilMatkulController');
Route::get('dosen/listMhsWali/{nip}', 'DosenController@listMhsWali');
Route::get('caridosen', 'DosenController@search');
Route::get('carimhs', 'MhsController@search');
Route::get('carikelas', 'KelasController@search');
Route::get('carikuliah', 'KuliahController@search');
Route::get('carimatkul', 'AmbilMatkulController@search');
