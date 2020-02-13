<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//siswa
Route::get('siswa','SiswaController@index');
Route::post('siswa','SiswaController@create');
Route::put('/siswa/{nis}','SiswaController@update');
Route::delete('/siswa/{nis}','SiswaController@delete');

//guru
Route::get('guru','GuruController@index');
Route::post('guru','GuruController@create');
Route::put('/guru/{nip}','GuruController@update');
Route::delete('/guru/{nip}','GuruController@delete');

//kelas
Route::get('kelas','KelasController@index');
Route::post('kelas','KelasController@create');
Route::put('/kelas/{kelas}','KelasController@update');
Route::delete('/kelas/{kelas}','KelasController@delete');

//jenistabungan
Route::get('JenisTabungan','JenisTabunganController@index');
Route::post('JenisTabungan','JenisTabunganController@create');
Route::put('/JenisTabungan/{id}','JenisTabunganController@update');
Route::delete('/JenisTabungan/{id}','JenisTabunganController@delete');

//transaksi
Route::get('transaksi','TransaksiController@index');
Route::post('transaksi','TransaksiController@create');
Route::put('/transaksi/{idTransaksi}','TransaksiController@update');
Route::delete('/transaksi/{id}','TransaksiController@delete');