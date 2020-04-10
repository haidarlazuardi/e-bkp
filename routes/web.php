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

Route::group(['middleware' => ['auth','checkRole:guru,']], function () {
	
	Route::get('/punishment/siswa','Punishment_trController@index')->name('guru.punishment');

	Route::get('/reward/siswa','Reward_trController@index')->name('guru.reward');


});

Route::group(['middleware' => ['auth','checkRole:admin,guru']], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	Route::get('/reward','RewardController@index')->name('reward');
	Route::post('/reward/create','RewardController@create')->name('reward.create');
	Route::get('/reward/{id}/delete','RewardController@delete')->name('reward.delete');
	

	Route::get('/punishment','PunishmentController@index')->name('punishment');
	Route::post('/punishment/create','PunishmentController@create')->name('punishment.create');
	Route::get('/punishment/{id}/delete','PunishmentController@delete')->name('punishment.delete');

	Route::get('/siswa','SiswaController@index')->name('siswa');
	Route::post('/siswa/create','SiswaController@create')->name('create');
	Route::get('/siswa/{id}/delete','SiswaController@delete')->name('siswa.delete');

	Route::get('/guru','GuruController@index')->name('guru');
	Route::post('/guru/create','GuruController@create')->name('guru.create');
	Route::get('/guru/{id}/delete','GuruController@delete')->name('guru.delete');
	

	Route::get('/rayon','RayonController@index')->name('rayon');
	Route::post('/rayon/create','RayonController@create')->name('rayon.create');
	Route::get('/rayon/{id}/delete','RayonController@delete')->name('rayon.delete');

	Route::get('/rombel','RombelController@index')->name('rombel');
	Route::post('/rombel/create','RombelController@create')->name('rombel.create');
	Route::get('/rombel/{id}/delete','RombelController@delete')->name('rombel.delete');

	Route::get('/jurusan','JurusanController@index')->name('jurusan');
	Route::post('/jurusan/create','JurusanController@create')->name('major.create');
	Route::get('/jurusan/{id}/delete','JurusanController@delete')->name('jurusan.delete');
});

