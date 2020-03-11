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
    return view('welcom');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('welcom');
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
    Route::prefix('thuoc-bvtv')->name('thuocbvtv.')->group(function () {
        Route::get('/', 'ThuocBvtvController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'ThuocBvtvController@taomoi')->name('taomoi');
        Route::post('luu', 'ThuocBvtvController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'ThuocBvtvController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'ThuocBvtvController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'ThuocBvtvController@xoa')->name('xoa');
    });
});

Auth::routes();

Route::get('/welcom', 'HomeController@index')->name('welcom');
