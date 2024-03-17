<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dakelController;
use App\Http\Controllers\dapenController;
use App\Http\Controllers\dakemController;
use App\Http\Controllers\kkController;
use App\Http\Controllers\mutasiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\suratktpController;
use App\Http\Controllers\suratmutasiController;
/*
|--------------------------------------------------------------------------|
| Web Routes                                                               |
|--------------------------------------------------------------------------|
|                                                                          |
| Here is where you can register web routes for your application. These    |
| routes are loaded by the RouteServiceProvider and all of them will       |
| be assigned to the "web" middleware group. Make something great!         |
|                                                                          |
*/

//dakel
Route::get('/', [App\Http\Controllers\userController::class,'login']);
Route::post('/login', [App\Http\Controllers\userController::class,'logins']);
Route::get('/logout', [App\Http\Controllers\userController::class,'logout']);

Route::get('/dakel',[dakelController::class, 'semua_dakel']);

Route::get('/dakel/print/{id_dakel}',[dakelController::class, 'print_dakel']);

Route::get('/dakel/create', function () {
    return view('dakel');
});

Route::post('/create',[App\Http\Controllers\dakelController::class,'simpan_dakel']);
Route::post('/editdakel/{id}',[App\Http\Controllers\dakelController::class,'update_dakel']);
Route::get('dakel/{id_dakel}/edit',[App\Http\Controllers\dakelController::class,'edit_dakel']);
Route::get('dakel/{id_dakel}/hapus',[App\Http\Controllers\dakelController::class,'destroy']);

//dapen
Route::get('/dapen',[dapenController::class, 'semua_dapen']);
Route::post('/dapen/create',[App\Http\Controllers\dapenController::class,'simpan_dapen']);
Route::get('/dapen/print',[App\Http\Controllers\dapenController::class,'print_dapen']);
Route::post('/editdapen/{nik}',[App\Http\Controllers\dapenController::class,'update_dapen']);
Route::get('/dapen/{nik}/edit',[App\Http\Controllers\dapenController::class,'edit_dapen']);
Route::get('dapen/{nik}/hapus',[App\Http\Controllers\dapenController::class,'destroy']);

//dakem
Route::get('/dakem',[dakemController::class, 'semua_dakem']);
Route::get('/dakem/create', function () {
    return view('dakem');
});
Route::post('/create',[App\Http\Controllers\dakemController::class,'simpan_dakem']);
Route::post('/dakem/{id_dakem}/update',[App\Http\Controllers\dakemController::class,'update_dakem']);
Route::get('dakem/{id_dakem}/edit',[App\Http\Controllers\dakemController::class,'edit_dakem']);
Route::get('dakem/{id_dakem}/hapus',[App\Http\Controllers\dakemController::class,'destroy']);

//kk
Route::get('/kk',[kkController::class, 'semua_kk']);
Route::get('/kk/create', function () {
    return view('kk');
});
Route::post('/kk/create',[App\Http\Controllers\kkController::class,'simpan_kk']);
Route::post('/kk/{id}/update',[App\Http\Controllers\kkController::class,'update_kk']);
Route::get('kk/{id_kk}/edit',[App\Http\Controllers\kkController::class,'edit_kk']);
Route::get('kk/{id_kk}/hapus',[App\Http\Controllers\kkController::class,'destroy']);

//mutasi
Route::get('/mutasi',[mutasiController::class, 'semua_mutasi']);

Route::post('/mutasi/create',[App\Http\Controllers\mutasiController::class,'simpan_mutasi']);
Route::post('/mutasi/{id_mutasi}/update',[App\Http\Controllers\mutasiController::class,'update_mutasi']);
Route::get('mutasi/{id_mutasi}/edit',[App\Http\Controllers\mutasiController::class,'edit_mutasi']);
Route::get('mutasi/{id_mutasi}/hapus',[App\Http\Controllers\mutasiController::class,'destroy']);

//user
Route::get('/user',[userController::class, 'semua_user']);
Route::get('/user/create', function () {
    return view('user');
});
Route::post('/create',[App\Http\Controllers\userController::class,'simpan_user']);
Route::post('/user/{id}/update',[App\Http\Controllers\userController::class,'update_user']);
Route::get('user/{id_user}/edit',[App\Http\Controllers\userController::class,'edit_user']);
Route::get('user/{id_user}/hapus',[App\Http\Controllers\userController::class,'destroy']);

//login
Route::get('/user',[userController::class, 'semua_user']);

Route::post('/user/create',[App\Http\Controllers\userController::class,'simpan_user']);
Route::post('/editlogin',[App\Http\Controllers\userController::class,'update_user']);
Route::get('user/{id_user}/edit',[App\Http\Controllers\userController::class,'edit_user']);
Route::get('user/{id_user}/hapus',[App\Http\Controllers\userController::class,'destroy']);

//suratktp
Route::get('/ktp/',[suratktpController::class, 'semua_ktp']);
Route::post('/ktp/create',[App\Http\Controllers\suratktpController::class,'simpan_ktp']);
Route::post('/ktp/{no_surat}/update',[App\Http\Controllers\suratKtpController::class,'update_ktp']);
Route::get('ktp/{no_surat}/edit',[App\Http\Controllers\suratktpController::class,'edit_ktp']);
Route::get('ktp/{no_surat}/hapus',[App\Http\Controllers\suratktpController::class,'destroy']);
Route::get('/{no_surat}/printktp',[suratktpController::class,'print']);

//suratmati
Route::get('suratmati/',[App\Http\Controllers\suratmatiController::class, 'semua_mati']);
Route::post('/suratmati/create',[App\Http\Controllers\suratmatiController::class,'simpan_mati']);
Route::post('/suratmati/{no_surat}/update',[App\Http\Controllers\suratmatiController::class,'update_mati']);
Route::get('suratmati/{no_surat}/edit',[App\Http\Controllers\suratmatiController::class,'edit_mati']);
Route::get('suratmati/{no_surat}/hapus',[App\Http\Controllers\suratmatiController::class,'destroy']);
Route::get('/suratmati/{no_surat}/print',[App\Http\Controllers\suratmatiController::class,'print']);

//suratlahir
Route::get('suratlahir/',[App\Http\Controllers\suratlahirController::class, 'semua_lahir']);
Route::post('/suratlahir/create',[App\Http\Controllers\suratlahirController::class,'simpan_lahir']);
Route::post('/suratlahir/{no_surat}/update',[App\Http\Controllers\suratlahirController::class,'update_lahir']);
Route::get('suratlahir/{no_surat}/edit',[App\Http\Controllers\suratlahirController::class,'edit_lahir']);
Route::get('suratlahir/{no_surat}/hapus',[App\Http\Controllers\suratlahirController::class,'destroy']);
Route::get('/suratlahir/{no_surat}/print',[App\Http\Controllers\suratlahirController::class,'print']);


//suratmutasi
Route::get('/suratmutasi',[suratmutasiController::class, 'pindah']);
Route::post('suratmutasi/create',[App\Http\Controllers\suratmutasiController::class,'simpan_pindah']);
Route::post('/suratmutasi/{no_surat}/update',[App\Http\Controllers\suratmutasiController::class,'update_pindah']);
Route::get('suratmutasi/{no_surat}/edit',[App\Http\Controllers\suratmutasiController::class,'edit_pindah']);
Route::get('suratmutasi/{no_surat}/hapus',[App\Http\Controllers\suratmutasiController::class,'destroy']);
Route::get('/suratmutasi/{no_surat}/print',[suratmutasiController::class,'print']);