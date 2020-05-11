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

Route::group(['middleware' => ['auth','checkRole:guru,siswa']], function () {
	
	Route::get('/punishment/siswa','Punishment_trController@index')->name('guru.punishment');
	Route::get('/punishment/siswa/data','Punishment_trController@show')->name('guru.punishment.show');
	Route::get('/data/punishment','Punishment_trController@detail')->name('punishment.detail');
	Route::get('punishment-pdf','Punishment_trController@cetak_pdf')->name('punishment.cetak');
	Route::post('/punishment/siswa/create','Punishment_trController@create')->name('guru.punishment.create');
	Route::get('/punishtr/{id}/delete','Punishment_trController@delete')->name('guru.punishment.delete');

	Route::get('/reward/siswa','Reward_trController@index')->name('guru.reward');
	Route::get('/reward/siswa/data','Reward_trController@show')->name('guru.reward.show');
	Route::get('/data/reward','Reward_trController@detail')->name('reward.detail');
	Route::get('reward-pdf','Reward_trController@cetak_pdf')->name('reward.cetak');
	Route::post('/reward/siswa/create','Reward_trController@create')->name('guru.reward.create');
	Route::get('/rewardtr/{id}/delete','Reward_trController@delete')->name('guru.reward.delete');

	Route::get('/data/teladan','TeladanController@index')->name('teladan');
	Route::get('/teladan/cetak','TeladanController@cetak_pdf')->name('teladan.cetak');

	Route::get('/data/peringatan','PeringatanController@index')->name('peringatan');
	Route::get('/peringatan/cetak','PeringatanController@cetak_pdf')->name('peringatan.cetak');


});

Route::group(['middleware' => ['auth','checkRole:admin,guru']], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	Route::get('/reward','RewardController@index')->name('reward');
	Route::post('/reward/create','RewardController@create')->name('reward.create'); 
	Route::get('/reward/{id}/delete','RewardController@delete')->name('reward.delete');
	Route::post('/reward/update','RewardController@update')->name('reward.edit');
	


	Route::get('/punishment','PunishmentController@index')->name('punishment');
	Route::post('/punishment/create','PunishmentController@create')->name('punishment.create');
	Route::get('/punishment/{id}/delete','PunishmentController@delete')->name('punishment.delete');
	Route::post('/punishment/update','PunishmentController@update')->name('punishment.edit');


	Route::get('/siswa','SiswaController@index')->name('siswa');
	Route::post('/siswa/create','SiswaController@create')->name('create');
	Route::get('/siswa/{id}/delete','SiswaController@delete')->name('siswa.delete');
	Route::post('/siswa/update','SiswaController@update')->name('siswa.edit');


	Route::get('/guru','GuruController@index')->name('guru');
	Route::post('/guru/create','GuruController@create')->name('guru.create');
	Route::get('/guru/{id}/delete','GuruController@delete')->name('guru.delete');
	Route::post('/guru/update','GuruController@update')->name('guru.edit');

	

	Route::get('/rayon','RayonController@index')->name('rayon');
	Route::post('/rayon/create','RayonController@create')->name('rayon.create');
	Route::get('/rayon/{id}/delete','RayonController@delete')->name('rayon.delete');
	Route::post('/rayon/update','RayonController@update')->name('rayon.edit');


	Route::get('/rombel','RombelController@index')->name('rombel');
	Route::post('/rombel/create','RombelController@create')->name('rombel.create');
	Route::get('/rombel/{id}/delete','RombelController@delete')->name('rombel.delete');
	Route::post('/rombel/update','RombelController@update')->name('rombel.edit');


	Route::get('/jurusan','JurusanController@index')->name('jurusan');
	Route::post('/jurusan/create','JurusanController@create')->name('major.create');
	Route::get('/jurusan/{id}/delete','JurusanController@delete')->name('jurusan.delete');
	Route::post('/jurusan/update','JurusanController@update')->name('major.edit');
});

