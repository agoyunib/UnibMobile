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
    return view('welcome');
});

Auth::routes();

Route::get('/rumahku', 'AuthAdmin\LoginController@index')->name('login.admin')->middleware('guest');
Route::post('/actionrumahku', 'AuthAdmin\LoginController@login')->name('login.admin.action');
Route::get('/logoutrumahku', 'AuthAdmin\LoginController@logout')->name('logout.admin');

// Administrator 
Route::prefix('admin/dashboard')->group(function () {
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    // Route::post('/addsmtrskp', 'Admin\SemesterSkpController@addSmtrSkp')->name('admin.addSmtrskp');
    // Route::get('/editsmtrskp', 'Admin\SemesterSkpController@editSmtrSkp')->name('admin.editSmtrskp');
    // Route::post('/updatesmtrskp', 'Admin\SemesterSkpController@updateSmtrSkp')->name('admin.updateSmtrSkp');
    // Route::get('/deletesmtrskp/{id}', 'Admin\SemesterSkpController@deleteSmtrSkp')->name('admin.deleteSmtrSkp');
});

Route::prefix('admin/periode')->group(function () {
    Route::get('/', 'Admin\PeriodeController@index')->name('admin.periode');
    Route::delete('/hapus/{id}', 'Admin\PeriodeController@hapus')->name('admin.hapusperiode');
    Route::get('/ubah/{id}', 'Admin\PeriodeController@ubah')->name('admin.ubahperiode');
    Route::post('/update','Admin\PeriodeController@update')->name('admin.updateperiode');
    Route::get('/tambah','Admin\PeriodeController@tambah')->name('admin.tambahperiode');
    Route::post('/simpan','Admin\PeriodeController@store')->name('admin.simpanperiode');
});

Route::prefix('admin/orangtua')->group(function () {
    Route::get('/', 'Admin\OrangtuaController@index')->name('admin.orangtua');
    Route::delete('/hapus/{id}', 'Admin\OrangtuaController@hapus')->name('admin.hapususer');
    Route::get('/ubah/{id}', 'Admin\OrangtuaController@ubah')->name('admin.ubahuser');
    Route::post('/update','Admin\OrangtuaController@update')->name('admin.updateuser');
    Route::get('/tambah','Admin\OrangtuaController@tambah')->name('admin.tambahuser');
    Route::post('/simpan','Admin\OrangtuaController@store')->name('admin.simpanuser');
});

Route::prefix('/orangtua')->group(function () {
    Route::get('/dashboard', 'DashboardOrangTuaController@index')->name('orangtua.dashboard');
    Route::get('/mata_kuliah', 'MataKuliahController@index')->name('orangtua.mata_kuliah');
    Route::post('/mata_kuliah/get_semester', 'MataKuliahController@getSemester')->name('orangtua.matakuliah.get_periode');
    Route::get('/presensi', 'PresensiOrangtuaController@index')->name('orangtua.presensi');
    Route::post('/presensi/get_semester', 'PresensiOrangtuaController@getSemester')->name('orangtua.presensi.get_periode');
});
Route::prefix('admin/presensi')->group(function () {
    Route::get('/', 'Admin\PresensiController@cariReviewer')->name('admin.presensi');

});
// Admin Fakultas
Route::prefix('fakultas/dashboard')->group(function () {
    Route::get('/', 'Fakultas\DashboardController@index')->name('fakultas.dashboard');
    // Route::post('/addsmtrskp', 'Admin\SemesterSkpController@addSmtrSkp')->name('admin.addSmtrskp');
    // Route::get('/editsmtrskp', 'Admin\SemesterSkpController@editSmtrSkp')->name('admin.editSmtrskp');
    // Route::post('/updatesmtrskp', 'Admin\SemesterSkpController@updateSmtrSkp')->name('admin.updateSmtrSkp');
    // Route::get('/deletesmtrskp/{id}', 'Admin\SemesterSkpController@deleteSmtrSkp')->name('admin.deleteSmtrSkp');
});
