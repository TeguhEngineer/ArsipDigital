<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerihalController;
use App\Http\Controllers\SuratmasukController;
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

// Route::get('/', function () {
//     return view('beranda');
// });

// Route::get('/oy', function () {
//     return view('login');
// });

// Login
Route::get('/',[LoginController::class,'index']);
Route::post('/masukberanda',[LoginController::class,'login']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/beranda',[IndexController::class,'beranda']);
Route::get('/suratkeluar',[IndexController::class,'suratkeluar']);
Route::get('/profile',[IndexController::class,'profile']);
Route::get('/laporan',[IndexController::class,'laporan']);
Route::resource('/perihal',PerihalController::class);
Route::resource('/suratmasuk',SuratmasukController::class);
Route::get('/file/download/{id}', [IndexController::class, 'download'])->name('file.download');
