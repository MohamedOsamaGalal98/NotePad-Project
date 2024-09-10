<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NotePadController;

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



Route::get('/notepad', [NotePadController::class, 'index']);

Route::get('/notepad/create', [NotePadController::class, 'create']);

Route::post('/notepad', [NotePadController::class, 'store']);


Route::get('/notepad/{id}', [NotePadController::class, 'edit']);

Route::post('/notepad/{id}', [NotePadController::class, 'update']);

Route::delete('/notepad/{id}', [NotePadController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
