<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;

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

// Route::get('/', function () {
//     return view('admin.index');
// });

Route::get('/anggota', [AnggotaController::class, 'create'])->name('tampilAnggota')->middleware('auth');
Route::post('/anggota', [AnggotaController::class, 'store'])->name('stored')->middleware('auth');
Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('editMember')->middleware('auth');
Route::patch('/anggota/{id}/edit',[AnggotaController::class, 'update'])->name('updateMember')->middleware('auth');
Route::delete('/anggota/delete/{id}', [AnggotaController::class, 'delete'])->name('deleteAnggota')->middleware('auth');

Route::get('/', [LoginController::class, 'create']);
Route::post('/', [LoginController::class, 'authenticate'])->name('login');
Route::get('/register', [LoginController::class, 'regCreate']);
Route::post('/register', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/buku', [BukuController::class, 'create'])->middleware('auth');
Route::post('/buku', [BukuController::class, 'store'])->middleware('auth');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('editBuku')->middleware('auth');
Route::patch('/buku/{id}/edit', [BukuController::class, 'update'])->name('updateBuku')->middleware('auth');
Route::delete('/buku/delete/{id}', [BukuController::class, 'destroy'])->middleware('auth');

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->middleware('auth');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->middleware('auth');
Route::get('/peminjaman/{id}/edit', [PeminjamanController::class, 'show'])->middleware('auth');
Route::patch('/peminjaman/{id}/edit', [PeminjamanController::class, 'update'])->middleware('auth');
Route::delete('/peminjaman/{id}', [PeminjamanController::class, 'destroy'])->middleware('auth');




