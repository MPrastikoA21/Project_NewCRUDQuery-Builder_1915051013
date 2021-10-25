<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
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
//Marcel Prastiko Arthana
//1915051013
//PTI 5A
//Owner 

Route::get('/', [MahasiswaController::class, 'home']);
Route::get('/tambah', [MahasiswaController::class, 'tambah']);
Route::post('/insert', [MahasiswaController::class, 'insert']);
Route::get('/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/update', [MahasiswaController::class, 'update']);
Route::get('/hapus/{id}', [MahasiswaController::class, 'hapus']);
