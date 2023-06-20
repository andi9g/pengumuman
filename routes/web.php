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

Route::get('/', 'siswaC@root');
// Route::get('siswa', 'siswaC@index');
// Route::post('siswa', 'siswaC@import')->name('import.siswa');


// Route::get('pdf', 'startController@pdf');

// Route::get('siswa/export/', 'startController@export');
