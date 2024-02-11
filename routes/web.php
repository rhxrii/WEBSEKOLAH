<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\InformasiController;
use Illuminate\Support\Facades\Route;
use Alaouy\Youtube\Facades\Youtube;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(BeritaController::class)->prefix('/home/berita')->group(function ($id = null) {

    Route::post('/upload_tag_berita', 'upload_tag_berita')->name('upload_tag_berita');
    Route::get('/hapus_tag_berita/{id}/hapus_tagberita', 'hapus_tagberita')->name('hapus_tagberita', $id);
    Route::get('/tambah_berita', 'tambah_berita')->name('tambah_berita');
    Route::post('/upload_berita', 'upload_berita')->name('upload_berita');
    
    Route::get('/daftar_berita', 'daftar_berita')->name('daftar_berita');
    Route::get('/daftar_berita/{id}/lihat_beritaadm', 'lihat_beritaadm')->name('lihat_beritaadm', $id);
    Route::get('/daftar_berita/{id}/hapus_beritaadm', 'hapus_beritaadm')->name('hapus_beritaadm', $id);
    Route::get('/daftar_berita/{id}/edit_beritaadm', 'edit_beritaadm')->name('edit_beritaadm', $id);
    Route::post('/daftar_berita/{id}/edit_beritaadm/update_beritaadm', 'update_beritaadm')->name('update_beritaadm', $id);
});

Route::controller(InformasiController::class)->prefix('/home/informasi')->group(function($id = null){

    Route::post('/upload_tag_informasi', 'upload_tag_informasi')->name('upload_tag_informasi');
    Route::get('/hapus_tag_informasi/{id}/hapus_taginformasi', 'hapus_taginformasi')->name('hapus_taginformasi', $id);
    Route::get('/tambah_informasi', 'tambah_informasi')->name('tambah_informasi');
    Route::post('/upload_informasi', 'upload_informasi')->name('upload_informasi');

    Route::get('/daftar_informasi', 'daftar_informasi')->name('daftar_informasi');
    Route::get('/daftar_informasi/{id}/lihat_informasiadm', 'lihat_informasiadm')->name('lihat_informasiadm', $id);
    Route::get('/daftar_informasi/{id}/hapus_informasiadm', 'hapus_informasiadm')->name('hapus_informasiadm', $id);
    Route::get('/daftar_informasi/{id}/edit_informasiadm', 'edit_informasiadm')->name('edit_informasiadm', $id);
    Route::post('/daftar_informasi/{id}/edit_informasiadm/update_informasiadm', 'update_informasiadm')->name('update_informasiadm', $id);

});

Route::controller(GaleriController::class)->prefix('/home/galeri')->group(function(){

    Route::get('/foto', 'indexfoto')->name('indexfoto');
    Route::post('/foto/uploadfoto', 'uploadfoto')->name('uploadfoto');
    Route::get('/foto/{id}/hapusfoto', 'hapusfoto')->name('hapusfoto');
    Route::get('/video', 'indexvideo')->name('indexvideo');
    Route::post('/video/uploadvideo', 'uploadvideo')->name('uploadvideo');
});