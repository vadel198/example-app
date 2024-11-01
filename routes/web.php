<?php

use App\Http\Controllers\pegawaiController;
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

Route::get('/', [pegawaiController::class, 'index']);


Route::get('pegawai.edit', [pegawaiController::class, 'edit'])->name('edit');
Route::get('pegawai.tambah', [pegawaiController::class, 'tambah'])->name('tambah');

Route::get('/pegawai', [pegawaiController::class, 'index'])->name('getalldataPegawai');
Route::post('/pegawai', [pegawaiController::class, 'createData'])->name('createDataPegawai');

Route::get('/pegawai/get/{id}', [pegawaiController::class, 'getDataById'])->name('getDataByIdPegawai');
Route::post('/pegawai/update/{id}', [pegawaiController::class, 'updateData'])->name('updateDataPegawai');
Route::delete('/pegawai/delete/{id}', [pegawaiController::class, 'deleteData'])->name('deleteDataPegawai');