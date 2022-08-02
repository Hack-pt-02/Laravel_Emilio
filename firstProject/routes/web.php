<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalController;

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

Route::get('/', [LocalController::class, 'index'])->name('index');

Route::get('/local/{id}', [LocalController::class, 'show'])->name('show');

Route::get('/create', [LocalController::class, 'create'])->name('create');

Route::post("/create", [LocalController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
