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
    return view('welcome');
});

Route::get('/siswa',[App\Http\Controllers\SiswaController::class, 'index']);
Route::post('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create']);
Route::get('/siswa/{id}/edit', [App\Http\Controllers\SiswaController::class, 'edit']);
Route::post('/siswa/{id}/update', [App\Http\Controllers\SiswaController::class, 'update']);
Route::get('/siswa/{id}/delete', [App\Http\Controllers\SiswaController::class, 'delete']);
Route::get('/siswa/{id}/profile', [App\Http\Controllers\SiswaController::class, 'profile']);
Route::get('/home1', [App\Http\Controllers\home1Controller::class, 'home1']);
Route::get('/Berita', [App\Http\Controllers\BeritaController::class, 'Berita']); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
