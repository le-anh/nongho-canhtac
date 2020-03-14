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



Route::prefix('farmer')->name('farmer.')->group(function () {

	Route::get('dashboard', function () {
		return view('farmer.dashboard');
	})->name('dashboard');

	Route::get('', function () {
		return view('farmer.dashboard');
	})->name('dashboard');


	/*Loai Giong*/ 
	Route::prefix('loai-giong')->name('loaigiong.')->group(function () {

		Route::get('', 'LoaiGiongController@getIndex')->name('index');
		Route::get('create', 'LoaiGiongController@getCreate')->name('create');
		Route::post('store', 'LoaiGiongController@postCreate')->name('store');
		Route::get('edit/{id}', 'LoaiGiongController@getEdit')->name('edit');
		Route::put('update', 'LoaiGiongController@postEdit')->name('update');
		Route::delete('delete/{id}', 'LoaiGiongController@getDelete')->name('delete');

	});

	/*Loai Thuoc Bvtv*/ 
	Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function () {

		Route::get('', 'LoaiThuocBvtvController@getIndex')->name('index');
		Route::get('create', 'LoaiThuocBvtvController@getCreate')->name('create');
		Route::post('store', 'LoaiThuocBvtvController@postCreate')->name('store');
		Route::get('edit/{id}', 'LoaiThuocBvtvController@getEdit')->name('edit');
		Route::put('update', 'LoaiThuocBvtvController@postEdit')->name('update');
		Route::delete('delete/{id}', 'LoaiThuocBvtvController@postDelete')->name('delete');
		Route::delete('delete/{id}', 'LoaiGiongController@postDelete')->name('delete');

	});
  
  /* Loai Phan bon */
	Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function () {

		Route::get('', 'LoaiPhanBonController@getIndex')->name('index');
		Route::get('create', 'LoaiPhanBonController@getCreate')->name('create');
		Route::post('store', 'LoaiPhanBonController@postCreate')->name('store');
		Route::get('edit/{id}', 'LoaiPhanBonController@getEdit')->name('edit');
		Route::put('update', 'LoaiPhanBonController@postEdit')->name('update');
		Route::delete('delete/{id}', 'LoaiPhanBonController@postDelete')->name('delete');
	});
	/* Phan Bon */
	Route::prefix('phan-bon')->name('phanbon.')->group(function () {

		Route::get('', 'PhanBonController@getIndex')->name('index');
		Route::get('create', 'PhanBonController@getCreate')->name('create');
		Route::post('store', 'PhanBonController@postCreate')->name('store');
		Route::get('edit/{id}', 'PhanBonController@getEdit')->name('edit');
		Route::put('update', 'PhanBonController@postEdit')->name('update');
		Route::delete('delete/{id}', 'PhanBonController@postDelete')->name('delete');
	});

});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');