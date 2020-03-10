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
    return view('home');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('dashboard');

    //  Loại giống
    Route::prefix('loai-giong')->name('loaigiong.')->group(function () {
        Route::get('/', 'LoaiGiongController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'LoaiGiongController@taomoi')->name('taomoi');
        Route::post('luu', 'LoaiGiongController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'LoaiGiongController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'LoaiGiongController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'LoaiGiongController@xoa')->name('xoa');
    });
	Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function () {
        Route::get('/', 'LoaiPhanBonController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'LoaiPhanBonController@taomoi')->name('taomoi');
        Route::post('luu', 'LoaiPhanBonController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'LoaiPhanBonController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'LoaiPhanBonController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'LoaiPhanBonController@xoa')->name('xoa');
	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
