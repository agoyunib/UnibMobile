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

Route::prefix('/home')->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Route::post('/addsmtrskp', 'Admin\SemesterSkpController@addSmtrSkp')->name('admin.addSmtrskp');
    // Route::get('/editsmtrskp', 'Admin\SemesterSkpController@editSmtrSkp')->name('admin.editSmtrskp');
    // Route::post('/updatesmtrskp', 'Admin\SemesterSkpController@updateSmtrSkp')->name('admin.updateSmtrSkp');
    // Route::get('/deletesmtrskp/{id}', 'Admin\SemesterSkpController@deleteSmtrSkp')->name('admin.deleteSmtrSkp');
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
