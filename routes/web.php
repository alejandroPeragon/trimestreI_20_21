<?php

use App\Http\Controllers\ModulosController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/modulos', [ModulosController::class, 'index']);

Route::get('/modulos/edit/{id}', [ModulosController::class, 'getEdit']);//->middleware('auth');
Route::put('/modulos/edit/{id}', [ModulosController::class, 'putEdit']);

//require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
