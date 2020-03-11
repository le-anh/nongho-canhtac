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
    Route::prefix('loai-thuoc-bvtv')->name('loaithuocbvtv.')->group(function () {
        Route::get('/', 'LoaiThuocBvtvController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'LoaiThuocBvtvController@taomoi')->name('taomoi');
        Route::post('luu', 'LoaiThuocBvtvController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'LoaiThuocBvtvController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'LoaiThuocBvtvController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'LoaiThuocBvtvController@xoa')->name('xoa');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
