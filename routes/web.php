<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pengajuanController;
use App\Http\Controllers\managementUser;
use App\Http\Controllers\testing;
use App\Http\Controllers\verifikasiController;
use App\Http\Controllers\adminVerifikasiControler;
use App\Http\Controllers\adminpengajuanController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'handleAdmin'])->name('admin.route')->middleware('admin');

//DASHBOARD MITRA & ADMIN
Route::get('/dashboard',[pengajuanController::class,'dashboard']);
Route::get('/dashboardAdmin',[pengajuanController::class,'dashboardAdmin']);
//MANAGEMEN-PENGAJUAN
Route::get('/tampil_pengajuan',[pengajuanController::class, 'tampilPengajuan']);
Route::get('/form_pengajuan',[pengajuanController::class, 'form_pengajuan']);
Route::post('/store_pengajuan',[pengajuanController::class, 'store_pengajuan']);
Route::get('/formdataPelaksana/{id}/cek', [pengajuanController::class, 'formPelaksana']);
Route::post('/formeditPelaksana/{id}/store',[pengajuanController::class, 'formEditPelaksana']);
Route::post('/store_pelaksana', [pengajuanController::class, 'storePelaksana']);
Route::get('/form_editPengajuan/{id}/cek', [pengajuanController::class, 'formEditPengajuan']);
Route::put('/store_editPengajuan/{id}/store', [pengajuanController::class, 'storeEditPengajuan']);
//PRINT TEMPLATE
// Route::get('/print_template',[pengajuanController::class,'printTemplate']);
Route::get('/preview/{id}/cek',[pengajuanController::class, 'downloadFile']);

//DATA USER
Route::get('/tampil_user',[managementUser::class, 'tampilUser']);
Route::get('/tambah_user',[managementUser::class, 'formTambahUser']);
Route::post('/tambah_user',[managementUser::class, 'insertUser']);
Route::delete('/deleteUser/{id}',[managementUser::class, 'destroy']);
Route::get('user/{id}/updateUser', [managementUser::class, 'editUsers']);
Route::put('user/{id}/updateUser',[managementUser::class, 'updateUsers']);

Route::get('/template',[pengajuanController::class,'tampil']);
Route::get('/convert',[pengajuanController::class,'convert_Form']);

Route::get('/testingTampil',[pengajuanController::class,'testingConvert']);
Route::get('/testingView',[pengajuanController::class,'testingView']);
Route::get('/testing', [testing::class, 'dataTesting1']);

//Verifikasi
Route::get('/verifikasi', [verifikasiController::class, 'formVerifikasi']);
Route::post('/store_verifikasi', [verifikasiController::class, 'insertVerifikasi']);
Route::get('/tampil_verifikasi', [verifikasiController::class, 'tampilVerifikasi']);
Route::get('/edit/{id}/cek', [verifikasiController::class, 'editVerifikasi']);
Route::put('/edit/{id}/updateVerifikasi', [verifikasiController::class, 'updateVerifikasi']);
Route::get('/editRejected/{id}/cek', [verifikasiController::class, 'formrevisiRejectedVerifikasi']);
Route::put('/editRejected/{id}/cek', [verifikasiController::class, 'storeRefisiRejected']);
Route::get('/revisiverifikasi/{id}/cek', [verifikasiController::class, 'formRefisiVerifikasi']);
Route::put('/revisiverifikasi/{id}/cek', [verifikasiController::class, 'storeDataRevisiVerifikasi']);

//Admin Verifikasi
Route::get('/tampiladminVerifikasi', [adminVerifikasiControler::class, 'verifikasiAdmin']);
Route::get('/approved/{id}/verifikasi', [adminVerifikasiControler::class, 'approvedVerifikasi']);
Route::get('/unapproved/{id}/verifikasi',[adminVerifikasiControler::class,'unapprovedVerifikasi']);
Route::get('/komentar/{id}/cek', [adminVerifikasiControler::class, 'komentarVerifikasi']);
Route::put('/rejected/{id}/komentar', [adminVerifikasiControler::class, 'dataRejectedVerifikasi']);

//DownloadPDFScan
Route::get('/downloadfile/{id}/cek', [verifikasiController::class, 'downloadScanPDF']);

//ADMIN MANAGEMEN-PENGAJUAN 
Route::get('/tampilDataPengajuanAdmin', [adminpengajuanController::class, 'tampilPengajuanAdmin']);
Route::put('/konfirmasiPTL/{id}/update', [adminpengajuanController::class, 'konfirmasidataPengajuan']);
Route::put('/konfirmasirefisiPTL/{id}/update', [adminpengajuanController::class, 'refisikonfirmasidataPengajuan']);