<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile', [ProfileController::class, 'profile']);

Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile']);

Route::get('/user', [UserController::class, 'index'])
    ->name('user.index');

Route::get('/user/create', [UserController::class, 'create'])
    ->name('user.create');

Route::post('/user', [UserController::class, 'store'])
    ->name('user.store');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])
    ->name('user.edit');

Route::put('/user/{id}', [UserController::class, 'update'])
    ->name('user.update');

Route::delete('/user/{id}', [UserController::class, 'destroy'])
    ->name('user.destroy');


/*
|--------------------------------------------------------------------------
| Mata Kuliah
|--------------------------------------------------------------------------
*/

Route::get('/mata-kuliah', [MataKuliahController::class, 'index'])
    ->name('matakuliah.index');

Route::get('/mata-kuliah/create', [MataKuliahController::class, 'create'])
    ->name('matakuliah.create');

Route::post('/mata-kuliah', [MataKuliahController::class, 'store'])
    ->name('matakuliah.store');

Route::get('/mata-kuliah/{id}/edit', [MataKuliahController::class, 'edit'])
    ->name('matakuliah.edit');

Route::put('/mata-kuliah/{id}', [MataKuliahController::class, 'update'])
    ->name('matakuliah.update');

Route::delete('/mata-kuliah/{id}', [MataKuliahController::class, 'destroy'])
    ->name('matakuliah.destroy');