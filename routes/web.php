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
	//  phân bón
	Route::prefix('phan-bon')->name('phanbon.')->group(function () {
        Route::get('/', 'PhanBonController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'PhanBonController@taomoi')->name('taomoi');
        Route::post('luu', 'PhanBonController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'PhanBonController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'PhanBonController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'PhanBonController@xoa')->name('xoa');
    });
    // Loại phân bón
    Route::prefix('loai-phan-bon')->name('loaiphanbon.')->group(function () {
        Route::get('/', 'LoaiPhanBonController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'LoaiPhanBonController@taomoi')->name('taomoi');
        Route::post('luu', 'LoaiPhanBonController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'LoaiPhanBonController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'LoaiPhanBonController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'LoaiPhanBonController@xoa')->name('xoa');
	// Quy trình
    });
    Route::prefix('quy-trinh')->name('quytrinh.')->group(function () {
        Route::get('/', 'QuyTrinhController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'QuyTrinhController@taomoi')->name('taomoi');
        Route::post('luu', 'QuyTrinhController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'QuyTrinhController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'QuyTrinhController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'QuyTrinhController@xoa')->name('xoa');
	// Gia đoạn quy trình
    });
    Route::prefix('giai-doan-quy-trinh')->name('giaidoanquytrinh.')->group(function () {
        Route::get('/', 'GiaiDoanQuyTrinhController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'GiaiDoanQuyTrinhController@taomoi')->name('taomoi');
        Route::post('luu', 'GiaiDoanQuyTrinhController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'GiaiDoanQuyTrinhController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'GiaiDoanQuyTrinhController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'GiaiDoanQuyTrinhController@xoa')->name('xoa');
    });
    // Sổ canh tác
    Route::prefix('so-canh-tac')->name('socanhtac.')->group(function () {
        Route::get('/', 'SoCanhTacController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'SoCanhTacController@taomoi')->name('taomoi');
        Route::post('luu', 'SoCanhTacController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'SoCanhTacController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'SoCanhTacController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'SoCanhTacController@xoa')->name('xoa');
    });
    // Nhật ký canh tac
    Route::prefix('nhat-ky-canh-tac')->name('nhatkycanhtac.')->group(function () {
        Route::get('/', 'NhatKyCanhTacController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'NhatKyCanhTacController@taomoi')->name('taomoi');
        Route::post('luu', 'NhatKyCanhTacController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'NhatKyCanhTacController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'NhatKyCanhTacController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'NhatKyCanhTacController@xoa')->name('xoa');
    });
    // Chi tiết nhật ký canh tác
    Route::prefix('chi-tiet-nhat-ky-canh-tac')->name('nhatkycanhtac_chitiet.')->group(function () {
        Route::get('/', 'ChiTietNhatKyCanhTacController@trangchu')->name('trangchu');
        Route::get('tao-moi', 'ChiTietNhatKyCanhTacController@taomoi')->name('taomoi');
        Route::post('luu', 'ChiTietNhatKyCanhTacController@luu')->name('luu');
        Route::get('chinh-sua/{id}', 'ChiTietNhatKyCanhTacController@chinhsua')->name('chinhsua');
        Route::put('cap-nhat', 'ChiTietNhatKyCanhTacController@capnhat')->name('capnhat');
        Route::delete('xoa/{id}', 'ChiTietNhatKyCanhTacController@xoa')->name('xoa');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
