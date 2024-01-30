<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

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
});