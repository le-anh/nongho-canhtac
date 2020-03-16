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
		Route::delete('delete/{id}', 'LoaiGiongController@postDelete')->name('delete');

	});

	/*Giong*/ 
	Route::prefix('giong')->name('giong.')->group(function () {

		Route::get('', 'GiongController@getIndex')->name('index');
		Route::get('create', 'GiongController@getCreate')->name('create');
		Route::post('store', 'GiongController@postCreate')->name('store');
		Route::get('edit/{id}', 'GiongController@getEdit')->name('edit');
		Route::put('update', 'GiongController@postEdit')->name('update');
		Route::delete('delete/{id}', 'GiongController@postDelete')->name('delete');

	});

	/*Loai Thuoc  Bvtv*/ 
	Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function () {

		Route::get('', 'LoaiThuocBVTVController@getIndex')->name('index');
		Route::get('create', 'LoaiThuocBVTVController@getCreate')->name('create');
		Route::post('store', 'LoaiThuocBVTVController@postCreate')->name('store');
		Route::get('edit/{id}', 'LoaiThuocBVTVController@getEdit')->name('edit');
		Route::put('update', 'LoaiThuocBVTVController@postEdit')->name('update');
		Route::delete('delete/{id}', 'LoaiThuocBVTVController@postDelete')->name('delete');

	});

	/*Thuoc  Bvtv*/ 
	Route::prefix('thuoc-bvtv')->name('thuocbvtv.')->group(function () {

		Route::get('', 'ThuocBVTVController@getIndex')->name('index');
		Route::get('create', 'ThuocBVTVController@getCreate')->name('create');
		Route::post('store', 'ThuocBVTVController@postCreate')->name('store');
		Route::get('edit/{id}', 'ThuocBVTVController@getEdit')->name('edit');
		Route::put('update', 'ThuocBVTVController@postEdit')->name('update');
		Route::delete('delete/{id}', 'ThuocBVTVController@postDelete')->name('delete');

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

	/* Loai Vat Tu */
	Route::prefix('loai-vat-tu')->name('loaivattu.')->group(function () {

		Route::get('', 'LoaiVatTuController@getIndex')->name('index');
		Route::get('create', 'LoaiVatTuController@getCreate')->name('create');
		Route::post('store', 'LoaiVatTuController@postCreate')->name('store');
		Route::get('edit/{id}', 'LoaiVatTuController@getEdit')->name('edit');
		Route::put('update', 'LoaiVatTuController@postEdit')->name('update');
		Route::delete('delete/{id}', 'LoaiVatTuController@postDelete')->name('delete');

	});
  
  /* Loai Tieu Chuan SX */
	Route::prefix('loai-tieu-chuan-san-xuat')->name('loaitieuchuansx.')->group(function () {

		Route::get('', 'LoaiTieuChuanSXController@getIndex')->name('index');
		Route::get('create', 'LoaiTieuChuanSXController@getCreate')->name('create');
		Route::post('store', 'LoaiTieuChuanSXController@postCreate')->name('store');
		Route::get('edit/{id}', 'LoaiTieuChuanSXController@getEdit')->name('edit');
		Route::put('update', 'LoaiTieuChuanSXController@postEdit')->name('update');
		Route::delete('delete/{id}', 'LoaiTieuChuanSXController@postDelete')->name('delete');
	});
  
	/* Tieu Chuan SX */
	Route::prefix('tieu-chuan-san-xuat')->name('tieuchuansx.')->group(function () {

		Route::get('', 'TieuChuanSXController@getIndex')->name('index');
		Route::get('create', 'TieuChuanSXController@getCreate')->name('create');
		Route::post('store', 'TieuChuanSXController@postCreate')->name('store');
		Route::get('edit/{id}', 'TieuChuanSXController@getEdit')->name('edit');
		Route::put('update', 'TieuChuanSXController@postEdit')->name('update');
		Route::delete('delete/{id}', 'TieuChuanSXController@postDelete')->name('delete');
	});
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');