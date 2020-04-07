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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','checkRole:admin']], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	Route::get('/reward','RewardController@index')->name('reward');
	

	Route::get('/punishment','PunishmentController@index')->name('punishment');

	Route::get('/siswa','SiswaController@index')->name('siswa');

	Route::get('/guru','GuruController@index')->name('guru');

	Route::get('/rayon','RayonController@index')->name('rayon');

	Route::get('/rombel','RombelController@index')->name('rombel');

	Route::get('/jurusan','JurusanController@index')->name('jurusan');

});

