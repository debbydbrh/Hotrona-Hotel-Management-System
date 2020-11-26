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
    return view('home');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::group(['middleware' => ['auth','checkRole:admin']],function(){

    Route::get('/room','RoomController@index');
    Route::get('/transaksi','TransaksiController@index');
    Route::get('/item','ItemController@index');
    Route::get('/transaksibarang','TransaksibarangController@index');
    Route::get('/pengumuman','PengumumanController@index');
    Route::get('/karyawan','KaryawanController@index');

    Route::post('/room/create','RoomController@create');
    Route::post('/transaksi/create','TransaksiController@create');
    Route::post('/item/create','ItemController@create');
    Route::post('/transaksibarang/create','TransaksibarangController@create');
    Route::post('/pengumuman/create','PengumumanController@create');
    Route::post('/karyawan/create','KaryawanController@create');

    Route::get('/room/{id}/edit','RoomController@edit');
    Route::get('/transaksi/{id}/edit','TransaksiController@edit');
    Route::get('/item/{id}/edit','ItemController@edit');
    Route::get('/transaksibarang/{id}/edit','TransaksibarangController@edit');
    Route::get('/pengumuman/{id}/edit','PengumumanController@edit');
    Route::get('/karyawan/{id}/edit','KaryawanController@edit');

    Route::post('/room/{id}/update','RoomController@update');
    Route::post('/transaksi/{id}/update','TransaksiController@update');
    Route::post('/item/{id}/update','ItemController@update');
    Route::post('/transaksibarang/{id}/update','TransaksibarangController@update');
    Route::post('/pengumuman/{id}/update','PengumumanController@update');
    Route::post('/karyawan/{id}/update','KaryawanController@update');

    Route::get('/room/{id}/delete','RoomController@delete');
    Route::get('/transaksi/{id}/delete','TransaksiController@delete');
    Route::get('/item/{id}/delete','ItemController@delete');
    Route::get('/transaksibarang/{id}/delete','TransaksibarangController@delete');
    Route::get('/pengumuman/{id}/delete','PengumumanController@delete');
    Route::get('/karyawan/{id}/delete','KaryawanController@delete');


    Route::get('/transaksi/exportpdf','TransaksiController@exportPdf');
    
    
});

Route::group(['middleware' => ['auth','checkRole:admin,resepsionis']],function(){
    Route::get('/dashboard','DashboardController@index');

    Route::get('/room','RoomController@index');
    Route::get('/transaksi','TransaksiController@index');



    Route::post('/room/create','RoomController@create');
    Route::post('/transaksi/create','TransaksiController@create');



    Route::get('/room/{id}/edit','RoomController@edit');
    Route::get('/transaksi/{id}/edit','TransaksiController@edit');



    Route::post('/room/{id}/update','RoomController@update');
    Route::post('/transaksi/{id}/update','TransaksiController@update');



    Route::get('/room/{id}/delete','RoomController@delete');
    Route::get('/transaksi/{id}/delete','TransaksiController@delete');

    Route::get('/transaksi/exportpdf','TransaksiController@exportPdf');



});

Route::group(['middleware' => ['auth','checkRole:admin,inventaris']],function(){
    Route::get('/dashboard','DashboardController@index');


    Route::get('/item','ItemController@index');
    Route::get('/transaksibarang','TransaksibarangController@index');



    Route::post('/item/create','ItemController@create');
    Route::post('/transaksibarang/create','TransaksibarangController@create');




    Route::get('/item/{id}/edit','ItemController@edit');
    Route::get('/transaksibarang/{id}/edit','TransaksibarangController@edit');




    Route::post('/item/{id}/update','ItemController@update');
    Route::post('/transaksibarang/{id}/update','TransaksibarangController@update');




    Route::get('/item/{id}/delete','ItemController@delete');
    Route::get('/transaksibarang/{id}/delete','TransaksibarangController@delete');


    Route::get('/transaksibarang/exportpdf','TransaksibarangController@exportPdf');

});